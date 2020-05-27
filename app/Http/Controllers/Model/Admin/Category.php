<?php

namespace App\Http\Controllers\Model\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Category;


class Category extends Controller
{
    protected $fillable = ['category_name'];
}
