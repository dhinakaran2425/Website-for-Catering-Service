<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `addcart` WHERE CONCAT(`p_id`, 'u_id' ,  'price', 'total') LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `addcart`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "balajicatering");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="sample.css">

<title>Booked List</title>
</head>
<body>
    <div class="container" >
    <table class="table table-hover table-striped" border="1">
                                    <thead>
                                    <th>Product ID</th>
			<th>User ID</th>
			
			<th>Price</th>
			<th>Quantity</th>
			<th>Total</th>
                                    </thead>
                                     <?php while($rec = mysqli_fetch_array($search_result)) { ?>
                                    <tbody>
                                        <tr>
                                        <td><?php echo $rec['p_id']; ?></td>
			<td><?php echo $rec['u_id']; ?></td>
			<td><?php echo $rec['price']; ?></td>
			<td><?php echo $rec['qty']; ?></td>
			<td><?php echo $rec['total']; ?></td>
                                        </tr>
                                        
                                    </tbody>
                                    <?php } ?>
                                </table><br>
                                <div class="input-group">
                                <form method="post" action="export-data-filter.php">
     <input type="submit" name="export" class="btn btn-success" value="Export" />
    </form></div><div class="input-group">
    <form action="after_login.php" method="post">     <input type="submit" value="Back"><br><br>
 </form></div>
	</div>
                                     </body>
                                     </html>