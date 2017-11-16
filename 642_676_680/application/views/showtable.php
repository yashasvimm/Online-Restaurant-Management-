<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>No</th>
      <th>Name</th>
      <th>Date</th>
      <th>Email</th>
      <th>Phone</th>
      <th>People</th>
      <th>Message</th>
      
    </tr>
  </thead>
  <tbody>
  <?php foreach ($var as $var): ?>
    <tr>
      <td><?= $var->id ?></td>
      <td><?= $var->name ?></td>
      <td><?= $var->date ?></td>
      <td><?= $var->email ?></td>
      <td><?= $var->phone ?></td>
      <td><?= $var->people ?></td>
      <td><?= $var->message?></td>
    </tr>
<?php endforeach; ?>
    </tbody>
</table> 
</body>
</html>