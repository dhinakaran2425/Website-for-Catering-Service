<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "balajicatering");
$output = '';
if(isset($_POST["invoice"]))
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

 }
}
?>

<script>
window.onload = function () {
    document.getElementById("download")
        .addEventListener("click", () => {
            const invoice = this.document.getElementById("invoice");
            console.log(invoice);
            console.log(window);
            var opt = {
                margin: 1,
                filename: 'myfile.pdf',
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
            };
            html2pdf().from(invoice).set(opt).save();
        })
}
</script>
