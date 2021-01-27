<?php
require('../app/logger.php');

/**
 * You can run addEvent('eventType', 'eventInitiator', 'eventDetails', 'eventLocation');
 * By itself, the following examples adds code to handle failure/success
 */
$eventLocation = (basename(__FILE__, '.php'));
$event = addEvent('TEST', 'THISUSER', 'THIS HAPPENED', $eventLocation);

if($event == true) {
//This will run if the log is succesful


} else {
//This will run if the log fails

}