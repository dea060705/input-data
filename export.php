<?php
$connect = mysqli_connect("localhost","root","","monitoring_awlr");
$output ='';
if(isset($_POST["export"]))
{
    $sql = "SELECT * FROM monitoring_awlr";
    $result = mysqli_query($connect, $sql);
    if(mysqli_num_rows($result) > 0)
    {
    $output .= '
   <table class="table" bordered="1">  
   <tr>
     <th>No</th>
     <th>TMA</th>
     <th>Suhu</th>
     <th>Teg_solar</th>
     <th>ANS_solar</th>
     <th>Teg_battery</th>  
     <th>ANS_battery</th>
     <th>Date</th>
   </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
     <td>'.$row["No"].'</td> 
     <td>'.$row["TMA"].'</td>  
     <td>'.$row["Suhu"].'</td>  
     <td>'.$row["Teg_solar"].'</td>  
     <td>'.$row["ANS_solar"].'</td>  
     <td>'.$row["Teg_battery"].'</td>
     <td>'.$row["ANS_battery"].'</td>
     <td>'.$row["Date"].'</td>
    </tr>
   ';
  }
  $output .= '</table>';
  header("Content-Type: application/xls");
  header("Content-Disposition: attachment; filename=download.xls");
  echo $output;
 }
}
?>