<?php
require('../app/logger.php');

/**
 * You can run addEvent('TEST', 'THISUSER', 'THIS HAPPENED');
 * By itself, the following examples adds code to handle failure/success
 */

$event = addEvent('TEST', 'THISUSER', 'THIS HAPPENED');

if($event == true) {
//This will run if the log is succesful

} else {
//This will run if the log fails

}