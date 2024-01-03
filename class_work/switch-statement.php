<h3>Switch statement:</h3>

<?php 

// in switch statement we have to create case and then we have to use echo, after result will be show

// for all month and all days
//  ========================================





// For all days  =======================

$days = "mon";

switch($days) {
    case "sun":
        echo "Sunday";
        break;
    case "mon":
        echo "Monday";
        break;
    case "tue":
        echo "Tuesday";
        break;
    case "wed":
        echo "Wednesday";
        break;
    case "thu":
        echo "Thursday";
        break;
    case "fri":
        echo "Friday";
        break;
    case "sat":
        echo "Saturday";
        break;
    default:
        echo "Not a valid Day";
        break;
}



echo "<br><br>";
// For all months  ======================

$month = "test";

switch($month) {
    case "jan":
        case "test";
        echo "January";
        break;
    case "feb":
        echo "February";
        break;
    case "mar":
        echo "March";
        break;
    case "apr":
        echo "April";
        break;
    case "may":
        echo "May";
        break;
    case "jun":
        echo "June";
        break;
    case "jul":
        echo "July";
        break;
    case "aug":
        echo "August";
        break;
    case "sep":
        echo "September";
        break;
    case "oct":
        echo "October";
        break;
    case "nov":
        echo "November";
        break;
    case "dec":
        echo "December";
        break;
    default:
        echo "Not a valid month";
        break;
}






// For exercise ======================

// $num = 5;

// switch($num) {
//     case 1:
//         echo "case 1";
//         break;
//     case 2:
//         echo "Case 2";
//         break;
//     case 3:
//         echo "Case 3";      
//         break;
//     case 4:
//         echo "Case 4";
//         break;
//     default:
//         echo "This is default";
//         break;    
// }







?>