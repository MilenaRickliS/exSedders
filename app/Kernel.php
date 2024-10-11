<?php
namespace App\Http;
use Illuminate\Foundation\Http\Kernel as HttpKernel;
class Kernel extends HttpKernel
{
    protected $routeMiddleware = [
    //...
        'checkAccess' => \App\Http\Middleware\CheckAccessMiddleware::class,
    ];
}