<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    public static function _getCategories()
    {
    	return self::all();
    }

    public static function getCategory($category)
    {

    	if ($category == 999) {
    		return "General";
    	} else {
    		$cat =  self::find($category);
    		return $cat->title;
    	}
    	
    }
}
