<?php
require('dbconn.php');

function addEvent($eventType, $eventInitiator, $eventDetails, $eventLocation)
{
    try {

        $conn = get_dbc();

        //Set parameters
        $eventType = filter_var($eventType, FILTER_SANITIZE_STRING);
        $eventInitiator = filter_var($eventInitiator, FILTER_SANITIZE_STRING);
        $eventDetails = filter_var($eventDetails, FILTER_SANITIZE_STRING);
        $eventLocation = filter_var($eventLocation, FILTER_SANITIZE_STRING);


        //Prepare and bind
        $stmt = $conn->prepare("INSERT INTO eventLog (eventType, eventInitiator, eventDetails, eventLocation) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $eventType, $eventInitiator, $eventDetails, $eventLocation);

        //Execute statement
        $stmt->execute();

        $stmt->close();
        $conn->close();

        return true;
    } catch (\Exception $e) {

        /**
         * Logging Failed
         * return $e;
         */

        return false;
    }
}
