<?php
require('dbconn.php');

function addEvent($eventType, $eventInitiator, $eventDetails)
{
    try {

        $conn = get_dbc();

        //Set parameters
        $eventType = filter_var($eventType, FILTER_SANITIZE_STRING);
        $eventInitiator = filter_var($eventInitiator, FILTER_SANITIZE_STRING);
        $eventDetails = filter_var($eventDetails, FILTER_SANITIZE_STRING);


        //Prepare and bind
        $stmt = $conn->prepare("INSERT INTO eventLog (eventType, eventInitiator, eventDetails) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $eventType, $eventInitiator, $eventDetails);

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
