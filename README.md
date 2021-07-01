# quick-PHP-logger
 
This quick PHP logger writes logs in a flexible and easily modifiable format.
You can use it by calling the addEvent function like this

```php
addEvent('eventType', 'eventInitiator', 'eventDetails', 'eventLocation');
```

#### Features
- Lightweight tool
- Extremely flexible (Create your own log types and values)
- Logs to SQL database for easy viewing/sorting

#### Example Database Output

|eventID   |eventTime   |eventType |eventInitiator |eventDetails |eventLocation |
|---|---|---|---|---|---|
|1 |27/01/2021 16:02 |TEST |THISUSER |THIS HAPPENED |login|

#### How to use in your projects
Edit the configuration/connection files or use your own!

```php
<?php

if (!function_exists('getDBPass')) {
    function getDBPass()
    {
        $password = "Database Password";
        return $password;
    }
}
if (!function_exists('getDBUser')) {
    function getDBUser()
    {
        $username = "Database User";
        return $username;
    }
}
```
```php
<?php
require('conf.php');

//This script generates a mySQL database connection change the hostname and database name here, other settings are in 'conf.php'

function get_dbc()
{
    $hostname = "localhost";
    $username = getDBUser();
    $password = getDBPass();
    $db = "development";
    $dbc = mysqli_connect($hostname, $username, $password, $db);
    if (!$dbc) die("Unable to connect to MySQL: " . mysqli_error($dbc));
    return $dbc;
}
```

Once you have changed these values for your own, you can start using the logger anywhere in your application!
You may need to fiddle around with the directories for the php includes depending on your app structure.

Just include the logger file and start calling the function
```php
<?php
require('../app/logger.php');

addEvent('THISTYPE', 'THISUSER', 'THIS HAPPENED');
```


