
<?php
    function get_url_without_query_params($url) {
        return strtok($url, '?');
    }
?>