<?php
$REQUEST_URI = $_SERVER['REQUEST_URI'];
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
$SCRIPT_FILENAME = $_SERVER['SCRIPT_FILENAME'];
//echo $REQUEST_URI."<br />".$DOCUMENT_ROOT."<br />".$SCRIPT_FILENAME."<br />".$APP_ROOT."<br />";


if($REQUEST_URI == $APP_ROOT){
  $page = "index.php";
}else{
  $url = strip_tags($REQUEST_URI);
  
  if($APP_ROOT != "/"){
    $page = str_replace($APP_ROOT, "", $url) . ".php";
  }else{
    $url_array  = explode("/", $url);
    $page = "$url_array[1].php";
  }
  
  //404
  if (!file_exists("views/$page")){ $page = "404.html";}
  
}
?>