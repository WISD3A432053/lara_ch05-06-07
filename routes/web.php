<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('student/{student_no}/score/{subject?}', function ($student_no,$subject = null) {
    return "學號：".$student_no."的".((is_null($subject))?"所有科目":$subject)."成績";
});

Route::get('student/{student_no}', function ($student_no) {
    return "學號：".$student_no;
})->where(['student_no'=>'s[0-9]{10}']);
Route::get('student/{student_no}/score/{subject?}', function ($student_no,$subject = null) {
    return "學號：" . $student_no . "的" . ((is_null($subject)) ? "所有科目" : $subject) . "成績";
})->where(['student_no'=>'s[0-9]{10}','subject'=>'(chinese|english|math)']);

route::pattern('student_no','s[0-9]{10}');
Route::get('student/{student_no}', function ($student_no) {
    return "學號：".$student_no;
});
Route::get('student/{student_no}/score/{subject?}', function ($student_no,$subject = null) {
    return "學號：" . $student_no . "的" . ((is_null($subject)) ? "所有科目" : $subject) . "成績";
})->where(['student_no'=>'s[0-9]{10}','subject'=>'(chinese|english|math)']);

route::pattern('student_no','s[0-9]{10}');
route::group(['prefix'=>'student'],function() {
    Route::get('{student_no}', function ($student_no) {
        return "學號：" . $student_no;
    });
    Route::get('student/{student_no}/score/{subject?}', function ($student_no, $subject = null) {
        return "學號：" . $student_no . "的" . ((is_null($subject)) ? "所有科目" : $subject) . "成績";
    })->where(['student_no' => 's[0-9]{10}', 'subject' => '(chinese|english|math)']);
});

route::pattern('student_no','s[0-9]{10}');
route::group(['prefix'=>'student'],function() {

    Route::get('{student_no}',[
        'as'=>'student',
        'use'=> function ($student_no) {
            return '學號：' . $student_no;
        }
    ]);

    Route::get('student/{student_no}/score/{subject?}', [
        'as'=>'student.score',
        'use'=> function ($student_no, $subject = null) {
            return '學號：' . $student_no . '的' . ((is_null($subject)) ? '所有科目' : $subject) . '成績';
        }
    ])->where(['subject' => '(chinese|english|math)']);
});
*/

/*


route::group(['prefix'=>'student'],function() {

    Route::get('{student_no}', [
        'as' => 'student',
        'uses' => 'StudentController@getStudentDate'
    ]);

    Route::get('student/{student_no}/score/{subject?}', [
        'as'=>'student.score',
        'uses'=>'StudentController@getStudentScore'
        ])->where(['subject' => '(chinese|english|math)']);
});

route::controller('board','BoardController');




Route::group(['namespace'=>'Cool'],function () {
    Route::get('cool', 'Cool\TestController@indexc');
});
*/

route::get('/','HomeController@index');

Route::get('/board', 'BoardController@getIndex');


Route::group(['prefix' => 'student'],function() {

    Route::get('{student_no}', ['as' => 'student', 'uses' => 'StudentController@getStudentData']);

    Route::get('{student_no}/score/{subject?}', ['as' => 'student.score',
        'uses' => 'StudentController@getStudentScore'])->where(['subject' => '(chinese|english|math)']);
});

Route::group(['namespace'=>'Cool'],function(){
    Route::get('cool','TestController@index');
});