<div>
	<a href="buy.php" class="btn btn-default">Buy</a>
	<a href="sell.php" class="btn btn-default">Sell</a>
	<a href="quote.php" class="btn btn-default">Quote</a>
	<a href="history.php" class="btn btn-default">History</a>
	<a href="deposit.php" class="btn btn-default">Deposit</a>
	<br><br>
</div>
 
<div class = "title">
	<h3>Cash: $<?= $cash ?></h3>
</div>
<div>
	<table class = "table table-striped">
		<tr>
			<th class="text-center">Stock</th>
			<th class="text-center">Shares</th>
			<th class="text-center">Cost</th>
		</tr>
		<?php foreach ($positions as $stock): ?>
			<tr>
				<td><?= $stock["symbol"] ?></td> 
				<td><?= $stock["shares"] ?></td> 
				<td><?= $stock["price"] ?></td>
			</tr>
		<?php endforeach ?>
	</table>
</div>
 
<div>
	<h2>Total Worth: $<?= $worth ?></h2>
	<a href="logout.php">Log Out</a>
</div>
