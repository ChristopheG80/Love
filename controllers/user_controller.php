<?php
//var_dump($_COOKIE);
if(isset($_POST['canceldata'])){
   if (isset($_COOKIE['cookie'])) {
      unset($_COOKIE['lastname']);
      setcookie('cookie[lastname]', false);
      
      unset($_COOKIE['firstname']);
      setcookie('cookie[firstname]', false);
      
      unset($_COOKIE['cookie']['age']);
      setcookie('cookie[age]', false);
      
      unset($_COOKIE['cookie']['gender']);
      setcookie('cookie[gender]', false);
      
      unset($_COOKIE['cookie']['genderSearch']);
      setcookie('cookie[genderSearch]', false);
      
      unset($_COOKIE['cookie']['zipcode']);
      setcookie('cookie[zipcode]', false);
      
      unset($_COOKIE['cookie']['email']);
      setcookie('cookie[email]', false);
      
      unset($_COOKIE['cookie']['description']);
      setcookie('cookie[description]', false);
      header('Refresh:0');
      }
}
//die();
if(isset($_COOKIE['cookie']['lastname'])){
$lastname = $_COOKIE['cookie']['lastname'];
$firstname = $_COOKIE['cookie']['firstname'];
$age = $_COOKIE['cookie']['age'];
$gender = $_COOKIE['cookie']['gender'];
$zipcode = $_COOKIE['cookie']['zipcode'];
$email = $_COOKIE['cookie']['email'];
$genderSearch = $_COOKIE['cookie']['genderSearch'];
$description = $_COOKIE['cookie']['description'];


}
?>