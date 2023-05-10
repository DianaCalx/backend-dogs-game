
<?php
    require_once('./utils/variables.php');
    require_once('./utils/curl.php');

    function get_dogs() {
        $url = BASE_API_URL.'/breeds/list/all';
        get_curl($url);
    }

    function get_dog($breed) {
        $url = BASE_API_URL.'/breed/'.$breed.'/images/random';
        get_curl($url);    
    }
?>
