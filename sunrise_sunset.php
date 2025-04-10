<?php

    //Calculate the sunrise time for Lisbon, Portugal
    //Latitude: 38.4 North
    //Longitude: 9 West
    //Zenith ~= 90
    //offset: +1 GMT
    
    echo "Lisbon, Portugal\n";
    echo("Date: " . date("D M d Y"));
    echo("\nSunrise time: ");
    echo(date_sunrise(time(),SUNFUNCS_RET_STRING,38.4,-9,90,1));
    echo("\nSunset time: ");
    echo(date_sunset(time(),SUNFUNCS_RET_STRING,38.4,-9,90,1));

?>