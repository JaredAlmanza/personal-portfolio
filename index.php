<?php
	if (isset($_GET['page']))
		$page=$_GET['page'].".php";
	else
		$page="home.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home - Jared Almanza</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="assets/css/fontAwesome.css">
  <link rel="stylesheet" href="assets/css/light-box.css">
  <link rel="stylesheet" href="assets/css/templatemo-main.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
</head>
<body>

  <nav>
    <div class="logo"><img src="img/logo.png" alt=""></div>
    <div class="mini-logo"><img src="img/mini_logo.png" alt=""></div>
    <ul>
      	<?php
			include("navigation.php");
		?>
    </ul>
  </nav>

	<?php
		include($page);
	?>
</body>
</html>
