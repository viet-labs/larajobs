<?php

if (!function_exists('redirectWithStatus')) {
    function redirectWithStatus(string $route, string $message, string $type = 'error')
    {
        return redirect($route)->with('status', compact('message', 'type'));
    }
}

