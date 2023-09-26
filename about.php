<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Test2</title>

	<style type="text/css">
		* { font-family:"標楷體"; margin-left:auto; margin-right:auto;}
		h1 {color:blue; font-size:60px;}
		h2 {color:#33ff33; font-size:40px;}
	</style>
	<script>
		function change1() {
			document.getElementById("pic").src = "mountain.jpg";
			document.getElementById("h2text").innerText = "靜宜資管";
		}
		function change2() {
			document.getElementById("pic").src = "cliff.jpg";
			document.getElementById("h2text").innerText = "Tzyy-Ching Yang";	
		}
	</script>
</head>
<body>
	<table width="70%">
		<tr>
			<td>
				<img src="cliff.jpg" id="pic" width="110%" onmouseover="change1()" onmouseout="change2()"></img>			
			</td>
		</tr>
	</table>
	<table width="70%" border="1">
		<tr>
			<td>
				<h1>Classwork</h1><br>
				<a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">
				<h2>RickRoll link</h2></a>
			</td>
			<td>
				電影配樂<br>
				<audio controls>
					<source src="elephant.mp3" type="audio/mP3">
				</audio><br>
			</td>
			<td>
				rickroll<br>
				<iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe>
			</td>
		</tr>
	</table>
		<?php echo date("Y-m-d") ?>
	</body>
</html>