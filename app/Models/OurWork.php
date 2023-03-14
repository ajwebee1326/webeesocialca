<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use Illuminate\Database\Eloquent\Casts\Attribute;
use App\Observers\OurWorkObserver;

class OurWork extends Model
{
    use HasFactory;

    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    // public function setAccordianTitleAttribute($value){
    //     $this->attributes['accordian_title'] = implode(',',$value);
    // }

    // public function setAccordianDescriptionAttribute($value){
    //     $this->attributes['accordian_description'] = implode(',',$value);
    // }
}
