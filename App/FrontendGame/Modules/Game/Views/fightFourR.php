<div class="container container-game">
	
	<div class="title-start">
		<h1><?= $textFight['title']?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textFight['content']) ?></p>
	</div>

	<div id ="crow1" class="crow">
		<i class="fas fa-crow"><?= $crow['name']?></i>
	</div>

	<div class="choise-road">
		<a class="choise-left" href="/game/fight-seven-right.html">Aller à gauche</a>
		<a class="choise-right" href="/game/undergrowth-five-right.html">Aller à droite</a>
	</div>

</div>