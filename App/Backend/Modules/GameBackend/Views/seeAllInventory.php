<div class="all-resume col-lg-12 col-xl-12">
<table>
	<tr>
		<th class="name">Nom</th>
		<th class="description">Contenu</th>
		<th class="damages">Dégâts</th>
		<th class="life">Durée d'utilisation</th>
		<th class="type">Type</th>
		<th class="action">Action</th>
	</tr>

	<?php
	foreach ($listElements as $element){
	?>

	<tr>
		<td class="name"><?= $element['name'] ?></td>
		<td class="description"><?= $element['description'] ?></td>
		<td class="damages"><?= $element['damages'] ?></td>
		<td class="life"><?= $element['life'] ?></td>
		<td class="type"><?= $element['type'] ?></td>

		<td class="action">
			<a href="update-inventory-element-<?= $element['id']?>.html"><i class="fas fa-pen"></i></a>
			<a href="delete-inventory-element-<?= $element['id']?>.html"><i class="fas fa-trash-alt"></i></a>
		</td>
	</tr>

	<?php
	}
	?>


</table>
</div>

<p><a class="link " href="/admin/">Retour</a></p>