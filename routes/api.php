<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \codicastudio\TagsField\Http\Controllers\TagsFieldController::class.'@index');
