<style>
	.main-tabuada{
		display: flex;
		flex-wrap: wrap;
	}
	.main-tabuada .item
	{
		width: 183px;
		margin-right: 2px;
		padding: 40px;

		background: #333;
		color: #fff;
		font-size: 1.5em;
	}
	.main-tabuada .item:nth-child(2n+1){
		background: #eee;
		color: #000;
	}
</style>
<?php 

function minhaTabuada($numero){
	for ($i=1; $i <= 10 ; $i++) { 
		echo "{$numero} x {$i} = " . $numero * $i . "</br>";
	}
}

?>

<div class="main-tabuada">
	<div class="item"><?= minhaTabuada(2); ?></div>
	<div class="item"><?= minhaTabuada(3); ?></div>
	<div class="item"><?= minhaTabuada(4); ?></div>
	<div class="item"><?= minhaTabuada(5); ?></div>
	<div class="item"><?= minhaTabuada(6); ?></div>
	<div class="item"><?= minhaTabuada(7); ?></div>
	<div class="item"><?= minhaTabuada(8); ?></div>
	<div class="item"><?= minhaTabuada(9); ?></div>
	<div class="item"><?= minhaTabuada(10); ?></div>
	<div class="item"><?= minhaTabuada(11); ?></div>
</div>