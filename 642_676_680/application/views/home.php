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
<hr><?= anchor('Menu/breakfast/breakfast','Breakfast') ?><span class="pull-right">8:00 AM to 10:00 AM</span></hr>
</div>
<div class="container">
<hr><?= anchor('Menu/lunch/lunch','Lunch') ?><span class="pull-right">12:00 PM to 2:00 PM</span></hr>
</div>
<div class="container">
<hr><?= anchor('Menu/snacks/snacks','Snacks') ?><span class="pull-right">4:00 PM to 8:00 PM</span></hr>
</div>
<div class="container">
<hr><?= anchor('Menu/dinner/dinner','Dinner') ?><span class="pull-right">8:00 PM to 10:00 PM</span></hr>
</div>
</body>
</html>