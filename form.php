<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
	<?php
	//define variables and set to empty values

	if ($_SERVER["REQUEST_METHOD"]=="POST"){
		$name=
		test_input($_POST["name"]);
		$email=
		test_input($_POST["email"]);
		$website=
		test_input($_POST["website"]);
		$comment=
		test_input($_POST["comment"]);
		$gender=
		test_input($_POST["gender"]);
	}
function test_input($data){
	$data =trim($data);
	$data =stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>
<h2> PHP Form VAlidation 
</h2>
<form method="post" action="<?php
 echo
  htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	Name:<input type="text"
	name="name">
	<br><br>
	E-mail:<input type="text"
	name="email">
	<br><br>
	Website:<input type="text"
	name="website">
	<br><br>
	Comment:<br/> <textarea
	name="comment" row"5" cols="40">
		
	</textarea>
	<br><br>
		Gender:
		<input type ="radio"
		name = "gender"
		value="female">female
		<input type ="radio"
		name="gender" value="male">Male
		<br><br>
		<input type="submit"
		name="submit" value="submit">
		</form>

		<?php
		echo "<h2> Your Input</h2>";
		echo $name;
		echo "<br>";
		echo $email;
		echo "<br>";
		echo $website;
		echo "<br>";
		echo $comment;
		echo "<br>";
		echo $gender;
		?>
</body>
</html>