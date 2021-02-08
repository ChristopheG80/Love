<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Bonjour <?=$_COOKIE['cookie']['firstname']?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
  <form action="index.php" name="navbarUser" method="POST">
    <div class="navbar-nav">
      <button type="submit" class="nav-link active" name="lonelyHeart">NOS CELIBATAIRES <span class="sr-only">(current)</span></button>
      <button type="submit" class="nav-link" name="currentUser">MES INFORMATIONS</button>
    </div>
    </form>
  </div>
</nav>