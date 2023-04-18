<?php

class Controller
{
   public function view($view, $data=[])
   {
      extract($data);

      if(file_exists(VIEWS.$view.".view.php"))
      {
         require(VIEWS.$view.".view.php");
      }
      else if(file_exists(ADMIN.$view.".view.php"))
      {
        require(ADMIN.$view.".view.php");
      }
      else
      {
        require(VIEWS."not_found.view.php");
      }
   }


   public function load_model($model){
    if(file_exists(MODELS.ucfirst($model).".php")){
          require(MODELS.ucfirst($model).".php");
          return $model = new $model();
    }
    return false;
   }


   public function redirect($link)
   {
     header("Location: ".BASE.trim($link,"/"));
     die();
   }
}


?>