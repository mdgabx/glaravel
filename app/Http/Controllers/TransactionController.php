<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    //
    public function index(): string
    {
        return route('transaction', ['transactionId' => 5]);
        //return 'Transaction page';
    }

    public function show(int $transactionId): string
    {
        return 'Transaction' . " " . $transactionId;
    }

    public function create(): string
    {
        return 'Transaction create';
    }

    public function store(Request $request): string
    {
        return 'Transaction store';
    }
}
