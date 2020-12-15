
<?php include('header.php'); ?>
<?php include('navbar.php'); ?>

<div class="container">
	<div class="col-md-6">
		<img src="img/chief.jpg" style="border-radius: 30px;"  width="500px" height="400px">
	</div>
	<div class="col-md-6">
		<video style="border: 2px solid gray; border-radius: 30px; margin-left:  -4em; " controls autoplay="autoplay" width="610px" height="400px">
			<source src="vid/commercial.mp4" type="video/mp4">
		</video>
	</div>
</div>

	<!--<div id="carousel">
		<div id="myCarousel" class="carousel slide" data-interval="1000" width="500px" height="400px">
			<div class="carousel-inner">
				<div class="active item" style="padding:0; border-bottom:0 solid #111;"><img src="img/1145.jpg" class=" carousel" width="500px" height="400px"></div>
				<div class="item" style="padding:0; border-bottom:0 solid #111;"><img src="img/http _cdn.cnn.com_cnnnext_dam_assets_170224172523-mojito.jpg" class="carousel" width="500px" height="400px"></div>
				<div class="item" style="padding:0; border-bottom:0 solid #111;"><img src="img/eggs_in_tomatoes.jpeg" class="carousel" height="400px" width="500px"></div>
				
			</div>
				<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
				<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
			</div>
	</div>-->
		


<div class="container">
	<h1 class="page-header text-center">MENU</h1>
	<form method="POST" action="purchase.php">
	<ul class="nav nav-tabs">
		<?php
			$sql="select * from category order by categoryid asc limit 1";
			$fquery=$conn->query($sql);
			$frow=$fquery->fetch_array();
			?>
				<li class="active"><a data-toggle="tab" href="#<?php echo $frow['catname'] ?>"><?php echo $frow['catname'] ?></a></li>
			<?php

			$sql="select * from category order by categoryid asc";
			$nquery=$conn->query($sql);
			$num=$nquery->num_rows-1;

			$sql="select * from category order by categoryid asc limit 1, $num";
			$query=$conn->query($sql);
			while($row=$query->fetch_array()){
				?>
				<li><a data-toggle="tab" href="#<?php echo $row['catname'] ?>"><?php echo $row['catname'] ?></a></li>
				<?php
			}
		?>
	</ul>

	<div class="tab-content">
		<?php
			$sql="select * from category order by category.categoryid asc limit 1";
			$fquery=$conn->query($sql);
			$ftrow=$fquery->fetch_array();
			?>
				<div id="<?php echo $ftrow['catname']; ?>" class="tab-pane fade in active" style="margin-top:20px;">
					<?php

						$sql="select * from product left join category on category.categoryid=product.categoryid  where category.categoryid='".$ftrow['categoryid']."'";
						$pfquery=$conn->query($sql);
						$inc=4;
						$iterate = 0;
						while($pfrow=$pfquery->fetch_array()){
							$inc = ($inc == 4) ? 1 : $inc+1; 
							if($inc == 1) echo "<div class='row'>"; 
							?>
								<div class="col-md-3">
									<div class="panel panel-default">
										<div class="panel-heading text-center">
											<b><?php echo $pfrow['productname']; ?></b>
										</div>
										<div class="panel-body text-center">
											<img src="<?php if(empty($pfrow['photo'])){echo "upload/noimage.jpg";} else{echo $pfrow['photo'];} ?>" height="225px;" width="100%">
										</div>
										<div class="panel-footer text-center">
											<table>
												<tr><td></td>
							<td class="text-center"><input type="checkbox" value="<?php echo $pfrow['productid']; ?>||<?php echo $iterate; ?>"
							name="productid[]" id="checkbox" onchange="ShiptoBill()" style=""></td></tr>
	
							<tr><td>Price:</td><td class="text-center"> <?php echo number_format($pfrow['price']) ." Ks"; ?></td></tr>
							<tr><td>Qty:</td><td><input class="text-center" type="number" class="form-control" name="quantity_<?php echo $iterate; ?>" min = "1" id="txtunit"></td>
						</tr>
						<?php $iterate++; ?>
											</table>
										</div>
										
									</div>
								</div>
							<?php
							if($inc == 4) echo "</div>";
						}
						if($inc == 1) echo "<div class='col-md-3'></div><div class='col-md-3'></div><div class='col-md-3'></div></div>"; 
						if($inc == 2) echo "<div class='col-md-3'></div><div class='col-md-3'></div></div>"; 
						if($inc == 3) echo "<div class='col-md-3'></div></div>"; 
					?>
		    	</div>
			<?php

			$sql="select * from category order by categoryid asc";
			$tquery=$conn->query($sql);
			$tnum=$tquery->num_rows-1;

			$sql="select * from category order by categoryid asc limit 1, $tnum";
			$cquery=$conn->query($sql);
			while($trow=$cquery->fetch_array()){
				?>
				<div id="<?php echo $trow['catname']; ?>" class="tab-pane fade" style="margin-top:20px;">
					<?php

						$sql="select * from product left join category on category.categoryid=product.categoryid where category.categoryid='".$trow['categoryid']."'";
					//$sql = "select * from product where category.id='".$trow['categoryid']."'";
						$pquery=$conn->query($sql);
						$inc=4;
						//$iterate = 0;
						while($prow=$pquery->fetch_array()){
							$inc = ($inc == 4) ? 1 : $inc+1; 
							if($inc == 1) echo "<div class='row'>"; 
							?>
								<div class="col-md-3">
									<div class="panel panel-default">
										<div class="panel-heading text-center">
											<b><?php echo $prow['productname']; ?></b>
										</div>
										<div class="panel-body">
											<img src="<?php if($prow['photo']==''){echo "upload/noimage.jpg";} else{echo $prow['photo'];} ?>" height="225px;" width="100%">
										</div>
										<div class="panal-footer text-center">
											<table>
												<tr><td></td>
							<td class="text-center"><input type="checkbox" value="<?php echo $prow['productid']; ?>||<?php echo $iterate; ?>"
							name="productid[]" id="checkbox" onchange="ShiptoBill()" style=""></td></tr>
	
							<tr><td><?php echo $pfrow['catname']; ?></td></tr>
							<!--<tr><td>Name:</td><td class="text-center"><?php //echo $pfrow['productname']; ?></td></tr>-->
							<tr><td>Price:</td><td class="text-center"> <?php echo number_format($prow['price']) ." Ks"; ?></td></tr>
							<tr><td>Qty:</td><td><input class="text-center" type="number" class="form-control" name="quantity_<?php echo $iterate; ?>" min = "1" id="txtunit"></td>
						</tr>
						<?php $iterate++; ?>
											</table>
										</div>
										<!--<div class="panel-footer text-center">
											&#x20A8; <?php //echo number_format($prow['price'], 2); ?>
										</div>-->
									</div>
								</div>
							<?php
							if($inc == 4) echo "</div>";
						}
						if($inc == 1) echo "<div class='col-md-3'></div><div class='col-md-3'></div><div class='col-md-3'></div></div>"; 
						if($inc == 2) echo "<div class='col-md-3'></div><div class='col-md-3'></div></div>"; 
						if($inc == 3) echo "<div class='col-md-3'></div></div>"; 
					?>
		    	</div>
				<?php
			}
		?>
		
	</div>
	<div class="row">
			<div class="col-md-3">
				<div class="well" style="width: 350px;">
					
					
				<table>
					
					<tr><td>
				<b><h3 class="text-primary">Order Now!<h3></b><br>		
				Customer Name : <input style="height: 45px; font-size: 20px;width: 300px;" type="text" name="customer" class="form-control" placeholder="Customer Name" required><br>
				Contact : <input style="height: 45px; font-size: 20px;" type="text" name="contact" class="form-control" placeholder="Contact" required><br>
				Address : <input style="height: 45px;font-size: 20px;" type="text" name="address" class="form-control" placeholder="Address" required><br>
				<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Order</button>
				</td>
				<div>
				<td >
				<iframe style="margin-left: 220px;" 
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3745.866151533439!2d94.94499591439306!3d20.13963092291151!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30b7d112f665552d%3A0x35695e2ef9111148!2sHigh%20Class%20Food%20Garden!5e0!3m2!1smy!2smm!4v1567326649903!5m2!1smy!2smm" 
				width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="">
				</iframe>
				</td></div>
					</tr>
				</table>
			</div>
			</div>
			<!--<div class="col-md-2" style="margin-left:-20px;">
				<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Order</button>
			</div>-->
	</div>
</form>
	
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$("#checkAll").click(function(){
	    	$('input:checkbox').not(this).prop('checked', this.checked);
			
		});
	});
	
	
	function ShiptoBill(){
		var bill = document.getElementById("txtunit");
		var check = document.getElementById("checkbox").checked;
		
		if(check == true){
			bill.value = 1;
		}else{
			bill.value = '';
		}
		
	}
</script>
<?php include "footer.php" ?>
</body>

</html>