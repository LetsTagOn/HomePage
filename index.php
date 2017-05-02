
<!doctype html>
<head>
<meta charset="UTF-8"/>

<title>
Trying..
</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="try.css">
<?php include 'create_acc.php';?>
</head>
<body>
 

<div class="nav">
<div class="container-fluid">
		 <div class="row">
		  
		    
		 <div class="col-xs-2 col-md-2">
		        <img src="letstagon.png">
		    </div>
		     <form  id="login_form" action="login.php" method="post">
		          <div class="col-xs-4 col-md-4">
		           <span id="form_text">Email </span> <input type="email" name="email"/>
		            </div>
		           <div class="col-xs-4 col-md-4">
		           <span id="form_text">PassWord </span> <input type="PassWord" name="password"/>
		             </div>
		    
		    <div class="col-xs-2 col-md-2">
		        <span id="Login"><a href="#" onclick="document.getElementById('login_form').submit(); return false;">Login</a></span>
		        <br/>
		        <span id="forgot"><a href="#">Forgot Password?</a></span>
		    </div>
		    </form>
		 </div>
		</div>
	</div>
         <div class="container-fluid"> 
			<span id="text1"><h2 class="text-center">Welcome to Lets<span style="color:#00a3cc;">Tagon</span></h2></span>
		 </div>

     <div class="container-fluid">
   		 <p><h4>A networking and collaboration platform to promote volunteering and enhance collective efforts on social causes by tagging various players in the social sector</h4></p>
         <span style="position:relative;top:15px;" class="text-center"><h2>Get tagged and be part of the dream!</h2></span>
     </div>
   

     <div class="form">
     <div class="container-fluid">
            <div class="row">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post'>
             <div class="col-md-12 col-xs-12 text-center">
            
                <span id="form_text1">Name:</span><input type="text" name="new_username" value="<?php if(!$join_success) echo $name;?>"/> <span id="error" > <?php echo $nameErr;?></span>
            
            </div>
            <div class=" col-md-12 col-xs-12 text-center">
               
                <span id="form_text1">Email:</span> <input type="email" name="new_email" value="<?php if(!$join_success) echo $email;?>"/> <span id="error"><?php echo $emailErr;?></span>
            
            </div>
            <div class="col-md-12 col-xs-12 text-center">
            
                <span id="form_text1">Password:</span> <input type="PassWord" name="new_password" value="<?php if(!$join_success) echo $password;?>"/> <span id="error"><?php echo $passErr;?></span> <span style="color:green;"><?php echo"<br>";if($join_success) echo $joined;?></span> 
            
            </div>
             <div class="col-md-12 col-xs-12 text-center">
                    <input type="submit" name="joinnow" value="Join Now!">
            </div>
            </form>
         </div>
         </div> 
         </div>

       <div class="navbar-fixed-bottom bottom_part">
        <div class="container-fluid">
        <div class="row">
		  
		    <div class="col-md-2 col-xs-2">
		        <span id="footer_text"><a href="#">About  Us</a></span>
		    </div>
		    <div class="col-md-2 col-xs-2">
		        <span id="footer_text"><a href="#">How It Works</a> </span>
		    </div>
		    <div class="col-md-2 col-xs-2">
		        <span id="footer_text"><a href="#">Privacy Policy</a> </span>
		    </div>
        </div>
       </div>  
       </div>
</body>
</html>