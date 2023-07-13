<?php

function show($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}


function get_val($key, $default="")
{
  if(isset($_POST[$key]))
  {
    return $_POST[$key];
  }
  return $default;
}



function myfunc(){
  
}



?>