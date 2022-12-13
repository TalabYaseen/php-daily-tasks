<?php
////////////////////////////////////////PHP Basic Tasks///////////////////////////////////////////
////////////////////////////////////////task1///////////////////////////////////////////
// $colors = ['red', 'green' , 'white'];
// $color1index1 = array_search('red',$colors);
// $color1index2 = array_search('green',$colors);
// $color1index3 = array_search('white',$colors);
// $text = <<<texta
// "The memory of that scene for me is like a frame of film forever frozen at that moment: the $colors[$color1index1] carpet, the $colors[$color1index2] lawn, the $colors[$color1index3] house, the leaden sky. The new president and his first lady. - Richard M. Nixon"
// texta;
// echo $text ;

////////////////////////////////////////task2///////////////////////////////////////////
// $colors = array('white', 'green', 'red');
// echo "<un><li>$colors[0]</li><li>$colors[1]</li><li>$colors[2]</li></un>";

////////////////////////////////////////task3///////////////////////////////////////////

// $cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" );
// foreach($cities as $x => $val) {
//     echo "The capital of $x is $val <br>";
// };


////////////////////////////////////////task4///////////////////////////////////////////
// $color = array (4 => 'white', 6 => 'green', 11=> 'red');
// echo current($color);


////////////////////////////////////////task5///////////////////////////////////////////

// $nums = ["a","b","c","d","e","f"];
// // foreach($nums as $x => $val)
// function add($arr,$val,$wh){
//     $result = [];
//     foreach($arr as $x => $vall){
//         if ($x === $wh-1) {
//             array_push($result,$val);
//             array_push($result,$vall);
//         } else {
//             array_push($result,$vall);
//         }
//     };
//     print_r($result);
// };
// add($nums,"$",3);

////////////////////////////////////////task6///////////////////////////////////////////

// $fruits=array("d"=>"lemon","a"=>"orange","b"=>"banana","c"=>"apple");
// natcasesort($fruits);
// print_r(($fruits));

////////////////////////////////////////task7///////////////////////////////////////////

// $nums = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
// echo "result<br>";
// echo array_sum($nums)/count($nums) . "<br>";
// natcasesort($nums);
// print_r(array_slice($nums,0,5));
// echo "<br>";
// print_r(array_slice($nums,-6,-1));

////////////////////////////////////////task8///////////////////////////////////////////

// $array1=array("color"=>"red",2,4);
// $array2=array("a","b","color"=>"green","shape"=>"trapezoid",4);
// echo "<pre>";
// print_r(array_merge($array1,$array2));
// echo "</pre>";

////////////////////////////////////////task9///////////////////////////////////////////
// $colors=array("RED","BLUE","WHITE","YELLOW");
// $j = 0;
// foreach( $colors as $element ) {
//     $colors[$j] = strtolower($element);
//     $j++;
// }
// print_r($colors);

////////////////////////////////////////task10///////////////////////////////////////////

// for ($i = 200; $i <=250; $i++) {
//     if ($i%4 == 0){
//         echo $i . "<br>";
//     };
//   }

  ////////////////////////////////////////task11///////////////////////////////////////////

//   $words=array("abcd","abc","de","hjjj","g","wer");
//   $shortest = '';
//   $longest = '';
//   for ($i = 0; $i<count($words); $i++){
//   if ($i ==0){
//     $shortest = strlen($words[$i]);
//     $longest = strlen($words[$i]);
//   }
   
//     if (($longest)<strlen($words[$i])){
//         $longest = strlen($words[$i]);
//     };
//     if (($shortest)>strlen($words[$i])){
//         $shortest = strlen($words[$i]);
//     };
//   }
//   echo "result<br>";
//   echo $longest."<br>";
//   echo $shortest."<br>";

  ////////////////////////////////////////task11///////////////////////////////////////////

//   echo "result<br>";
//   for ($i = 0; $i<10; $i++){
//   echo rand(11,20)."<br>";}

  ////////////////////////////////////////task12///////////////////////////////////////////

// $array1=array(2,0,10,12,6,-1.5);
// natcasesort($array1);
// foreach( $array1 as $element ){
//     if ($element != 0) {
//         print_r (current(($array1)));
//         break;
//     }
// }


////////////////////////////////////////PHP Basic Tasks///////////////////////////////////////////

////////////////////////////////////////task1///////////////////////////////////////////
// if ($_SERVER["REQUEST_METHOD"] === "POST") {
//   echo strtoupper($_POST['username'])."<br>";
//   echo strtolower($_POST['username'])."<br>";
//   echo ucfirst($_POST['username'])."<br>";
//   echo ucwords($_POST['username'])."<br>";
//   exit();}
?>
<!-- <!DOCTYPE html>
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
            <label>Enter a string</label>
            <input type="text" name="username">
            <input type="submit" value="GO">
        </form>
    </body>
</html> -->
<?php
////////////////////////////////////////task2///////////////////////////////////////////
// if ($_SERVER["REQUEST_METHOD"] === "POST") {
//   echo rtrim(chunk_split($_POST['username'],2,":"),":")."<br>";
//   exit();}
?>
<!-- <!DOCTYPE html>
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
            <label>Enter a number to covert to time format</label>
            <input type="text" name="username">
            <input type="submit" value="GO">
        </form>
    </body>
</html> -->

<?php
////////////////////////////////////////task3///////////////////////////////////////////

// $Sample_Output= "I am a full stack developer at orange coding academy";
// $Sample_Word= "Orange";

// if(stristr($Sample_Output,$Sample_Word)) {
//   echo "Word Found!";
// }else {
//   echo "Word Not Found!";
// }

////////////////////////////////////////task4///////////////////////////////////////////
// $path = 'www.example.com/public_html/aqaba.php';
// strrchr(string,ss) return the last appearance of ss in string to the last of the string
// substr(string,num) delete the num number of characters from the begineng of a string
// $file_name = substr(strrchr($path, "/"), 1);
// echo $file_name."\n"; // "index.php"

////////////////////////////////////////task5///////////////////////////////////////////

// $Sample_Output= "info@orange.com";
// strchr return the first apperance in spacific string to the end of the string
// str_ireplace replace string1 if found in string2 with string3 and return string2
//  str_ireplace(string1,string3,string2)
// echo str_ireplace(strchr($Sample_Output,"@"),"",$Sample_Output);

////////////////////////////////////////task6///////////////////////////////////////////
// $Sample_Output='info@orange.com';

// echo substr($Sample_Output,strlen($Sample_Output)-3);

////////////////////////////////////////task7///////////////////////////////////////////

// $srcs = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz";
// echo substr(str_shuffle($srcs),strlen($srcs)-8);

////////////////////////////////////////task8///////////////////////////////////////////

// $Sample_Output= 'That new trainee is so genius.';
// $Sample_Word= 'Our';
// echo $Sample_Word.strchr($Sample_Output," ");

////////////////////////////////////////task9///////////////////////////////////////////

// $String1 ='dragonball';
// $String2 ='dragonboll';
// if (strlen($String1)>strlen($String2)) {
//   $ii = strlen($String1);
// }else {
//   $ii = strlen($String2);
// }
// for($i=0;$i < $ii;$i++){
//   if ($String1[$i] != $String2[$i]) {
//    echo"First difference between two strings at position $i: $String2[$i] vs $String1[$i]";
//    break;
//   }
// }

////////////////////////////////////////task10///////////////////////////////////////////

// $Sample_Output= ["Twinkle", "twinkle", "little star"];
// var_dump($Sample_Output);

////////////////////////////////////////task11///////////////////////////////////////////

// $src="abcefghijklmnopqrstuvwxyza";
// echo ($src[stripos($src,"z")+1]);

////////////////////////////////////////task13///////////////////////////////////////////
$Original_String= '0000657022.24';
echo ltrim($Original_String,"0");

////////////////////////////////////////task14///////////////////////////////////////////


