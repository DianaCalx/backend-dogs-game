<?php
    function get_dogs() {
        $ch = curl_init();

        curl_setopt($ch,CURLOPT_URL,'https://dog.ceo/api/breeds/list/all');
        
        curl_exec($ch);

        if(curl_errno($ch)) echo curl_error($ch);

        curl_close($ch);
    }

    function get_dog($breed) {
        $ch = curl_init();

        $url = "https://dog.ceo/api/breed/$breed/images/random";

        curl_setopt($ch,CURLOPT_URL, $url);
        
        curl_exec($ch);

        if(curl_errno($ch)) echo curl_error($ch);

        curl_close($ch);        
    }
?>
