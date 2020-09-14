<!DOCTYPE>
<html>
<head>
	<title>Projekt</title>
	<link rel="stylesheet" href="style.css">
	<meta charset="utf-8">
</head>
<body>
	<div id="container">
		<div id="top">
			<img src="logo.png" id="zdjecie">
		</div>
		<div id="left">
			<h1>HTML</h1>
			<p>HTML (ang. HyperText Markup Language) - kipertekstowy język znaczników, wykorzystywany do tworzenia dokumentów hipertekstowych</p>
			
			<h2>TABELA</h2>
			<table>
				<tr>
					<td>tekst</td>
					<td>tekst</td>
					<td>tekst</td>
					<td>tekst</td>
				</tr>
				<tr>
					<td colspan="2"></td>

					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td rowspan="2"></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					
				</tr>
			</table>
			
			<h4> ZNACZNIKI HTML5</h4>
			
			<ul>
				<li>HEADER</li>
				<li>ASIDE</li>
				<li>SECTION</li>
				<li>NAV</li>
				<li>FOOTER</li>
			</ul>
		</div>
		<div id="right">
			<h3>FORMULARZ</h3>
			<form action="test.php" method="post">
				<input type="text" name="x" placeholder="Wpisz swoje imie...">
				<input type="text" name="y" placeholder="Wpisz swoje nazwisko...">
				<input type="submit" value="Wyslij">
			</form>
			
			<h4>NOWOŚCI HTML5</h4>
			<ol>
				<li>POLA INPUT DO OBSŁUGI EMAIL</li>
				<li>WSPARCIE AUDIO</li>
				<li>CANVAS - WYŚWIETLANIE GRAFIKI</li>
				<li>FORMULARZE - ATRYBUT REQUIRED</li>
			</ol>
			

			
			<canvas id="myCanvas"></canvas>
			
			<script>
				var c = document.getElementById("myCanvas");
				var ctx = c.getContext("2d");
				ctx.beginPath();
				ctx.arc(150, 75, 75, 0, 2 * Math.PI);
				ctx.moveTo(0,0);
				ctx.lineTo(300, 150);
				ctx.moveTo(0,150);
				ctx.lineTo(300, 0);
				ctx.stroke();
			</script>
		</div>
		
		<div id="footer">
			<marquee>ANIMACJA - PASEK Z TEKSTEM HTML</marquee>
		</div>
	</div>
</body>
</html>