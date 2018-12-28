<?php

namespace App\Traits;

use \Morilog\Jalali\Jalalian;

trait GeneralTrait
{
    # scopes + traits

    # visibility
    public function scopeVisible($query)
    {
        return $query->where('display', 1);
    }

    public function scopeInVisible($query)
    {
        return $query->where('display', 0);
    }

    # confirmation
    public function scopeConfirmed($query)
    {
        return $query->where('confirmed', 1);
    }

    public function scopeUnConfirmed($query)
    {
        return $query->where('confirmed', 0);
    }

    # Seen or not
    public function scopeSeen($query)
    {
        return $query->where('seen', 1);
    }

    # Succeeded or not
    public function scopeSucceed($query)
    {
        return $query->where('succeed', 1);
    }

    public function scopeUnSucceed($query)
    {
        return $query->where('succeed', 0);
    }

    public function scopeMarried($query)
    {
        return $query->where('married', 1);
    }

    public function scopePopular($query)
    {
        return $query->orderByDesc('hit');
    }


    # Accessor + traits


    # date
    public function getCreatedAtInPersianAttribute()
    {
        return Jalalian::forge($this->created_at)->format('d F Y');
    }

    public function getCreatedAtInPersianNumberAttribute()
    {
        return Jalalian::forge($this->created_at)->format('Y/m/d');
    }

    public function getYearInPersianNumberAttribute()
    {
        return Jalalian::forge($this->created_at)->format('Y');
    }

    public function getMonthInPersianNumberAttribute()
    {
        return Jalalian::forge($this->created_at)->format('m');
    }

    public function getMonthInPersianAttribute()
    {
        return Jalalian::forge($this->created_at)->format('F');
    }

    public function getDayInPersianNumberAttribute()
    {
        return Jalalian::forge($this->created_at)->format('d');
    }

    public function getMarriedDateInPersianNumberAttribute()
    {
        return Jalalian::forge($this->married_date)->format('Y/m/d');
    }

    public function getBirthdayInPersianNumberAttribute()
    {
        return Jalalian::forge($this->birthday)->format('Y/m/d');
    }

    # time
    public function getTimeInPersianAttribute()
    {
        return Jalalian::forge($this->created_at)->format('H:i');
    }


}