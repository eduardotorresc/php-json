<?php

$data     = file_get_contents("datos.json");
$usuarios = json_decode($data, true);
