<html>
<head>
	<title>Ninjas Page</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/main.css')?>">
</head>
<body>
	<h1><?php echo $ninjas['topic']; ?> </h1>
	<p>This view file is in /application/views/<b>dojo/ninjas.php</b></p>
	<p>I am going to have php calculate 456 x 331115.  The result is <?php echo 456*331115; ?></p>
	<p><?php echo $ninjas['description']; ?> </p>

</body>
</html>