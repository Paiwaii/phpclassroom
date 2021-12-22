<?php

  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces");
  $data = json_decode($json);

    echo "<center><b>รายงานสถานการณ์โควิด-19 แยกจังหวัด</b></center>";
    echo "<br>";

echo '<body style="background-color:FFFFFF">';
echo "<table border='1'>";
echo "<tr align='center'><td style= 'background-color:9999CC'><b>ลำดับ</b></td>
      <td style= 'background-color:9999CC'><b>จังหวัด</b></td>
      <td style= 'background-color:ADD8E6'><b>จำนวนผู้ป่วยใหม่</b></td>
      <td style= 'background-color:ADD8E6'><b>จำนวนผู้ป่วยสะสม</b></td>
      <td style= 'background-color:CD9B9B'><b>จำนวนผู้ป่วยใหม่(รวมต่างประเทศ)</b></td>
      <td style= 'background-color:CD9B9B'><b>จำนวนผู้ป่วยสะสม(รวมต่างประเทศ)</b></td>
      <td style= 'background-color:A2CD5A'><b>จำนวนผู้เสียชีวิต</b></td>
      <td style= 'background-color:A2CD5A'><b>จำนวนผู้เสียชีวิตสะสม</br></td>
      </tr>";
  
foreach($data as $key=>$val){
  echo "<tr align='center'>";
  echo "<td style= 'background-color:E6E6FA'>";
  echo ($key+1);
  echo "</td>";
  echo "<td style= 'background-color:E6E6FA'>";
  echo $val->province;
  echo "</td>";
  echo "<td style= 'background-color:F0F8FF'>";
  echo $val->new_case;
  echo "</td>";
  echo "<td style= 'background-color:F0F8FF'>";
  echo $val->total_case;
  echo "</td>";
  echo "<td style= 'background-color:EED5D2'>";
  echo $val->new_case_excludeabroad;
  echo "</td>";
  echo "<td style= 'background-color:EED5D2'>";
  echo $val->total_case_excludeabroad;
  echo "</td>";
  echo "<td style= 'background-color:E0EEE0'>";
  echo $val->new_death;
  echo "</td>";
  echo "<td style= 'background-color:E0EEE0'>";
  echo $val->total_death;
  echo "</td>";
  echo "</tr>";
}
echo "</table></center>";

echo "<br>";
echo "<center>วันที่อัพเดต : $val->txn_date</center>";

?>
  
 
