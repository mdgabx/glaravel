<?php

use App\Enums\FileType;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/transaction/{id}', function ($id) {
    return $id;
});


// Route::get('/transaction/{transactionId}/files/{fileId}', function($tid, $fid) {
//     return $tid . " . " . " - " . ". " . $fid;
// });

// Route::get('/transaction/{transactionId}/files/{fileId}', function($tid, $fid) {
//     return $tid . " . " . " - " . ". " . $fid;
// })->whereNumber(['transactionId', 'fileId']);

// Route::get('/transaction/{transactionId}/files/{ftype}', function($tid, $ftype) {
//     return $tid . " . " . " - " . ". " . $ftype;
// })->whereIn('ftype', ['receipt', 'deposit']);


Route::get('/transaction/{transactionId}/files/{ftype}', function($tid, FileType $ftype) {
    return $tid . " . " . " - " . ". " . $ftype->value;
});



Route::get('/report/{year}/{month?}', function($tid, $fid = null) {
    return $tid . " - " . $fid;
});