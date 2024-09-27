<?php

function getBaseUrl() {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
    $host = $_SERVER['HTTP_HOST'];

    if ($host === 'localhost' || $host === '127.0.0.1') {
        return $protocol . $host . '/travelpack';
    } else {
        return 'https://devtravelpack.wpdev.ws/';
    }
}