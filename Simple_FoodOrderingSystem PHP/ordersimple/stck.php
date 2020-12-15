
<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<!DOCTYPE html>
<html>

<style>
#score_div{
	text-align: center;
	height:30px;
	width:20%;
	margin-left:40%;
	background-color:#20B2AA;
}

#gme-ar{
	margin-left:17%;
	background-color:gray;
}

h1{
	text-align: center;
}

body{
	background-color:#00C853;
}
</style>


<body>
<h1 class="text-primary">Stack Game</h1>

<canvas id="gme-ar" width="1000px" height="600px"></canvas>
<br/><br/>
<div id="score_div"><b>Score : </b>0</div>
<script>"use strict";</script>
<script type="text/javascript" src="per.js"></script>
<script type="text/javascript" src="shapes.js"></script>
<script type="text/javascript" src="stck.js"></script>


</body>
</html>
