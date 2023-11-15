<?php
$day = date('l');
//$day = "Monday";
switch ($day ) {
    case "Monday":
    echo "<body style='background-color: yellow'>";
      break;
    case "Tuesday":
    echo "<body style='background-color: pink'>";
        break;
    case "Wednesday":
    echo "<body style='background-color: green'>";
    echo "วันพุธ";
        break;
    case "Thursday":
    echo "<body style='background-color: orange'>";
        break;
    case "Friday ":
    echo "<body style='background-color: blue'>";
        break;
    case "Saturday":
    echo "<body style='background-color: purple'>";
        break;
    
    default:
    echo "<body style='background-color: red'>";
    break;
  }

?>