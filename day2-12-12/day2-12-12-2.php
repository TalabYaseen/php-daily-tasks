<?php
session_start();
echo "<table><tr><td style='color:blue;border:solid black;'>Salary of Mr.A is</td><td style='border:solid black;'>".$_SESSION["as"]."</td></tr><tr><td style='color:blue;border:solid black;'>Salary of Mr.B is</td><td style='border:solid black;'>".$_SESSION["bs"]."</td></tr><tr><td style='color:blue;border:solid black;'>Salary of Mr.C is</td><td style='border:solid black;'>".$_SESSION["cs"]."</td></tr><table>";
echo "<br>";
echo $_SESSION["time"];
echo "<br>";
echo $_SESSION["line_num"];
echo "<br>";
?>