<?php

$a = $_POST['a'];
switch ($a) {
    case "นาย":
    echo "<h2 style='color: blue; margin: 100px;'>ข้อความที่คุณส่งมาคือ ".$a." เพศคือ<br>";
    echo "Male";
      break;
    case "ด.ช.":
        echo "<h2 style='color: blue; margin: 100px;'>ข้อความที่คุณส่งมาคือ ".$a." เพศคือ<br>";
    echo "Male";
        break;
    case "นาง":
        echo "<h2 style='color: red; margin: 100px;'>ข้อความที่คุณส่งมาคือ ".$a." เพศคือ<br>";
    echo "female";
        break;
    case "นางสาว":
        echo "<h2 style='color: red; margin: 100px;'>ข้อความที่คุณส่งมาคือ ".$a." เพศคือ<br>";
    echo "female";
        break;
    
    default:
    echo "<h2 style='color: red; margin: 100px;'>ข้อความที่คุณส่งมาคือ ".$a." เพศคือ<br>";
    echo "female";
    break;
  }

?>