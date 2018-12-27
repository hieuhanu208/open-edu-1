<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'vp_categories';
    protected $primaryKey = 'cate_id';
    protected $guard = [];
    protected $fillable = [
        'cate_name', 'cate_slug',
   ];

}
