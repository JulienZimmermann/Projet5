<div class="container container-game">
	
	<div class="title-start">
		<h1><?= $textFight['title']?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textFight['content']) ?></p>
	</div>

	<div id ="bat1" class="bat">
		<img src="/Web/images/bat.gif" class="bat_gif"/>

		<table class="ennemi-character">
			<tr class="name-character">
				<th>Nom</th>
				<th>Force</th>
				<th>Vie</th>
			</tr>

			<tr class="stats-character">
				<td><?= $bat['name']?></td>
				<td id="damages-enemy"><?= $bat['damages']?></td>
				<td id="life-enemy"><?= $bat['life']?></td>
			</tr>

		</table>

		<button id="button-attak">Attaquer</button>
	</div>

	<div id="stick1" class="stick stick-fight">
			
		<img class="stick-img" src="/Web/images/stick.png" />
		<?= $stick['name']?>

		<div id="action-stick1" class="action-stick">
			<form action="" method="post">
				<?= $formStick ?>
				<input id="btnApple1" type="submit" value="Prendre" />
			</form>
		</div>
	</div>

	<div id="choise-road">
		<a class="choise-top direction" href="/game/chest-one-left.html">Aller tout droit</a>
	</div>

</div>