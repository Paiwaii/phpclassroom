<?php

  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces");
  $data = json_decode($json);

    echo "<center><b>รายงานสถานการณ์โควิด-19 แยกจังหวัด</b></center>";
    echo "<br>";

echo '<body style="background-color:...">';
echo "<center><table border='1'>";
echo "<tr><td style= 'background-color:9999CC'>ลำดับ</td>
      <center><td style= 'background-color:E9967A'>จังหวัด</td></center>;
      <td style= 'background-color:ADD8E6'>จำนวนผู้ป่วยใหม่</td>
      <td style= 'background-color:99FFCC'>จำนวนผู้ป่วยสะสม</td>
      <td style= 'background-color:FFFF66'>จำนวนผู้ป่วยใหม่(รวมต่างประเทศ)</td>
      <td style= 'background-color:FFCC33'>จำนวนผู้ป่วยสะสม(รวมต่างประเทศ)</td>
      <td style= 'background-color:'>จำนวนผู้เสียชีวิต</td>
      <td style= 'background-color:...'>จำนวนผู้เสียชีวิตสะสม</td>
      </tr>";
  
foreach($data as $key=>$val){
  echo "<tr>";
  echo "<td style= 'background-color:E6E6FA'>";
  echo ($key+1);
  echo "</td>";
  echo "<td style= 'background-color:FFE4E1'>";
  echo $val->province;
  echo "</td>";
  echo "<td style= 'background-color:F0F8FF'>";
  echo $val->new_case;
  echo "</td>";
  echo "<td style= 'background-color:F0FFF0'>";
  echo $val->total_case;
  echo "</td>";
  echo "<td style= 'background-color:FFF8DC'>";
  echo $val->new_case_excludeabroad;
  echo "</td>";
  echo "<td style= 'background-color:FFE4B5'>";
  echo $val->total_case_excludeabroad;
  echo "</td>";
  echo "<td style= 'background-color:...'>";
  echo $val->new_death;
  echo "</td>";
  echo "<td style= 'background-color:...'>";
  echo $val->total_death;
  echo "</td>";
  echo "</tr>";
}
echo "</table></center>";

echo "<br><br>";
echo "<center>วันที่อัพเดต</center>";
echo "<center>$val->txn_date</center>";

?>
  
 
