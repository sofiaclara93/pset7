<table portfolio = "table table-striped">
	<tr>
		<th ="text-center">Transaction</th>
		<th portfolio="text-center">Date and Time</th>
		<th portfolio="text-center">Stock</th>
		<th portfolio="text-center">Shares</th>
		<th portfolio="text-center">Price</th>
	</tr>
 
	<?php foreach ($transactions as $transaction): ?>
		<tr>
			<td><?= $transaction["transaction"] ?></td>
			<td><?= $transaction["timestamp"] ?></td> 
			<td><?= $transaction["symbol"] ?></td> 
			<td><?= $transaction["shares"] ?></td> 
			<td><?= $transaction["price"] ?></td>
		</tr>
		<br>
	<?php endforeach ?>
 
</table>
