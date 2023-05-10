
<?php
  require_once('controllers/dogs.php');
  require_once('config.php');
  require_once('utils/variables.php');
  require_once('utils/url.php');

  switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':

      if($_SERVER['REQUEST_URI'] === DOGS_ROUTE) {
        try{
          get_dogs();
        }catch(Exception $e) {
          echo "Error: ".$e->getMessage();
        } 

        break;
      }

      if(get_url_without_query_params($_SERVER["REQUEST_URI"]) === DOG_ROUTE) {
  
        try {
          $queries = [];        
          parse_str($_SERVER['QUERY_STRING'], $queries);

          if (!isset($queries['breed'])) {
            throw new Exception("breed query param is missing");
          }
          
          $breed = $queries['breed'];
          get_dog($breed);

        } catch(Exception $e) {
          echo "Error: ".$e->getMessage();
        }
        
        break;
      }

      break;
  }
?>