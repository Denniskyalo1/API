<?php

require_once "fnc.php";

$Obj = new fnc();

$arr = ["black","white","green","red"];

foreach($arr AS $color){
    print $color . "<br>";
}

print dirname(__FILE__);
print "<br>";
print "<br>";
print $_SERVER["PHP_SELF"];
print "<br>";
print "<br>";
print basename($_SERVER["PHP_SELF"]);

if(file_exists("index.php") AND is_readable("index.php")){
    print "yes";
}else{
    print "no";
}

?>