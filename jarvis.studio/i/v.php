<?php
$code = $_GET['c'];

$codes = array(
    "D3RFCLP2JC",
    "DR0SCP1A1F",
    "N2VTX15DJK",
    "XX20U78T9X",
    "PXD4FSAK62",
    "ADS7Q8PRT6",
    "Q7BCA93SFY",
    "B397TA2QF6"
);

$isActivated = array(
    "false",
    "false",
    "false",
    "false",
    "false",
    "false",
    "false",
    "false"
);

if (isset($_GET['c'])) {
    if ($code == "") {
        echo("Bad request");
    } else {
        for($i = 0; $i < sizeof($codes); $i++) {
            if ($code == $codes[$i] && $isActivated[$i] == "false") {
                echo("Code is valid");
                exit();
            }
            
            else if ($code == $codes[$i] && $isActivated[$i] == "true") {
                echo("Code already used");
                exit();
            }
        }
        echo("Code doesn't exists");
    }
}
?>