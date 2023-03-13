<?php

use App\Http\Controllers\Api\V1\SkillController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes - http://127.0.0.1:8000/api/v1/skills/create
|--------------------------------------------------------------------------
|
*/

Route::group(['prefix' => 'v1'], function () {

    Route::get('skill-search/{search}', [SkillController::class, 'searchSkill']);
    Route::resource('skills', SkillController::class);

});
