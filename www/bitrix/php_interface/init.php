<?php

function test_dump($param){
    global $USER;
    if ($USER->IsAuthorized()){
        echo '<pre>';
        var_dump($param);
        echo '</pre>';
    }
}