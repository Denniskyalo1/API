<?php

class fnc{
    var $fname;

    public $username;

    protected $email_address;

    private $password;

    function computer_user($fname){
        return $fname;
    }

    public function user_age($name, $yob){
        $age = date('Y')-$yob;
        return $name . " is " . $age . "\n";
}
}
 
$Obj = new fnc();

print $Obj->user_age("Alex",2004);

?>