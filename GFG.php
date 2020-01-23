<?php
// A php program to implement encapsulation

class GFG {
    private $userId;
    private $pwd;

    // update GFG password
    public function updatePwd($userId, $pwd) {
        //Write function body
        echo("Function to update password '" . $pwd . "' for user " . $userId);

        echo "<br>";

    }

    //Check account balance
    public function courseName ($userId) {
        //write function body
        echo ("Function to check course name of user "
        .$userId);
        
        echo "<br>";
    }

}

$object = new GFG();
$object -> updatePwd('GFG12', 'geeks54321');
$object -> courseName('GFG06');