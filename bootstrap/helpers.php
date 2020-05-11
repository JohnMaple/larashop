<?php

use Illuminate\Support\Facades\Route;

if (!function_exists('route_class')) {
    /**
     * 路由类转为css类名称
     */
    function route_class()
    {
        return str_replace('.', '-', Route::currentRouteName());
    }
}
