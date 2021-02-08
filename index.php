<?php
//define('INDEX_CONTROLLER', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/ici_le_chemin_supplémentaire');

include('templates/header.php');
include('controllers/regex.php');
include('controllers/index_controller.php');
if (isset($_POST['canceldata'])) {
   include('controllers/user_controller.php');
}
if (isset($_POST['currentUser'])) {
   include('controllers/user_controller.php');
   include('templates/navbar.php');
   include('views/user.php');
} elseif (isset($_COOKIE['cookie']['lastname'])) {
   include('controllers/lovers_controller.php');
   include('templates/navbar.php');
   include('views/lovers.php');
} else {
   include('views/form.php');
}
include('templates/footer.php');
?>
