<!DOCTYPE html>
<html>
  <head>
    <title>
      <?= isset($title) ? $title : 'Mon super site' ?>
    </title>
    
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- <link rel="stylesheet" href="/css/Envision.css" type="text/css" /> -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  
  <body>
    <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="/">WebSiteName</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="/">Accueil</a></li>
        <?php if ($user->isAuthenticated()) { ?>
          <li><a href="/admin/">Admin</a></li>
          <li><a href="/admin/commentaires/">Gestion Commentaires</a></li>
          <li><a href="/admin/news-insert.html">Ajouter une news</a></li>
          <li><a href="/admin/deconnexion.html">Déconnexion</a></li>
        <?php }else{ ?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="/admin/"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <?php } ?>
      </ul>
    </div>
</nav>
    <div id="wrap">
      <header>
        <div class="jumbotron">
  <h1>Mon Super Site</h1>
  <p>Bienvenue sur mon blog de nouvelles ecrites par moi-meme ainsi que moi-meme ainsi que moi-meme ainsi que moi-meme ainsi que moi-meme ainsi que moi-meme ainsi que moi-meme ainsi que moi-meme ainsi que </p>
  <p><a class="btn btn-primary btn-lg" href="#" role="button">Welcome</a></p>
</div>
      </header>
      
<!--  -->
      
      <div id="content-wrap">
        <section id="main">
          <?php if ($user->hasFlash()) echo '<p style="text-align: center;">', $user->getFlash(), '</p>'; ?>
          
          <?= $content ?>
        </section>
      </div>
    
      <footer></footer>
    </div>
  </body>
</html>