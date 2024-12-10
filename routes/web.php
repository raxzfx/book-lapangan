<?php

use Illuminate\Support\Facades\Route;


Route::get('admin/index', function(){
    return view('admin.index');
});
