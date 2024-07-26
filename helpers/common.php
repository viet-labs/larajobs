<?php

if (!function_exists('status')) {
    function status(string $message, string $type = 'error')
    {
        return compact('type', 'message');
    }
} else {
    function status(string $message, string $type = 'success')
    {
        return compact('type', 'message');
    }
}
