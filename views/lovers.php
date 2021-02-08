<?php

//var_dump($_COOKIE);

$show = false;

//include('../../templates/navbar.php');
?>
<div class="container-fluid">
   <div class="row">
      <?php
      $i = 1;
      foreach ($profils as $profil) {
         if ($_COOKIE['cookie']['genderSearch'] == 'lesdeux')$show = true;
         if ($_COOKIE['cookie']['genderSearch'] == $profil['gender'])$show = true;
         
         if($show){
      ?>
            <div class="card" style="width: 18rem;">
               <img src="assets/img/<?= $profil['picture'] ?>" class="card-img-top" alt="...">
               <div class="card-body text-center">
                  <h5 class="card-title"><?= $profil['firstname'] . ' ' . $profil['lastname'] . ' ' . $profil['age'] . ' ' .  ' du '  . ' ' . $profil['zipcode']; ?></h5>
                  <p class="card-text"><?= $profil['description'] ?></p>
                  <button href="#" class="btn btn-primary" id="Like<?=$profil['gender'] . $i?>">&#x2665;</button>
                  
               </div>
            </div>
      <?php
         $show = false;
         $i ++;
         }
      }
      ?>
   </div>
</div>


<!-- <p id="likeCounter<?=$profil['gender'] . $i?>"><?= mt_rand(50,1000); ?></p> -->