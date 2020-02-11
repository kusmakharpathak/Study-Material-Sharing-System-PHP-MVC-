

<?php
function sendmal($subject, $message, $reci)
{
    $sub = $subject;
    $msg = $message;
    $rec = $reci;
    mail($rec, $sub, $msg);
}

//$r = 'kusmakharpathak.sunway@gmail.com';
//
//sendmal('test','test', $r);