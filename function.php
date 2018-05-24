<?php
include "html/partials/connect.php";

function yesNo($number)
{
    if ($number == 1) {
        return 'Ja';
    } else {
        return 'Nee';
    }
}