function updateClock()
{
    var currentTime = new Date();
    var currentHours = currentTime.getHours();
    var currentMinutes = currentTime.getMinutes();
    var currentSeconds = currentTime.getSeconds();
    var currentDay = currentTime.getDay();

    //convert day to string name
    switch (currentDay) {
        case 1:
            currentDay = "Senin";
            break;
        case 2:
            currentDay = "Selasa";
            break;
        case 3:
            currentDay = "Rabu";
            break;
        case 4:
            currentDay = "Kamis";
            break;
        case 5:
            currentDay = "Jumat";
            break;
        case 6:
            currentDay = "Sabtu";
            break;
        default:
            currentDay = "Minggu";
            break;
    }

    // Pad the minutes and seconds with leading zeros, if required
    currentMinutes = (currentMinutes < 10 ? "0" : "") + currentMinutes;
    currentSeconds = (currentSeconds < 10 ? "0" : "") + currentSeconds;

    // Choose either "AM" or "PM" as appropriate
    var timeOfDay = (currentHours < 12) ? "AM" : "PM";

    // Convert the hours component to 12-hour format if needed
//  	currentHours = ( currentHours > 12 ) ? currentHours - 12 : currentHours;

    // Convert an hours component of "0" to "12"
    currentHours = (currentHours == 0) ? 12 : currentHours;

    // Compose the string for display
    //var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + timeOfDay;
    var currentTimeString = currentDay + ", " + currentHours + ":" + currentMinutes + ":" + currentSeconds;


    $("#clock").html(currentTimeString);

}

$(document).ready(function ()
{
//    alert('pret');
    setInterval('updateClock()', 1000);
});