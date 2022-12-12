<!-- task 1 -->
<?php
echo 'PHP version: ' . phpversion();
echo "<br>";
?>
<!-- task 2 -->
<?php
echo "Tomorrow I 'll learn PHP global variables.";
echo "<br>";
echo 'This is a bad command: del c:.';
echo "<br>";
echo "<br>";
?>
<!-- task 2 -->
<?php
phpinfo();
?>
<!-- task 3 -->
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    echo $_POST['username'];
    exit();}

?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8" />
        <meta name="description" content="Free Web tutorials">
        <meta name="keywords" content="HTML, CSS, JavaScript">
        <meta name="author" content="talab yaseen">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
        <title></title>
    </head>
    <body>
        <form action="" method="POST">
            <input type="text" name="username">

            <input type="submit" value="GO">
        </form>
    </body>
</html>
<!-- task 4 -->
<?php
echo $_SERVER['REMOTE_ADDR'];
?>
<!-- task 6 -->
<?php
$var = "https://www/. w3schools.com/";
var_dump(parse_url($var));
?>
<!-- task 7 -->
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    echo '<span style="color: red;"> ' .  $_POST['username'][0].  '</span>';
    echo substr($_POST['username'],1);

    exit();
}
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8" />
        <meta name="description" content="Free Web tutorials">
        <meta name="keywords" content="HTML, CSS, JavaScript">
        <meta name="author" content="talab yaseen">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
        <title></title>
    </head>
    <body>
        <form action="" method="POST">
            <input type="text" name="username">
            <input type="submit" value="GO">
        </form>
    </body>
</html>
<!-- task 8 -->
<?php
header("Location:https://www.w3schools.com/php/default.asp");






