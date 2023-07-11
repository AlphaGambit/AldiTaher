<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
} else {
  $name = "";
  $email = "";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Movie Ticket</title>
  <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="./style1.css">
</head>
<body>
<!-- partial:index.partial.html -->
<!--
Inspired by: https://dribbble.com/shots/1166639-Movie-Ticket/attachments/152161
-->

<div class="ticket">
	<div class="holes-top"></div>
	<div class="title">
		<p class="cinema"><?php echo $name; ?></p>
		<p class="movie-title">FORPLAY</p>
	</div>
	<div class="poster">
		<img src="img_1_1688556445153.jpg" alt="FORPLAY" />
	</div>
	<div class="info">
		<table>
			<tr>
				<th>Email</th>
				<th> </th>
				<th>NO.Tiket</th>
			</tr>
			<tr>
				<td class="bigger"><?php echo $email; ?></td>
				<td class="bigger"> </td>
				<td class="bigger"><a href="https://www.freecounterstat.com" title="hit counter html"><img src="https://counter3.optistats.ovh/private/freecounterstat.php?c=s92al7c5kx1xnxe1zgpjuhcfar3n5t38" border="0" title="hit counter html" alt="hit counter html"></a></td>
			</tr>
		</table>
		<table>
			<tr>
				<th>PRICE</th>
				<th>DATE</th>
				<th>TIME</th>
			</tr>
			<tr>
				<td>Rp200K</td>
				<td>13/6/23</td>
				<td>12:00</td>
			</tr>
		</table>
	</div>
	<div class="holes-lower"></div>
	<div class="serial">
		<table class="numbers">
			<tr>
				<td>
					<button id="btnPrint" class="hidden-print">Print</button>
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script src="./script.js"></script>
<script src="pscript.js"></script>
</body>
</html>
