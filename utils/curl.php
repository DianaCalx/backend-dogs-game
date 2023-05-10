
<?php
    function get_curl($url) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_exec($ch);
        if(curl_errno($ch)) echo curl_error($ch);
        curl_close($ch); 
    }
?>