

<table>
  <tr><th>Auteur</th><th>News</th><th>Contenu</th><th>Date d'ajout</th><th>Action</th><th>Signale Y/N</tr>
<?php
foreach ($listeCommentaires as $commentaire)
{
	$signalement = 'No';
	if( $commentaire['signaler']==1){
		$signalement = 'Yes';
	}
  echo '<tr>
  			<td>', htmlspecialchars ($commentaire['auteur']), '</td>
  			<td>', $commentaire['news'], '</td>
  			<td>', htmlspecialchars ($commentaire['contenu']), '</td>
  			<td>le ', $commentaire['date']->format('d/m/Y à H\hi'), '</td>
  			<td><a href="comment-update-', $commentaire['id'], '.html"><img src="/images/update.png" alt="Modifier" /></a> 
  				<a href="comment-delete-', $commentaire['id'], '.html"><img src="/images/delete.png" alt="Supprimer" /></a>
  			</td>
  			<td>', $signalement , '</td>
  		</tr>', "\n";
}
?>
</table>