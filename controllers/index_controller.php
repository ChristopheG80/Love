<?php
$verif = null;
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['subLove'])) {
   $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
   //Ensuite je vérifie si l'input est vide ou non
   $lastname = strtr($lastname, "'", "\'");
   if (!empty($lastname)) {
      //S'il n'est pas vide je test ma regex défini dans le fichier regex.php avec ma super global REGEX_NO_NUMBER
      if (!preg_match(REGEX_NO_NUMBER, $lastname)) {
         //Si la regex ne passe pas, j'ajoute a mon tableau d'erreur la phrase 'Le nom ne peux pas comporter de chiffre.',
         //à la clef 'lastname'
         $error['lastname'] = 'Le nom ne peut pas comporter de chiffre.';
         echo 'pasok';
      }
      else{
         echo 'ok';
      }
   } else {
      //Si l'input est vide j'ajoute à mon tableau d'erreur la phrase 'Le champ est vide' à la clef 'lastname'
      echo 'pasok';
      $error['lastname'] = 'Le champ est vide';
   }
   //Je répète la même chose pour chaque input (en changeant mes regex et les sanitize suivant l'input).
   $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
   if (!empty($firstname)) {
      if (!preg_match(REGEX_NO_NUMBER, $firstname)) {
         $error['firstname'] = 'Le prénom ne peut pas comporter de chiffre.';
         echo 'pasok';
      }
      else{
         echo 'ok';
      }
   } else {
      $error['firstname'] = 'Le champ est vide';
      echo 'pasok';
   }
   $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);
   if ($age < 18) $error['age'] = 'Tu peux être jeune mais tu dois être majeur 18 ou +';
   if ($age > 140) $error['age'] = 'Tu peux être âgé(e) mais pas trop ;-)';

   //Les boutons radio
   //var_dump($_POST['gender']);
   $gender = filter_input(INPUT_POST, 'gender', FILTER_SANITIZE_STRING);
   if (!empty($gender)) {
      if (!preg_match(REGEX_NO_NUMBER, $gender)) {
         $error['gender'] = 'Je n\'ai pas compris votre genre';
         echo 'pasok';
         if ($gender == 'man') {
            $man = 'checked';
         } else {
            $woman = 'checked';
         }
      }
      else{
         echo 'ok';
      }
   } else {
      //var_dump($gender);
      $error['gender'] = 'Merci de choisir soit femme soit homme';
      echo 'pasok';
   }
   $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
   if (!empty($email)) {
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         $error['email'] = 'L\'email n\'est pas valide';
         echo 'pasok';
      }
      else{
         echo 'ok';
      }
   } else {
      $error['email'] = 'Merci d\'entrer votre email';
      echo 'pasok';
   }

   $zipcode = filter_input(INPUT_POST, 'zipcode', FILTER_SANITIZE_NUMBER_INT);
   if (!empty($zipcode)) {
      if (!preg_match(REGEX_ZIPCODE, $zipcode)) {
         $error['zipcode'] = 'Le code postal doit comporter 5 chiffres et ne peut pas comporter de lettre.';
         echo 'pasok';
      }
      else{
         echo 'ok';
      }
   } else {
      $error['zipcode'] = 'Le champ est vide';
      echo 'pasok';
   }

   $genderSearch = filter_input(INPUT_POST, 'genderSearch', FILTER_SANITIZE_STRING);
   if (!empty($genderSearch)) {
      if (!preg_match(REGEX_NO_NUMBER, $genderSearch)) {
         $error['genderSearch'] = 'Je n\'ai pas compris votre genre';
         echo 'pasok';
         if ($genderSearch == 'man') {
            $man = 'checked';
         } elseif ($genderSearch == 'woman') {
            $woman = 'checked';
         } else {
            $lesdeux = 'checked';
         }
      }else{
         echo 'ok';
      }

   } else {
      //var_dump($genderSearch);
      $error['gender'] = 'Merci de choisir entre femme ou homme';
      echo 'pasok';
   }


   $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
   if (!empty($description)) {
      if (str_word_count($description) < 50) {
         $error['description'] = 'Merci d\'entrer votre description minimum de 50 mots   ' . str_word_count($description);
         echo 'pasok';
      }
      else{
         echo 'ok';
      }
   } else {
      $error['description'] = 'Merci d\'entrer votre description minimum 50 mots';
      echo 'pasok';
   }
   //var_dump($error);
   if (empty($error)) {
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
      }
      setcookie('cookie[lastname]', $lastname, time() + 86400);
      setcookie('cookie[firstname]', $firstname, time() + 86400);
      setcookie('cookie[age]', $age, time() + 86400);
      setcookie('cookie[gender]', $gender, time() + 86400);
      setcookie('cookie[genderSearch]', $genderSearch, time() + 86400);
      setcookie('cookie[zipcode]', $zipcode, time() + 86400);
      setcookie('cookie[email]', $email, time() + 86400);
      setcookie('cookie[description]', $description, time() + 86400);
      header('Refresh:0');
   } else {
      $verif = false;
   }
}
