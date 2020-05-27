<?php

namespace App\Http\Controllers\Model\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Subcategory extends Controller
{
     protected $fillable = [
            'subcategory_id', 'subcategory_name'
        ];
}
