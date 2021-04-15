<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>User Name: <?php echo $user['name']; ?></h1>
	<h2>User Age: <?php echo $user['age']; ?>, Location: <?php echo $user['location']; ?></h2>
	<h3><?php echo count($user['hobbies']); ?> Hobbies</h3>					
	<ul>
<?php 	foreach ($user['hobbies'] as $value) { ?>
			<li><?php echo $value; ?></li>
<?php 	} ?>
	</ul>
</body>
</html>