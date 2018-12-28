<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    protected $table = 'attachments';

    # morph relation
    public function attachmentable()
    {
        return $this->morphTo();
    }
}
