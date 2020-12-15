<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<body>
<div class="container col-md-8 col-md-offset-2">
  <div class="well">
	<form method="post" action="testphpmailer.php">
	<div class="form-group">
    <label for="exampleInputPassword1">Enter Your Name</label>
    <input type="text" class="form-control" name="name" id="exampleInputPassword1" placeholder="Type your name" required="required">
  	</div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Type your email" required="required">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Message subject</label>
    <input type="text" class="form-control" name="subject" id="exampleInputPassword1" placeholder="Type Message subject" required="required">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Enter your message</label>
     


   <div> 
  <textarea name="text" style="width:400px; height:300px" required="required" placeholder="Enter your message"></textarea>   
  </div>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>&nbsp;&nbsp;&nbsp;<button type="reset" class="btn btn-primary">Reset</button>

</form>
</div>
</div>
<?php include "footer.php" ?>
   </body>
   </html>
