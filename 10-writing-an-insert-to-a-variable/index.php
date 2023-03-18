<?php 
function getFile($name) {
	ob_start();
		include $name; 
	return ob_get_clean(); 
} 
$res = getFile(__DIR__ .'/wd.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>title</title>
	</head>
	<body>
		<header>
			<?php echo $res;  ?>
		</header>
		<aside>
            <?php echo $res;  ?>
		</aside>
		<main>
            <?php echo $res;  ?>
		</main>
		<header>
            <?php echo $res;  ?>
		</header>
	</body>
</html>