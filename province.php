<?php

  $json = file_get_contents("url");
  $data = json_decode($json);
  
  echo "<table border='1'>";
  echo "<tr><td>ลำดับ</td><td>จังหวัด</td></tr>";
  foreach($data as $key=>$val){
    echo "<tr>";
    echo "<td>";
    echo $key;
    echo "</td>";
    echo "<td>";
    echo $val->province;
    echo "</td>";
    echo "</tr>";
  }
  echo "</table>"; 
?>
