<?php 
require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload
use mightymango\DataPoliceUK\PoliceUK;

$POLICE = new PoliceUK();
echo $POLICE->lastupdated();