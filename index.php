<html>
	<head>
		<title>Get Weather</title>
	</head>
	<body>
		<form action="src/get_weather.php" method="POST">
			<select name="set_location">
				<option value="Jakarta">Kota Jakarta</option>
				<option value="Medan">Kota Medan</option>
				<option value="Pekanbaru">Kota Pekanbaru</option>
				<option value="Surabaya">Kota Surabaya</option>
			</select>
			<input type="submit" value="Go">
		</form>
	</body>
</html>