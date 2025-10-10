<?php

$dirIP = "192.168.11.244";

$valores = explode(".", $dirIP);

print_r($valores);

$dirIP = implode(":", $valores);

echo $dirIP;
