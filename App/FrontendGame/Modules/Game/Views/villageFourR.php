<div class="container container-game">
	
	<div class="title-start">
		<h1><?= $textVillage['title']?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textVillage['content']) ?></p>
	</div>

	<div id="apple1" class="apple">
			
		<i class="fas fa-apple-alt"><?= $apple['name']?></i>

		<div id="action1" class="action">
			<button>Manger</button>
			<button>Stocker</button>
		</div>
	</div>

	<div id="apple2" class="apple">
		<i class="fas fa-apple-alt"><?= $apple['name']?></i>

		<div id="action2" class="action">
			<button>Manger</button>
			<button>Stocker</button>
		</div>
	</div>

	<a href="/game/chest-four-left.html">?</a>

	<div id="choise-road">
		<a class="choise-top" href="/game/fight-four-right.html">Aller à gauche</a>
		<a class="choise-top" href="/game/fight-five-right.html">Aller à droite</a>
	</div>

</div>