<?php
$nb = 0;
foreach ($listeNews as $news)
{
?>
<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <div class="caption">
        <h3><?= $news['titre'] ?></h3>
        <p><?= nl2br($news['contenu']) ?></p>
        <p><a href="news-<?= $news['id'] ?>.html" class="btn btn-primary" role="button">Lire</a></p>
      </div>
    </div>
  </div>
</div>
<?php
}