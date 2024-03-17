<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "balajicatering");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM checkout";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
  <table class="table" bordered="1">
  <tr>
  <th>Product ID</th>
  <th>User ID</th>
  <th>Date</th>
  <th>Customer Name</th>
  <th>Mobile</th>
  <th>Email</th>
  <th>Address</th>
  </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["p_id"].'</td>  
                         <td>'.$row["u_id"].'</td>  
                         <td>'.$row["edate"].'</td>  
                         <td>'.$row["name"].'</td>  
                         <td>'.$row["mobile"].'</td>
                         <td>'.$row["email"].'</td>
                         <td>'.$row["location"].'</td>
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=userlist.xls');
  echo $output;
 }
}
?>