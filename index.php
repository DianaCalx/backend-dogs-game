<?php
  require_once('controllers/dogs.php');
  require_once('config.php');

  switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':

      echo $_SERVER['REQUEST_URI'];

      if($_SERVER['REQUEST_URI'] === '/dogs') {
     
        get_dogs();
        break;
      }

      if(strtok($_SERVER["REQUEST_URI"], '?')=== '/dog') {
        $queries = array();
        parse_str($_SERVER['QUERY_STRING'], $queries);

        $breed = $queries['breed'];
        get_dog($breed);
        break;
      }

      break;
    case 'POST':
      // Handle POST requests
      break;
    case 'PUT':
      // Handle PUT requests
      break;
    case 'DELETE':
      // Handle DELETE requests
      break;
  }

?>
