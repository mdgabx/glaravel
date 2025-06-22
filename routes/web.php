<?php

use App\Enums\FileType;
use App\Http\Controllers\ProcessTransactionController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/transaction/{id}', function ($id) {
//     return $id;
// });


// Route::get('/transaction/{transactionId}/files/{fileId}', function($tid, $fid) {
//     return $tid . " . " . " - " . ". " . $fid;
// });

// Route::get('/transaction/{transactionId}/files/{fileId}', function($tid, $fid) {
//     return $tid . " . " . " - " . ". " . $fid;
// })->whereNumber(['transactionId', 'fileId']);

// Route::get('/transaction/{transactionId}/files/{ftype}', function($tid, $ftype) {
//     return $tid . " . " . " - " . ". " . $ftype;
// })->whereIn('ftype', ['receipt', 'deposit']);


// Route::get('/transaction/{transactionId}/files/{ftype}', function($tid, FileType $ftype) {
//     return $tid . " . " . " - " . ". " . $ftype->value;
// });



// Route::get('/report/{year}/{month?}', function($tid, $fid = null) {
//     return $tid . " - " . $fid;
// });

Route::prefix('transactions')->group(function () {
    Route::controller(TransactionController::class)->group(function () {
        Route::get('/', 'index')->name('transactions');
        Route::get('/{transactionId}',  'show')->whereNumber('transactionId')->name('transaction');
        Route::get('/create', 'create');
        Route::post('/', 'store');
    });


    Route::get('/{transactionId}/process', ProcessTransactionController::class);
});

// Route::get('/transactions/{transactionId}/process', [ProcessTransactionController::class, '__invoke']); 
// or
