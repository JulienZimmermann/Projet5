<div class="container container-game">
	
	<div class="title-start">
		<h1><?= nl2br($textChest['title']) ?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textChest['content']) ?></p>
	</div>

	<div id="apple1" class="apple apple-chestFive">
				
			<img class="apple-img" src="/Web/images/apple.png" />
			<?= $apple['name']?>

			<div id="action1" class="action">
				<form action="" method="post">
					<?= $formApple ?>
					<input type="submit" value="Prendre" id="btnApple1"/>
				</form>
			</div>
		</div>

	<div id="chest1" class="chest chestOne">
			
		<img class="chest-img" src="/Web/images/chest.png" />

		<div id="action_chest1" class="action_chest">
			<button class="open_chest">Ouvrir</button>
		</div>
	</div>

	<div id="apple2" class="apple apple2-chestFive">

			<img class="apple-img" src="/Web/images/apple.png" />
			<?= $apple['name']?>

			<div id="action2" class="action">
				<form action="" method="post">
					<?= $formApple ?>
					<input type="submit" value="Prendre" id="btnApple2"/>
				</form>
			</div>
		</div>

	<div id="choise-road">
		<a class="choise-top" href="/game/portal.html">Aller tout droit</a>
	</div>

</div>