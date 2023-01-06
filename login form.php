<!DOCTYPE html>
<html lang="en">

<head>
	<title>GFG- Store Data</title>
</head>
<link rel="stylesheet" href="3rd.css">

<body>
	<center>
		<h1>show your story to others</h1>

		<form action="insert.php" method="post">
			
			<p>
				<label for="firstName">name:</label>
				<input type="text" name="name" id="name">
			</p>
			
			<p>
				<label for="place">place:</label>
				<input type="text" name="place" id="place">
			</p>
			
			<p>
				<label for="rating">rating:</label>
				<input type="INT" name="rating" id="rating">
			</p>
			
		    <p>
				<label for="vlog">vlog:</label>
				<textarea type="text" name="vlog" id="vlog"></textarea>
			</p>
			
             <p>
				<label for="lastName">comment:</label>
				<input type="text" name="comment" id="comment">
			</p>
			
			<input type="submit" value="Submit">
		</form>
	</center>
</body>

</html>
