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
<?php if ($var="breakfast"):?>	
<legend>Breakfast</legend>
<table class="table table-bordered">
	<tbody>
		<tr>
			<th>Name</th>
			<th>Quantity</th>
			<th>Price</th>
		</tr>
		<tr>
			<td>Tea</td>
			<td>1 Cup</td>
			<td>&#8377;40</td>
			<td><?= anchor('order','Order')?></td>
		</tr>
		<tr>
			<td>Omelette</td>
			<td>1 plate</td>
			<td>&#8377;60</td>
			<td><?= anchor('order','Order')?></td>
		</tr>
		<tr>
			<td>Chola-Bathura</td>
			<td>1 plate</td>
			<td>&#8377;60</td>
			<td><?= anchor('order','Order')?></td>
		</tr>
		<tr>
			<td>Puri-sabji</td>
			<td>1 plate</td>
			<td>&#8377;60</td>
			<td><?= anchor('order','Order')?></td>
		</tr>
		<tr>
			<td>Bread-Omelette</td>
			<td>1 plate</td>
			<td>&#8377;60</td>
			<td><?= anchor('order','Order')?></td>
		</tr>
	</tbody>
</table>
<?php endif; ?>
<?php if($var="lunch") : ?>
	<hr>Veg</hr>
<legend>Lunch</legend>
<?php elseif($var="snacks") : ?>
<legend>Snacks</legend>
<?php elseif($var="dinner") : ?>
<legend>Dinner</legend>
<?php endif; ?>
</div>

</body>
</html>