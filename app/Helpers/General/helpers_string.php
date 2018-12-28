<?php
function removeSpecialChar($string)
{
    $notAllowed = ['  ', ' ', '!', '@', '#', '$', '%', '&', '*', '(', ')', '+', ';', ':', "'", '"', '/', '\\', '?', '|', '؟', '،', ',', '-', '--'];
    $string = stripslashes($string);
    $string = trim($string);
    $string = str_replace($notAllowed, '-', $string);
    return $string;
}

function removeSeparator($price)
{
    $notAllowed = ['  ', ' ', '!', '@', '#', '$', '%', '&', '*', '(', ')', '+', ';', ':', "'", '"', '/', '\\', '?', '|', '؟', '،', ',', '-', '--'];
    $price = trim($price);
    $price = str_replace($notAllowed, '', $price);
    return $price;
}

function convertSpecialCharWithSpace($string)
{
    $notAllowed = ['  ', ' ', '!', '@', '#', '$', '%', '&', '*', '(', ')', '+', ';', ':', "'", '"', '/', '\\', '?', '|', '؟', '،', ',', '-', '--'];
    $string = stripslashes($string);
    $string = trim($string);
    $string = str_replace($notAllowed, ' ', $string);
    $string = trim($string);
    return $string;
}


function showClearedStatus($status)
{
    $res = '';
    switch ($status) {
        case 0:
            $res = 'تسویه نشده';
            break;
        case 1:
            $res = 'تسویه شده';
            break;
    }
    return $res;
}

function displayStatus($status)
{
    $res = '';
    switch ($status) {
        case 0:
            $res = "خیر";
            break;
        case 1:
            $res = "بله";
            break;
    }
    return $res;
}

function seenStatus($status)
{
    $res = '';
    /*
        if ($status == 'seen') {
            $res = "<span class='label label-success'>دیده شده</span>";
        } elseif ($status == 'unread') {
            $res = "<span class='label label-danger'>دیده نشده</span>";
        } elseif ($status == '0') {
            $res = "<span class='label label-danger'>دیده نشده</span>";
        } elseif ($status == 1) {
            $res = "<span class='label label-success'>دیده شده</span>";
        }*/

//    dd($status);
    switch ($status) {
        case '0':
            $res = "<span class='label label-danger'>دیده نشده</span>";
            break;
        case '1':
            $res = "<span class='label label-success'>دیده شده</span>";
            break;
        case 'seen':
            $res = "<span class='label label-success'>دیده شده</span>";
            break;
        case 'unread':
            $res = "<span class='label label-danger'>دیده نشده</span>";
            break;
    }


    return $res;
}

function replyStatus($status)
{
    $res = '';
    switch ($status) {
        case 'email':
            $res = "<span class='label label-primary'>پاسخ داده شده از طریق ایمیل</span>";
            break;
        case 'sms':
            $res = "<span class='label label-warning'>پاسخ داده شده از طریق SMS</span>";
            break;
        case "website":
            $res = "<span class='label label-success'>پاسخ داده شده از طریق وبسایت</span>";
            break;
        case 'not_replied':
            $res = "<span class='label label-danger'>بدون پاسخ</span>";
            break;
    }

    return $res;
}

function anyStrForSearch($string)
{
    $string = trim($string);
    $string = str_replace(' ', '%', $string);
    $string = "%$string%";
    return $string;
}

function generateUniqueNumber($prefixNumber = null, $start = 100000, $end = 800000)
{
    $s = $start;
    $e = $end;
    if (!isset($start)) {
        $e = 100000;
    }
    if (!isset($end)) {
        $e = 900000;
    }

    //$num_str = sprintf("%06d", mt_rand($s, $e));
    $number = mt_rand($s, $e);

    // this is for assurance
    $testNumber = mt_rand(100, 200);
    $number += $testNumber;
    $number += 123;

    if (!is_null($prefixNumber)) {
        $number = $prefixNumber . $number;
    }
    return $number;
}