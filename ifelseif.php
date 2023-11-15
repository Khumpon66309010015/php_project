<?php

  //if 1 condition => true
  // odd => 0 2 4 6 8
  // even => 1 3 5 7 9
  $num1 = 56814;
  if($num1%2 == 0){
    echo "เลขคู่";
  }
  echo "<hr color='red'>";
  //if
  $num2 = 56815;
if($num2%2 ==0){
    echo "เลขคู่";
    }else{
        echo "เลขคี่";
    }
    echo "<hr color='red'>";
    //
    $led = "red";
    if($led == "green"){
        echo "ไปได้";
    }elseif($led == "yellow"){
        echo "ชะลอ";
    }else{
        echo "หยุด";
    }
    echo "<hr color='red'>";
    //
    $prefix = "นาง";
    if($prefix == "นาง"){
        echo "ผู้หญิง";
    }elseif($prefix == "นางสาว"){
        echo "ผู้หญิง";
    }elseif($prefix == "ด.ช."){
        echo "ผู้ชาย";
    }elseif($prefix == "ด.ญ."){
        echo "ผู้หญิง";
    }else{
        echo "ผู้ชาย";
    }

    echo "<hr color='red'>";
    //
    switch ($prefix) {
        case "นาย":
        echo "Male";
          break;
        case "ด.ช.":
        echo "Male";
            break;
        case "นาง":
        echo "female";
            break;
        case "นางสาว":
        echo "female";
            break;
        
        default:
        echo "female";
        break;
      }

?>