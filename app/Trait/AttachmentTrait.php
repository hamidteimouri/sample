<?php

namespace App\Traits;

use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use App\Attachment;

define('PATH_TO_UPLOAD', 'files/uploads/');
define('SITE_NAME', config('app.name'));

trait AttachmentTrait
{
    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($object) {
            $object->attachments()->get()->each(function ($attachment) {
                $attachment->delete();
            });
        });
    }

    public function attachments($slug = null)
    {
        /*
         if ($slug) {
             return $this->morphMany(Attachment::class, 'attachmentable')->where('slug', $slug);
         } else {
             return $this->morphMany(Attachment::class, 'attachmentable');
         }
         */

        return $this->morphMany(Attachment::class, 'attachmentable');

    }

    public function attachmentSlug($slug = "main")
    {
        return $this->attachments()->slug($slug);
    }

    public function attachmentSlugWithTitle($slug = "main", $title = 'main')
    {
        return $this->attachments()->slug($slug)->title($title);
    }

    public function createImage($file, $slug, $cropper = null, $thumbnails = null, $quality = 90, $watermark = false, $storage = false)
    {
        $modelName = md5($this->getTable());
        $id = md5($this->id);
        $randText = str_random(4);

        //Make Model Folder
        if (!File::exists(PATH_TO_UPLOAD . $modelName . '/')) {
            File::makeDirectory(PATH_TO_UPLOAD . $modelName . '/');
        }
        //Make Object Folder
        if (!File::exists(PATH_TO_UPLOAD . $modelName . '/' . $id . '/')) {
            File::makeDirectory(PATH_TO_UPLOAD . $modelName . '/' . $id . '/');
        }


        //Remove Special Character
        $fileName = SITE_NAME . '-' . $randText . '-' . preg_replace("/[^a-zA-Z0-9.]/", '0', $file->getClientOriginalName());;

        if (File::exists(PATH_TO_UPLOAD . $modelName . '/' . $id . '/' . $fileName)) {
            $fileName = rand(10000, 99999) . '-' . $fileName;
        }
        $filePath = PATH_TO_UPLOAD . $modelName . '/' . $id . '/' . $fileName;

        $size = intval($file->getClientSize());
        $size = ($size / 1024) / 1024;
        $size_format = 'MB';
        if ($size < 1) {
            $size = $size * 1024;
            $size_format = 'KB';
        }

        $this->attachments()->create([
            'title' => $slug,
            'slug' => $slug = (substr($slug, 0, 7) == "attach_") ? "attachment" : $slug,
            'mime' => $file->getMimeType(),
            'file_name' => $fileName,
            'size' => intval($size), // Kilobyte or Megabyte
            'size_format' => $size_format, // KB or MB
        ]);

        $img = Image::make($file);


        if (!is_null($cropper)) {
            $width = intval($cropper['w']);
            $height = intval($cropper['h']);
            $x = intval($cropper['x']);
            $y = intval($cropper['y']);
            $img = $img->crop($width, $height, $x, $y);
        }
        if ($watermark) {
            // code about watermark must be here...
            return 1;
        }
        if ($storage) {
            // code of storage must be here ...
            return 1;
        } else {
            $img->save($filePath, $quality);
        }

        if (exif_imagetype($filePath)) {
            if (isset($thumbnails)) {
                foreach ($thumbnails as $thumb_size) {
                    list($width, $height) = explode('/', $thumb_size);
                    $img_thumb = Image::make($filePath);

                    if ($width == 0) {
                        $img_thumb->resize(null, intval($height), function ($constraint) {
                            $constraint->aspectRatio();
                            $constraint->upsize();
                        });
                    } elseif ($height == 0) {
                        $img_thumb->resize(intval($width), null, function ($constraint) {
                            $constraint->aspectRatio();
                            $constraint->upsize();
                        });
                    } else {
                        $img_thumb->fit(intval($width), intval($height));
                    }
                    $img_thumb->save(PATH_TO_UPLOAD . $modelName . '/' . $id . '/' . 'th_' . $width . '-' . $height . '_' . $fileName);
                }
            }
        }
    }

    public function createImageResponseId($file, $slug, $cropper = null, $thumbnails = null, $quality = 90, $watermark = false)
    {
        $modelName = md5($this->getTable());
        $id = md5($this->id);
        $randText = str_random(4);

        //Make Model Folder
        if (!File::exists(PATH_TO_UPLOAD . $modelName . '/')) {
            File::makeDirectory(PATH_TO_UPLOAD . $modelName . '/');
        }
        //Make Object Folder
        if (!File::exists(PATH_TO_UPLOAD . $modelName . '/' . $id . '/')) {
            File::makeDirectory(PATH_TO_UPLOAD . $modelName . '/' . $id . '/');
        }


        //Remove Special Character
        $fileName = SITE_NAME . '-' . $randText . '-' . preg_replace("/[^a-zA-Z0-9.]/", '0', $file->getClientOriginalName());;

        if (File::exists(PATH_TO_UPLOAD . $modelName . '/' . $id . '/' . $fileName)) {
            $fileName = rand(10000, 99999) . '-' . $fileName;
        }
        $filePath = PATH_TO_UPLOAD . $modelName . '/' . $id . '/' . $fileName;

        $size = intval($file->getClientSize());
        $size = ($size / 1024) / 1024;
        $size_format = 'MB';
        if ($size < 1) {
            $size = $size * 1024;
            $size_format = 'KB';
        }

        $created_image = $this->attachments()->create([
            'title' => $slug,
            'slug' => $slug = (substr($slug, 0, 7) == "attach_") ? "attachment" : $slug,
            'mime' => $file->getMimeType(),
            'file_name' => $fileName,
            'size' => intval($size), // Kilobyte or Megabyte
            'size_format' => $size_format, // KB or MB
        ]);

        $img = Image::make($file);


        if (!is_null($cropper)) {
            $width = intval($cropper['w']);
            $height = intval($cropper['h']);
            $x = intval($cropper['x']);
            $y = intval($cropper['y']);
            $img = $img->crop($width, $height, $x, $y);
        }
        if ($watermark) {
            return 1;
        }
        $img->save($filePath, $quality);

        if (exif_imagetype($filePath)) {
            if (isset($thumbnails)) {
                foreach ($thumbnails as $thumb_size) {
                    list($width, $height) = explode('/', $thumb_size);
                    $img_thumb = Image::make($filePath);
                    if ($width == 0) {
                        $img_thumb->resize(null, intval($height), function ($constraint) {
                            $constraint->aspectRatio();
                            $constraint->upsize();
                        });
                    } elseif ($height == 0) {
                        $img_thumb->resize(intval($width), null, function ($constraint) {
                            $constraint->aspectRatio();
                            $constraint->upsize();
                        });
                    } else {
                        $img_thumb->fit(intval($width), intval($height));
                    }
                    $img_thumb->save(PATH_TO_UPLOAD . $modelName . '/' . $id . '/' . 'th_' . $width . '-' . $height . '_' . $fileName);
                }
            }
        }

        return $created_image->id;
    }

    public function updateImage($file, $slug, $cropper = null, $thumbnails = null, $quality = 90, $watermark = false)
    {
        // Delete Old Images
        $this->attachmentSlug($slug)->get()->each(function ($attachment) {
            $attachment->delete();
        });

        $modelName = md5($this->getTable());
        $id = md5($this->id);
        $randText = str_random(4);

        //Make Model Folder
        if (!File::exists(PATH_TO_UPLOAD . $modelName . '/')) {
            File::makeDirectory(PATH_TO_UPLOAD . $modelName . '/');
        }
        //Make Object Folder
        if (!File::exists(PATH_TO_UPLOAD . $modelName . '/' . $id . '/')) {
            File::makeDirectory(PATH_TO_UPLOAD . $modelName . '/' . $id . '/');
        }


        //Remove Special Character
        $fileName = SITE_NAME . '-' . $randText . '-' . preg_replace("/[^a-zA-Z0-9.]/", '0', $file->getClientOriginalName());;

        if (File::exists(PATH_TO_UPLOAD . $modelName . '/' . $id . '/' . $fileName)) {
            $fileName = rand(10000, 99999) . '-' . $fileName;
        }
        $filePath = PATH_TO_UPLOAD . $modelName . '/' . $id . '/' . $fileName;

        $size = intval($file->getClientSize());
        $size = ($size / 1024) / 1024;
        $size_format = 'MB';
        if ($size < 1) {
            $size = $size * 1024;
            $size_format = 'KB';
        }

        $this->attachments()->create([
            'title' => $slug,
            'slug' => $slug = (substr($slug, 0, 7) == "attach_") ? "attachment" : $slug,
            'mime' => $file->getMimeType(),
            'file_name' => $fileName,
            'size' => intval($size), // Kilobyte or Megabyte
            'size_format' => $size_format, // KB or MB
        ]);

        $img = Image::make($file);


        if (!is_null($cropper)) {
            $width = intval($cropper['w']);
            $height = intval($cropper['h']);
            $x = intval($cropper['x']);
            $y = intval($cropper['y']);
            $img = $img->crop($width, $height, $x, $y);
        }
        if ($watermark) {

        }
        $img->save($filePath, $quality);

        if (exif_imagetype($filePath)) {
            if (isset($thumbnails)) {
                foreach ($thumbnails as $thumb_size) {
                    list($width, $height) = explode('/', $thumb_size);
                    $img_thumb = Image::make($filePath);
                    if ($width == 0) {
                        $img_thumb->resize(null, intval($height), function ($constraint) {
                            $constraint->aspectRatio();
                            $constraint->upsize();
                        });
                    } elseif ($height == 0) {
                        $img_thumb->resize(intval($width), null, function ($constraint) {
                            $constraint->aspectRatio();
                            $constraint->upsize();
                        });
                    } else {
                        $img_thumb->fit(intval($width), intval($height));
                    }
                    $img_thumb->save(PATH_TO_UPLOAD . $modelName . '/' . $id . '/' . 'th_' . $width . '-' . $height . '_' . $fileName);
                }
            }
        }
    }

    public function takeImage($slug = "main", $thumbs = null, $default = 'default.png')
    {
        $image = $this->attachments->filter(function ($value) use ($slug) {
            return ($value['slug'] == $slug) ? true : false;
        })->first();

        if (!empty($image)) {
            $modelName = md5($this->getTable());
            $id = md5($this->id);

            if (isset($thumbs)) {
                list($width, $height) = explode('/', $thumbs);
                $filePath = PATH_TO_UPLOAD . $modelName . '/' . $id . '/' . 'th_' . $width . '-' . $height . '_' . $image->file_name;
            } else {
                $filePath = PATH_TO_UPLOAD . $modelName . '/' . $id . '/' . $image->file_name;
            }

            if (File::exists($filePath)) {
                return url('/') . "/" . $filePath;
            } else {
                return url('/') . "/" . PATH_FOR_DEFAULT . $default;
            }

        } else {
            return url('/') . "/" . PATH_FOR_DEFAULT . $default;
        }
    }

    public function takeImageWithName($imageName, $thumbs = null, $default = 'default.png')
    {
        $modelName = md5($this->getTable());
        $id = md5($this->id);

        if (isset($thumbs)) {
            list($width, $height) = explode('/', $thumbs);
            $filePath = PATH_TO_UPLOAD . $modelName . '/' . $id . '/' . 'th_' . $width . '-' . $height . '_' . $imageName;
        } else {
            $filePath = PATH_TO_UPLOAD . $modelName . '/' . $id . '/' . $imageName;
        }

        if (File::exists($filePath)) {
            return url('/') . "/" . $filePath;
        } else {
            return url('/') . "/" . PATH_FOR_DEFAULT . $default;
        }
    }

    public function deleteImage($slug)
    {
        $this->attachmentSlug($slug)->get()->each(function ($attachment) {
            $attachment->delete();
        });
    }

    public function createVideo($file, $slug, $FineUploaderFile = "", $storage = false)
    {
        //Windows
        $ffmpeg = FFMpeg::create([
            'ffmpeg.binaries' => 'assets/front/_plugins/ffmpeg/bin/ffmpeg.exe', // the path to the FFMpeg binary
            'ffprobe.binaries' => 'assets/front/_plugins/ffmpeg/bin/ffprobe.exe', // the path to the FFProbe binary
            'timeout' => 0, // the timeout for the underlying process
//                'ffmpeg.threads'   => 12,   // the number of threads that FFMpeg should use
        ]);
        $ffprop = FFProbe::create([
            'ffmpeg.binaries' => 'assets/front/_plugins/ffmpeg/bin/ffmpeg.exe', // the path to the FFMpeg binary
            'ffprobe.binaries' => 'assets/front/_plugins/ffmpeg/bin/ffprobe.exe', // the path to the FFProbe binary
            'timeout' => 0, // the timeout for the underlying process
//                'ffmpeg.threads'   => 12,   // the number of threads that FFMpeg should use
        ]);


//LINUX
//زمانی که روی سرور آپلود میکنیم قسمت بالا را کامنت کرده و قسمت پایین را از کامنت خارج می کنیم.
//    $ffmpeg = FFMpeg::create([
//        'ffmpeg.binaries'  => 'assets/front/_plugins/ffmpeg/ffmpeg', // the path to the FFMpeg binary
//        'ffprobe.binaries' => 'assets/front/_plugins/ffmpeg/ffprobe', // the path to the FFProbe binary
//        'timeout'          => 3600, // the timeout for the underlying process
//        'ffmpeg.threads'   => 12,   // the number of threads that FFMpeg should use
//    ]);
//    $ffprop = FFProbe::create([
//        'ffmpeg.binaries'  => 'assets/front/_plugins/ffmpeg/ffmpeg', // the path to the FFMpeg binary
//        'ffprobe.binaries' => 'assets/front/_plugins/ffmpeg/ffprobe', // the path to the FFProbe binary
//        'timeout'          => 3600, // the timeout for the underlying process
//        'ffmpeg.threads'   => 12,   // the number of threads that FFMpeg should use
//    ]);

        $modelName = md5($this->getTable());
        $id = md5($this->id);
        $randText = str_random(4);

        //Make Model Folder
        if (!File::exists(PATH_TO_UPLOAD . $modelName . '/')) {
            File::makeDirectory(PATH_TO_UPLOAD . $modelName . '/');
        }
        //Make Object Folder
        if (!File::exists(PATH_TO_UPLOAD . $modelName . '/' . $id . '/')) {
            File::makeDirectory(PATH_TO_UPLOAD . $modelName . '/' . $id . '/');
        }

        if ($storage == true) {
            if (!File::exists(storage_path() . '/app/' . $modelName . '/')) {
                File::makeDirectory(storage_path() . '/app/' . $modelName . '/');
            }
            if (!File::exists(storage_path() . '/app/' . $modelName . '/' . $id . '/')) {
                File::makeDirectory(storage_path() . '/app/' . $modelName . '/' . $id . '/');
            }
        }
        if ($storage == true) {
            $filePath = storage_path() . '/app/' . $modelName . '/' . $id;
        } else {
            $filePath = PATH_TO_UPLOAD . $modelName . '/' . $id;

        }

        if ($FineUploaderFile == "") {
            $fileName = SITE_NAME . '-' . $randText . '-' . preg_replace("/[^a-zA-Z0-9.]/", '0', $file->getClientOriginalName());
            if (File::exists($filePath . '/' . $fileName)) {
                $fileName = rand(10000, 99999) . '-' . $fileName;
            }
            $file->move($filePath, $fileName);
        } else {
            $fileName = $FineUploaderFile;
            rename(storage_path() . '/app/public/completed/' . $fileName, $filePath . '/' . $fileName);
        }

        $UploadedFile = $filePath . '/' . $fileName;

        $size = $ffprop->format($UploadedFile)->get('size');
        $size = ($size / 1024) / 1024;
        $size_format = 'MB';
        if ($size < 1) {
            $size = $size * 1024;
            $size_format = 'KB';
        }
        $ext = pathinfo($fileName, PATHINFO_EXTENSION);
        $duration = $ffprop->format($UploadedFile)->get('duration', 'sexagesimal');
        $ducation_for_pic = intval($duration) / 2;

        if (!$this->attachmentSlug('video_picture_preview')->count()) {
            $video = $ffmpeg->open($UploadedFile);
            $video->frame(TimeCode::fromSeconds($ducation_for_pic))->save(PATH_TO_UPLOAD . $modelName . '/' . $id . '/' . $randText . '.jpg');
            $this->attachments()->create([
                'title' => "video_picture_preview",
                'slug' => "video_picture_preview",
                'mime' => "image/jpeg",
                'file_name' => $randText . '.jpg',
            ]);
        }

        $this->attachments()->create([
            'title' => $slug,
            'slug' => $slug = (substr($slug, 0, 7) == "attach_") ? "attachment" : $slug,
            'mime' => 'video/' . $ext,
            'file_name' => $fileName,
            'size' => intval($size), // Kilobyte or Megabyte
            'size_format' => $size_format, // KB or MB
            'duration' => gmdate("H:i:s", $duration),
        ]);
    }

    public function takeVideo($slug)
    {
        $modelName = md5($this->getTable());
        $id = md5($this->id);

        $video = $this->attachments->filter(function ($value) use ($slug) {
            return ($value['slug'] == $slug) ? true : false;
        })->first();

        $file_path = asset(PATH_TO_UPLOAD . $modelName . '/' . $id . '/' . $video->file_name);
        return $file_path;
    }

    public function deleteVideo($slug, $storage = false, $previewImage = false, $previewImageSlug = 'video_picture_preview')
    {
        $modelName = md5($this->getTable());
        $id = md5($this->id);

        $video = $this->attachments->filter(function ($value) use ($slug) {
            return ($value['slug'] == $slug) ? true : false;
        })->first();

        if ($storage == true) {
            $file_path = storage_path() . '/app/' . $modelName . '/' . $id . '/' . $video->file_name;
        } else {
            $file_path = PATH_TO_UPLOAD . $modelName . '/' . $id . '/' . $video->file_name;
        }

        if (file_exists($file_path)) {
            unlink($file_path);
        }
        $video->delete();
        if ($previewImage == true) {
            $this->attachmentSlug($previewImageSlug)->delete();
        }
    }

    public function createFile($file, $slug, $storage = false)
    {
        $modelName = md5($this->getTable());
        $id = md5($this->id);
        $randText = str_random(4);

        //Make Model Folder
        if (!File::exists(PATH_TO_UPLOAD . $modelName . '/')) {
            File::makeDirectory(PATH_TO_UPLOAD . $modelName . '/');
        }
        //Make Object Folder
        if (!File::exists(PATH_TO_UPLOAD . $modelName . '/' . $id . '/')) {
            File::makeDirectory(PATH_TO_UPLOAD . $modelName . '/' . $id . '/');
        }

        if ($storage == true) {
            if (!File::exists(storage_path() . '/app/' . $modelName . '/')) {
                File::makeDirectory(storage_path() . '/app/' . $modelName . '/');
            }
            if (!File::exists(storage_path() . '/app/' . $modelName . '/' . $id . '/')) {
                File::makeDirectory(storage_path() . '/app/' . $modelName . '/' . $id . '/');
            }
        }

        //Remove Special Character
        $fileName = SITE_NAME . '-' . $randText . '-' . preg_replace("/[^a-zA-Z0-9.]/", '0', $file->getClientOriginalName());
        if (File::exists(PATH_TO_UPLOAD . $modelName . '/' . $id . '/' . $fileName)) {
            $fileName = rand(10000, 99999) . '-' . $fileName;
        }
        if ($storage == true) {
            $filePath = storage_path() . '/app/' . $modelName . '/' . $id;
        } else {
            $filePath = BASE_PATH_TO_UPLOAD . $modelName . '/' . $id;
        }
        $file->move($filePath, $fileName);

        $size = $file->getClientSize();
        $size = ($size / 1024) / 1024;
        $size_format = 'MB';
        if ($size < 1) {
            $size = $size * 1024;
            $size_format = 'KB';
        }

        $this->attachments()->create([
            'title' => $slug,
            'slug' => $slug = (substr($slug, 0, 7) == "attach_") ? "attachment" : $slug,
            'mime' => File::mimeType($filePath . '/' . $fileName),
            'file_name' => $fileName,
            'size' => intval($size), // Kilobyte or Megabyte
            'size_format' => $size_format, // KB or MB
        ]);
    }

    public function updateFile($file, $slug, $storage = false)
    {
        // Delete Old Files
        $this->attachmentSlug($slug)->get()->each(function ($attachment) {
            $attachment->delete();
        });

        $modelName = md5($this->getTable());
        $id = md5($this->id);
        $randText = str_random(4);

        //Make Model Folder
        if (!File::exists(PATH_TO_UPLOAD . $modelName . '/')) {
            File::makeDirectory(PATH_TO_UPLOAD . $modelName . '/');
        }
        //Make Object Folder
        if (!File::exists(PATH_TO_UPLOAD . $modelName . '/' . $id . '/')) {
            File::makeDirectory(PATH_TO_UPLOAD . $modelName . '/' . $id . '/');
        }

        if ($storage == true) {
            if (!File::exists(storage_path() . '/app/' . $modelName . '/')) {
                File::makeDirectory(storage_path() . '/app/' . $modelName . '/');
            }
            if (!File::exists(storage_path() . '/app/' . $modelName . '/' . $id . '/')) {
                File::makeDirectory(storage_path() . '/app/' . $modelName . '/' . $id . '/');
            }
        }

        //Remove Special Character
        $fileName = SITE_NAME . '-' . $randText . '-' . preg_replace("/[^a-zA-Z0-9.]/", '0', $file->getClientOriginalName());
        if (File::exists(PATH_TO_UPLOAD . $modelName . '/' . $id . '/' . $fileName)) {
            $fileName = rand(10000, 99999) . '-' . $fileName;
        }
        if ($storage == true) {
            $filePath = storage_path() . '/app/' . $modelName . '/' . $id;
        } else {
            $filePath = BASE_PATH_TO_UPLOAD . $modelName . '/' . $id;
        }
        $file->move($filePath, $fileName);

        $size = $file->getClientSize();
        $size = ($size / 1024) / 1024;
        $size_format = 'MB';
        if ($size < 1) {
            $size = $size * 1024;
            $size_format = 'KB';
        }

        $this->attachments()->create([
            'title' => $slug,
            'slug' => $slug = (substr($slug, 0, 7) == "attach_") ? "attachment" : $slug,
            'mime' => File::mimeType($filePath . '/' . $fileName),
            'file_name' => $fileName,
            'size' => intval($size), // Kilobyte or Megabyte
            'size_format' => $size_format, // KB or MB
        ]);
    }

    public function takeFile($slug)
    {
        $modelName = md5($this->getTable());
        $id = md5($this->id);

        $file = $this->attachments->filter(function ($value) use ($slug) {
            return ($value['slug'] == $slug) ? true : false;
        })->first();

        $file_path = asset(PATH_TO_UPLOAD . $modelName . '/' . $id . '/' . $file->file_name);
        return $file_path;
    }

    public function deleteFile($slug, $storage = false)
    {
        $modelName = md5($this->getTable());
        $id = md5($this->id);

        if ($storage == true) {
            $file_path = storage_path() . '/app/' . $modelName . '/' . $id . '/' . $this->attachmentSlug($slug)->first()->file_name;
        } else {
            $file_path = PATH_TO_UPLOAD . $modelName . '/' . $id . '/' . $this->attachmentSlug($slug)->first()->file_name;
        }
        if (file_exists($file_path)) {
            unlink($file_path);
        }
        $this->attachmentSlug($slug)->get()->each(function ($attachment) {
            $attachment->delete();
        });
    }

    public function src($slug = 'main', $title = 'main', $thumbnail = null)
    {

        $table = md5($this->getTable());
        $id = md5($this->id);
        $width = ($thumbnail) ? explode('/', $thumbnail)[0] : false;
        $height = ($thumbnail) ? explode('/', $thumbnail)[1] : false;

        if ($attachment = $this->attachments()->where('slug', $slug)->where('title', $title)->first()) {
            if ($width && $height) {
                $src = url('/') . "/" . BASE_PATH_TO_UPLOAD . $table . "/" . $id . "/th_{$width}-{$height}_" . $attachment->file_name;
            } else {
                $src = url('/') . "/" . BASE_PATH_TO_UPLOAD . $table . "/" . $id . "/" . $attachment->file_name;
            }
        } else {
            if ($slug != 'user') {
                if ($width && $height) {
                    if (file_exists(BASE_PATH_TO_UPLOAD . "defaults/th_{$width}-{$height}_default.jpg")) {
                        $src = url('/') . "/" . BASE_PATH_TO_UPLOAD . "defaults/th_{$width}-{$height}_default.jpg";
                    } else {
                        Image::make(BASE_PATH_TO_UPLOAD . "default.jpg")->fit($width, $height)->save(BASE_PATH_TO_UPLOAD . "defaults/th_{$width}-{$height}_default.jpg");
                        $src = url('/') . "/" . BASE_PATH_TO_UPLOAD . "defaults/th_{$width}-{$height}_default.jpg";
                    }
                } else {
                    $src = url('/') . "/" . BASE_PATH_TO_UPLOAD . "default.jpg";
                }
            } else {
                if ($width && $height) {
                    if (file_exists(BASE_PATH_TO_UPLOAD . "defaults/user/th_{$width}-{$height}_user.jpg")) {
                        $src = url('/') . "/" . BASE_PATH_TO_UPLOAD . "defaults/user/th_{$width}-{$height}_user.jpg";
                    } else {
                        Image::make(BASE_PATH_TO_UPLOAD . "user.jpg")->fit($width, $height)->save(BASE_PATH_TO_UPLOAD . "defaults/user/th_{$width}-{$height}_user.jpg");
                        $src = url('/') . "/" . BASE_PATH_TO_UPLOAD . "defaults/user/th_{$width}-{$height}_user.jpg";
                    }
                } else {
                    $src = url('/') . "/" . BASE_PATH_TO_UPLOAD . "user.jpg";
                }
            }
        }

        return $src;
    }


}