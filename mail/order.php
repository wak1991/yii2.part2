	<div class="table-responsive">
		<table class="table table-hover table-striped">
			<thead>
				<th>Наименование</th>
				<th>Количество</th>
				<th>Цена</th>
				<th>Сумма</th>
			</thead>
			<tbody>
<?php foreach($session['cart'] as $id => $item): ?>
			<tr>
				<td><?= $item['name'] ?></td>
				<td><?= $item['qty'] ?></td>
				<td><?= $item['price'] ?></td>
				<td><?= $item['qty'] * $item['price'] ?></td>
			</tr>
<?php endforeach; ?>
			<tr>
				<td colspan='4'>Итого</td>
				<td><?= $session['cart.qty'] ?></td>
			</tr>
			<tr>
				<td colspan='4'>На сумму</td>
				<td><?= $session['cart.sum'] ?></td>
			</tr>
			</tbody>
		</table>
	</div>