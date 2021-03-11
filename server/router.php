<?php
// router.php

$matches = [];

if (preg_match('/\/([^\/]+)\/([^\/]+)\/([^\/]+)\/([^\/]+)/', $_SERVER["REQUEST_URI"], $matches)) {
    $_GET['resource_type'] = $matches[3];
    $_GET['resource_id'] = $matches[4];

    error_log( print_r($matches, 1) );

    //die(print_r($matches));

    require 'server.php';
} elseif ( preg_match('/\/([^\/]+)\/([^\/]+)\/([^\/]+)\/?/', $_SERVER["REQUEST_URI"], $matches) ) {
    $_GET['resource_type'] = $matches[3];
    error_log( print_r($matches, 1) );

   // die(print_r($matches));

    require 'server.php';
} else {

    error_log('No matches');
    http_response_code( 404 );
}