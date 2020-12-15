
<?php include('header.php'); ?>

<body>
<?php include('navbar1.php'); ?>

<form method="post" action="sales_per_day.php">
		<input type="date" name="date">&nbsp;&nbsp;&nbsp;
		<input type="submit" name="submit">

</form>
<?php
if(isset($_POST['submit']) != null){
	$date = $_POST['date'];
	//echo $date;

?>

	<div class="container">
	<h1 class="page-header text-center">SALES</h1>
	<table class="table table-striped table-bordered">
		<thead>
			<th>Date</th>
			<th>Customer</th>
			<th>Contact</th>
			<th>Address</th>
			<th>Total Sales</th>
			<th>Details</th>
		</thead>
		<tbody>
			<?php 
				$sql="select * from purchase order by purchaseid desc";
				$query=$conn->query($sql);
				$sum = 0;
				while($row=$query->fetch_array()){

						if( date('Y-m-d', strtotime($row['date_purchase'])) == $date  ){
					?>
					<tr>
						<td><?php echo date('M d, Y h:i A', strtotime($row['date_purchase'])) ?></td>
						<td><?php echo $row['customer']; ?></td>
						<td><?php echo $row['contact']; ?></td>
						<td><?php echo $row['address']; ?></td>
						<td class="text-right"> <?php echo number_format($row['total']) ." Ks"; ?></td>
						<td><a href="#details<?php $row['purchaseid'];  echo $row['purchaseid']; 
						?>" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-search"></span> View </a>
							<?php include('sales_modal.php'); ?>
						</td>
					</tr>
					<?php
					$sum += $row['total'];
				}
				}

			?>
			<tr><td></td><td></td><td></td><td>Total Costs</td><td class="text-right"><?php echo number_format($sum) ." Ks";  ?></td><td></td>
		</tr>
		</tbody>
	</table>
	</div>
<?php
	}else{

		?>
		


		<div class="container">
			<h1 class="page-header text-center">SALES</h1>
			<table class="table table-striped table-bordered">
		<thead>
			<th>Date</th>
			<th>Customer</th>
			<th>Contact</th>
			<th>Address</th>
			<th>Total Sales</th>
			<th>Details</th>
		</thead>
		<tbody>
			<?php 
				$sql="select * from purchase order by purchaseid desc";
				$query=$conn->query($sql);
				$sum = 0;
				echo date('Y-m-d');
				while($row=$query->fetch_array()){
					if( date('Y-m-d', strtotime($row['date_purchase'])) == date('Y-m-d')  ){

					?>
					<tr>
						<td><?php echo date('M d, Y h:i A', strtotime($row['date_purchase'])) ?></td>
						<td><?php echo $row['customer']; ?></td>
						<td><?php echo $row['contact']; ?></td>
						<td><?php echo $row['address']; ?></td>
						<td class="text-right"> <?php echo number_format($row['total']) ." Ks"; ?></td>
						<td><a href="#details<?php $row['purchaseid'];  echo $row['purchaseid']; 
						?>" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-search"></span> View </a>
							<?php include('sales_modal.php'); ?>
						</td>
					</tr>
					<?php
					$sum += $row['total'];
				}
				}

			?>
			<tr><td></td><td></td><td></td><td>Total Costs</td><td class="text-right"><?php echo number_format($sum) ." Ks";  ?></td><td></td>
		</tr>
		</tbody>
			</table>
		</div>
	

		<?php
	}
?>
</body>
</html>