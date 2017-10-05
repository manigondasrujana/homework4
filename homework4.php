<?php
$date = date('Y/m/d');
echo "Today's date is:".$date."<br>";
$star = "2017/10/03";
echo "The value of \$star: ".$star."<br>";


$datetime1 = date_create($date);
$datetime2 = date_create($star);
$interval = date_diff($datetime2, $datetime1);


if ($interval > "0") {
    echo "the future"."<br>";
        } elseif ($interval < "0") {
        echo "the past";
        } else {
        echo "oops";
        }

$pos = '/';
function strpos_all($date, $pos) {
$offset = 0;
$allpos = array();
while (($pos1 = strpos($date, $pos, $offset)) !== FALSE) {
$offset   = $pos1 + 1;
$allpos[] = $pos1;
}
return $allpos;
}
print_r(strpos_all($date,$pos));
echo "<br>";


$trans = array("/" => " ");
echo strtr($date, $trans) . "<br>";

print_r(str_word_count($date,1,'0..9'));
echo "<br>";

$string = "srujana";
echo strlen($string)."<br>";
echo ord($string)."<br>";
echo substr($date,-2)."<br>";

$r = split('/', $date);
print_r($r)."<br>";
echo "<br>";

$trans = array("/" => " ");
echo strtr($date, $trans) . "<br>";

$year = array("2017", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);
echo "<br>";

foreach($year as $y)
 {
for($i=0;$i<1;$i++)
{
switch($y)
{
case(($y%4)== 0 and ($y%100)!=0 or ($y%400)==0):
echo "True ";
break;
default:
echo "False ";
break;
}
}
}
echo "<br>";
foreach($year as $y)
{
if(($y%4)== 0 and ($y%100)!=0 or ($y%400)==0)
{
echo "TRUE ";
}
else
{
echo "FALSE ";
}
}

?>

