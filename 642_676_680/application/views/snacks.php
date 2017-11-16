<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<title></title>
<script
  src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
  integrity="sha256-/SIrNqv8h6QGKDuNoLGA4iret+kyesCkHGzVUUV0shc="
  crossorigin="anonymous"></script>
  <?php include('publichead.php'); ?>
</head>
<body>
<div class="container">
<legend>Snacks</legend>
<table class="table table-bordered">
	<tbody>
		<tr>
			<th>Name</th>
			<th>Quantity</th>
			<th>Price</th>
		</tr>
		<?php foreach ($var as $var) :?>
			<tr>

			<td><?= $var->title; ?></td>
			<td><?= $var->quantity; ?></td>
			<td>&#8377;<?= $var->price; ?></td>
			<td><?= anchor('Order','Order')?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>
</div>
</body>
</html>