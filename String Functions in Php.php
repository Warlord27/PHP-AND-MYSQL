<?php
$name="ANDRO is a Robot";
echo"$name";
echo"<br>";
echo "the length of "."my string is".strlen($name);
echo"<br>";
echo str_word_count($name);
echo"<br>";
echo strrev($name);
echo"<br>";
$friend= "Tanbir is my best friend";

echo strpos($friend,"friend");

echo"<br>";

echo str_replace("friend","tanbir",$friend);

echo"<br>";

echo str_repeat($friend,5);

echo"<br>";

echo "<Pre>";

echo"<br>";

echo rtrim("   I am a good boy   ");
echo"<br>";

echo ltrim("      I am a good boy     ");
echo "</pre>";



?>