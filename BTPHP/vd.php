<?php
echo "<hr>";
?>
<?php 
echo "<h2> Tài liệu học javascript</h2>";
echo "<h3> Tài liệu học mysql</h3>";
echo "<h4> Tài liệu học PHP</h4>";
?>
<?php
$text ="Từ cơ bản". " " ."đến nâng cao";
echo $text;
?>
<?php
function Test()
{
    $a=5;
    echo "$a";
}
Test();
echo $a;
?>
<?php
$a=1;
$b=2;
function sum()
{
    global $a,$b;
    $b=$a+$b;
}
sum();
echo $b;
?>