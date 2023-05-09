<?php  
  // Allow cross-origin requests from any domain
    header("Access-Control-Allow-Origin: *");

    // Allow specified methods for cross-origin requests
    header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");

    // Allow specified headers for cross-origin requests
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    //Global variables
    define('BASE_API_URL', 'https://dog.ceo/api');
?>
