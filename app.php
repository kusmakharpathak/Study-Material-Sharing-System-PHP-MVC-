<?php

$password = password_hash("test", PASSWORD_DEFAULT);
if(password_verify('test', $password)){
    echo "success";
}else{
    echo "sorry";
}