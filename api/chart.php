<?php
$conect =mysqli_connect("localhost","root,","testing");
$query = "SELECT * FROM account";
$result = mysqli_query($conect,$query);
$chart_data = '';
while($row = mysqli_fetch_array($result))
{
  $chart_data .= "{ year:'".$row["year"]. "',profit:" . $row["profit"] . ",purchase:" . $row["purchase"] . ",sale:" . $row["sale"] . ",}";
}
$chart_data = substr($chart_data, 0 ,-2);