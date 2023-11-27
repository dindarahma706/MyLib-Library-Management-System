<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance as Middleware;

class PreventRequestsDuringMaintenance extends Middleware
{
    /**
     * URI yang harus dapat dijangkau saat mode pemeliharaan diaktifkan.
     *
     * @var array<int, string>
     */
    protected $except = [
        //
    ];
}
