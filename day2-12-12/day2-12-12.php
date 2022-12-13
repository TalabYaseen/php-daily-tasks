<?php
// ./day2-12-12-2.php
session_start();
// TASK 1
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $_SESSION["as"]=$_POST['as'];
    $_SESSION["bs"]=$_POST['bs'];
    $_SESSION["cs"]=$_POST['cs'];
    // echo $_SESSION["cs"] .$_SESSION["bs"].$_SESSION["as"];
    // $_SESSION["time"]=$modifid_time;
    // $_SESSION["line_num"]=$lines;
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
        <form action="./day2-12-12-2.php" method="POST">
            <input type="text" name="as">
            <input type="text" name="bs">
            <input type="text" name="cs">
            <input type="submit" value="GO">
            <?php
            $filePath = "../tutorialspoint.txt";
            $lines = count(file($filePath));
            $_SESSION["line_num"] = $lines;
            $filename = 'day2-12-12.php';
            // echo filemtime($filename);
            echo "<br>";
            $modifid_time =  "last modified: " . date ("F d Y H:i:s.", filemtime($filename));
            $_SESSION["time"] = $modifid_time;
            // $_SESSION["as"]=$_POST['as'];
            // $_SESSION["bs"]=$_POST['bs'];
            // $_SESSION["cs"]=$_POST['cs'];
            ?>
        </form>
    </body>
</html>
<?

?>
<!--- // echo "<table><tr><td style='color:blue;border:solid black;'>Salary of Mr.A is</td><td //style='border:solid black;'>1000$</td></tr><tr><td style='color:blue;border:solid black;'>Salary of Mr.B is</td><td style='border:solid black;'>1200$</td></tr><tr><td style='color:blue;border:solid black;'>Salary of Mr.C is</td><td style='border:solid black;'>1400$</td></tr><table>";
// outputs e.g.  somefile.txt was last modified: December 29 2002 22:16:23.

// TASK 2

// $filename = 'day2-12-12.php';
// echo filemtime($filename);
// echo "<br>";
// if (file_exists($filename)) {
//     echo "last modified: " . date ("F d Y H:i:s.", filemtime($filename));
// }


// TASK 3

    // $filePath = "../tutorialspoint.txt";
    // $lines = count(file($filePath));
    // echo $lines;

    // $file="../tutorialspoint.txt";
    // $linecount = 0;
    // $handleFile = fopen($file, "r");
    // while(!feof($handleFile)){
    //   $line = fgets($handleFile);
    //   $linecount++;
    // }
  
    // fclose($handleFile);
  
    // echo $linecount;
    // $filePath="../tutorialspoint.txt";
    // $linecount = 0;
    // $handleFile = fopen($filePath, "r");
  
    // while(!feof($handleFile)){
      // We are loading only 4096 bytes of data at a time.
    //   $line = fgets($handleFile, 4096);
        
      // We are using PHP_EOL (PHP End of Line)
      //to count number of line breaks in currently loaded data.
    //   $linecount = $linecount + substr_count($line, PHP_EOL);
    // }
  
    // fclose($handleFile);
  
    // echo $linecount;
    -->