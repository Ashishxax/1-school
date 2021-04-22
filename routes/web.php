<?php

use Illuminate\Support\Facades\Route;

header('Content-Type: text/html; charset=utf-8');
Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('view:clear');
    return "Cache, Config & View Cleared";
    // $exitCode = Artisan::call('config:cache');
});

Route::get('/', function () {return view('teacher.welcome2');});
Route::post('logout','Auth\LoginController@logout');


Auth::routes();


Route::post('/user-cred','Teacher\DashboardController@user_cred');
Route::middleware('usersession')->group(function(){
    Route::get('/home', 'Teacher\DashboardController@index')->name('teacher.dashboard');
    Route::get('/daily-sheet', 'Teacher\DashboardController@daily_sheet')->name('teacher.daily_sheet');
    //Update-Daily-Sheet
    Route::post('/update-daily-sheet', 'Teacher\DashboardController@daily_sheet_update')->name('teacher.daily_sheet_update');
    // Today Schedule Screen
    Route::get('/today-schedule', 'Teacher\ScheduleController@today_schedule')->name('teacher.today_schedule');
    //Update Schedule
    Route::post('/update-schedule', 'Teacher\ScheduleController@update_schedule');

    //Mark Performance
    Route::post('/mark-performance', 'Teacher\ScheduleController@mark_performance');

    // Performance
    Route::get('/students','StudentController@students')->name('students');
    //Student Search Ajax
    Route::get('/search-student','StudentController@search_student')->name('search-student');
    //Performance-Report
    Route::get('/performance-report/{id}','StudentController@performance_report');
});
