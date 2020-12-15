<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./stylegame.css">
    <link href="./favicon.ico" rel="icon" type="image/x-icon" />
    <title>Tic tac toe</title>
</head>

<body >
    <div>
        <h1 style=" margin-left:40%;" class="text-primary"><b>Tic tac toe Game</b></h1><hr>
        
            <p style="margin-top:1%; margin-left:20%;" class="text-primary"> Play with:
                <select onchange="AI=this.value" style="margin-top: 40">
                    <option value="false" class="text-primary">Human</option>
                    <option value="true" class="text-primary">Computer</option>
                </select>
            </p>
	   
	<br><br><br><br>
    <div class="game-container">
        <div id="c00" class="cell"></div>
        <div id="c01" class="cell"></div>
        <div id="c02" class="cell"></div>
        <div id="c10" class="cell"></div>
        <div id="c11" class="cell"></div>
        <div id="c12" class="cell"></div>
        <div id="c20" class="cell"></div>
        <div id="c21" class="cell"></div>
        <div id="c22" class="cell"></div>
		
    </div>
	
	
    <button class="restart btn btn-primary" onclick="restart()" style="margin-top:20%; margin-left:49%;">Restart</button><hr>
	
	
	
    <script src="../jquery-3.3.1.min.js"></script>
    <script src="./index.js"></script>
</div>
<?php include "footer.php" ?>
</body>

</html>
