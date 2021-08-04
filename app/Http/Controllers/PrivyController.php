<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use Illuminate\Http\Request;

class PrivyController extends Controller
{
    public function show()
    {
        $privyKey = env('PRIVY_MERCHANT_KEY', 'privy');
        return Inertia::render('Home', ['privyKey' => $privyKey]);
    }
}
