<?php
$data = file_get_contents("php://input");
$data = json_decode($data, true);

error_log(print_r($data, true),);
echo"{
    'ResponseCode': 0,
    'ResponseDesc' : 'Accept Service'
}";