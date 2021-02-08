<form name="beforeSub" id="beforeSub" action="index.php" method="POST" enctype="multipart/form-data">
         <div class="container-fluid">
            <div class="row">
            <div class="col-md-12 col-xs-12 text-center">Bienvenue jeune <span class="text-danger">&#x2661; LOVER &#x2665;</span></div>
               <div class="col-md-12 col-xs-12 text-center">Formulaire de pré-inscription</span></div>

               <div class="col-md-6 col-xs-12 text-xs-center text-right text-secondary"><label for="lastname">Nom</label></div>
               <div class="col-md-6 col-xs-12 text-xs-center text-left rounded"><input type="text" id="lastname" name="lastname" class=" rounded <?= (isset($error['lastname'])) ? 'error_input' : '' ?>" placeholder="Nom" value="<?= $lastname ?? '' ?>" />
                  <p class="error"><?= ($error['lastname']) ?? '' ?></p>
               </div>

               <div class="col-md-6 col-xs-12 text-xs-center text-right text-secondary"><label for="firstname">Prénom</label></div>
               <div class="col-md-6 col-xs-12 text-xs-center text-left rounded"><input type="text" id="firstname" name="firstname" class=" rounded <?= (isset($error['firstname'])) ? 'error_input' : '' ?>" placeholder="Prénom" value="<?= $firstname ?? '' ?>" />
                  <p class="error"><?= ($error['firstname']) ?? '' ?></p>
               </div>

               <div class="col-md-6 col-xs-12 text-xs-center text-right text-secondary"><label for="age">Age</label></div>
               <div class="col-md-6 col-xs-12 text-xs-center text-left rounded"><input type="text" id="age" name="age" maxlength="3" size="3" class="text-center rounded <?= (isset($error['age'])) ? 'error_input' : '' ?>" placeholder="18 ou +" value="<?= $age ?? '' ?>" />
                  <p class="error"><?= ($error['age']) ?? '' ?></p>
               </div>

               <div class="col-md-6 col-xs-12 text-xs-center text-right text-secondary"><label for="gender">Genre</label></div>
               <div class="col-md-6 col-xs-12 text-xs-center text-left rounded text-secondary">
                  <input type="radio" name="gender" id="woman" value="woman" <?php if (isset($gender)) {
                                                                                 if ($gender == 'woman') {
                                                                                    echo 'checked';
                                                                                 }
                                                                              } ?> />&nbsp;Femme&nbsp;&nbsp;&nbsp;<p class="error">
                  <input type="radio" name="gender" id="man" value="man" <?php if (isset($gender)) {
                                                                              if ($gender == 'man') {
                                                                                 echo 'checked';
                                                                              }
                                                                           } ?> />&nbsp;Homme&nbsp;&nbsp;&nbsp;<p class="error"><?= ($error['gender']) ?? '' ?></p>                                                                           
               </div>

               <div class="col-md-6 col-xs-12 text-xs-center text-right text-secondary"><label for="zipcode">Code Postal</label></div>
               <div class="col-md-6 col-xs-12 text-xs-center text-left rounded"><input type="text" id="zipcode" name="zipcode" maxlength="5" size="8" class="text-center rounded <?= (isset($error['zipcode'])) ? 'error_input' : '' ?>" placeholder="Code Postal" value="<?= $zipcode ?? '' ?>" />
                  <p class="error"><?= ($error['zipcode']) ?? '' ?></p>
               </div>


               <div class="col-md-6 col-xs-12 text-xs-center text-right text-secondary"><label for="zipcode">Email</label></div>
               <div class="col-md-6 col-xs-12 text-xs-center text-left rounded"><input type="email" id="email" name="email" size="30" class="text-center rounded <?= (isset($error['email'])) ? 'error_input' : '' ?>" placeholder="email" value="<?= $email ?? '' ?>" />
                  <p class="error"><?= ($error['email']) ?? '' ?></p>
               </div>

               <div class="col-md-6 col-xs-12 text-xs-center text-right text-secondary"><label for="zipcode">Votre recherche</label></div>
               <div class="col-md-6 col-xs-12 text-xs-center text-left rounded text-secondary">
                  <input type="radio" name="genderSearch" id="manSearch" value="homme" <?php if (isset($genderSearch)) {
                                                                                          if ($genderSearch == 'homme') {
                                                                                             echo 'checked';
                                                                                          }
                                                                                       } ?> />&nbsp;Homme<p class="error">
                     <input type="radio" name="genderSearch" id="womanSearch" value="femme" <?php if (isset($genderSearch)) {
                                                                                                if ($genderSearch == 'femme') {
                                                                                                   echo 'checked';
                                                                                                }
                                                                                             } ?> />&nbsp;Femme<p class="error">
                        <input type="radio" name="genderSearch" id="manwomanSearch" value="lesdeux" <?php if (isset($genderSearch)) {
                                                                                                if ($genderSearch == 'lesdeux') {
                                                                                                   echo 'checked';
                                                                                                }
                                                                                             } ?> />&nbsp;Les deux&nbsp;&nbsp;&nbsp;<p class="error"><?= ($error['genderSearch']) ?? '' ?></p>
                  </p>
               </div>

               <div class="col-md-6 col-xs-12 text-xs-center text-right text-secondary text-middle"><label for="description">Votre description</label></div>
               <div class="col-md-6 col-xs-12 text-xs-center text-left"><textarea id="description" name="description" cols="30" rows="8" class=" rounded"><?= $description ?? '' ?></textarea>
                  <p class="error"><?= ($error['description']) ?? '' ?></p>
               </div>


               <div class="col-md-12 col-xs-12 text-center"><input type="submit" name="subLove" id="subLove" value="Rencontrer nos célibataires" class=" btn btn-secondary" /></div>
            </div>
         </div>
      </form>