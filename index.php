<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="./css/styles.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="./bxslider/dist/jquery.bxslider.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="./bxslider/dist/jquery.bxslider.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="./js/main.js"></script>
	<script>
		$(document).ready(function(){
			$('.slider').bxSlider({
				mode: 'fade'
			});
			// Custom styles
			$(".img").attr({width: 500, height: alertSize('height')});
			$(".left").attr({height: alertSize('height')});
			$(".right").attr({height: alertSize('height')});
			$(".bx-viewport").attr({height: alertSize('height')});
			$(".bx-viewport").css({height: alertSize('height')});
		});
	</script>
</head>
<body>
	<div class="slider">
		<div><?php require './1.1.php' ?></div>
		<div><?php require './1.2.php' ?></div>
	</div>
</body>
</html>