<?php
/*
embending php in html example
*/
$embend_text="enter your name here...";

?>
<!doctype html>
<html>
<head>
	<title>embending php in html document</title>
</head>
<body>
	<label for="name">UserName:</label>
	<!--the value of variable $embend_text is passed to value attribute-->
	<input type="text" name="name" value="<?php echo $embend_text;?>"/>

</body>
</html>
