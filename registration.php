
<?php 
include 'header.php';
include('connection.php');

// Data to be inserted
if(isset($_POST['submit']))
{
$first_name=$_POST["first_name"];
$last_name=$_POST["last_name"];
$address=$_POST["address"];
$city=$_POST["city"];
$state=$_POST["state"];
$pin_code=trim($_POST["pin_code"]);
$mobile_no=trim($_POST["mobile_no"]);
$email=$_POST["email"];
$username=$_POST["username"];
$password=$_POST["password"];
$options = array("cost"=>4);
$hashPassword = password_hash($password,PASSWORD_BCRYPT,$options);
$confirm_password=$_POST["confirm_password"];
// SQL query for insertion
 $sql = "INSERT INTO register (first_name, last_name, address, city, state, pin_code, mobile_no, email, username, password, original_password, confirm_password) VALUES ('$first_name', 
        '$last_name', '$address', '$city', '$state', '$pin_code', '$mobile_no', '$email', '$username', '$password','$hashPassword', '$confirm_password')";

// Execute the query
if ($con->query($sql) === TRUE) {
    header("Location: login.php");
    //echo "Record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
}
?>
<!------ Include the above in your HEAD tag ---------->
<!-- section-3 about-->
<style>
/* Everything but the jumbotron gets side spacing for mobile first views */
.header,
.marketing,
.footer {
  padding-right: 15px;
  padding-left: 15px;
}

/* Custom page header */
.header {
  border-bottom: 1px solid #e5e5e5;
}
/* Make the masthead heading the same height as the navigation */
.header h3 {
  padding-bottom: 19px;
  margin-top: 0;
  margin-bottom: 0;
  line-height: 40px;
}

/* Custom page footer */
.footer {
  padding-top: 19px;
  color: #777;
  border-top: 1px solid #e5e5e5;
}

/* Customize container */
@media (min-width: 768px) {
  .container {
    max-width: 730px;
  }
}
.container-narrow > hr {
  margin: 30px 0;
}

/* Main marketing message and sign up button */
.jumbotron {
  text-align: center;
  border-bottom: 1px solid #e5e5e5;
}
.jumbotron .btn {
  padding: 14px 24px;
  font-size: 21px;
}

/* Supporting marketing content */
.marketing {
  margin: 40px 0;
}
.marketing p + h4 {
  margin-top: 28px;
}

/* Responsive: Portrait tablets and up */
@media screen and (min-width: 768px) {
  /* Remove the padding we set earlier */
  .header,
  .marketing,
  .footer {
    padding-right: 0;
    padding-left: 0;
  }
  /* Space out the masthead */
  .header {
    margin-bottom: 30px;
  }
  /* Remove the bottom border on the jumbotron for visual effect */
  .jumbotron {
    border-bottom: 0;
  }
}
</style>
<section id="about">
     <div class="about-section wrapper">
       <div class="container">
         <div class="row align-items-center">
         <h1 class="well">Registration Form</h1>
	    <div class="col-lg-12 well">
	       <div class="row">
				<form action="#" method="POST">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>First Name</label>
								<input type="text" placeholder="Enter First Name Here.." class="form-control" name="first_name" id="first_name">
							</div>
							<div class="col-sm-6 form-group">
								<label>Last Name</label>
								<input type="text" placeholder="Enter Last Name Here.." class="form-control" name="last_name" id="last_name">
							</div>
						</div><br>					
						<div class="form-group">
							<label>Address</label>
                            <input type="text" class="address form-control" name="address" id="address"  placeholder="Enter Current Address" required>
						</div><br>	
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>City</label>
								<input type="text" placeholder="Enter City Name Here.." class="form-control" name="city" id="city">
							</div><br>	
							<div class="col-sm-4 form-group">
								<label>State</label>
								<input type="text" placeholder="Enter State Name Here.." class="form-control" name="state" id="state">
							</div><br>	
							<div class="col-sm-4 form-group">
								<label>Zip</label>
								<input type="text" placeholder="Enter Zip Code Here.." class="form-control" name="pin_code" id="pin_code">
							</div>		
						</div> <br>         
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" placeholder="Enter Phone Number Here.." class="form-control" name="mobile_no" id="mobile_no">
                        </div><br>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="text" placeholder="Enter Email Address Here.." class="form-control" name="email" id="email">
                        </div><br>			
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" placeholder="Enter User Name Here.." class="form-control" name="username" id="username">
                        </div><br>	
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" placeholder="Password" class="form-control" name="password" id="password">
                        </div><br>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" placeholder="Confirm Password"  name="confirm_password" id="confirm_password" class="form-control">
                        </div><br>
					       <button type="submit" name="submit" id="submit" class="btn btn-lg btn-info">Submit</button>					
					</div>
				</form> 
				</div>
	       </div>
           </div>
         </div>
       </div>
     </div>
   </section>


<?php include 'footer.php'?>
<script>
   $(function(){
	$.validator.setDefaults({
		highlight: function(element){
			$(element)
			.closest('.form-group')
			.addClass('has-error')
		},
		unhighlight: function(element){
			$(element)
			.closest('.form-group')
			.removeClass('has-error')
		}
	});
	
	$.validate({
		rules:
		{	
		    password: "required",
			birthDate: "required",
			weight: {
			    required:true,
			    number:true
			},
			height:  {
			    required:true,
			    number:true
			},
			email: {
				required: true,
				email: true
			}
		},
			messages:{			
				email: {
				required: true,
				email: true
			}
		},
				password: {
					required: " Please enter password"
				},
				birthDate: {
					required: " Please enter birthdate"
				},
				email: {
					required: ' Please enter email',
					email: ' Please enter valid email'
				},
				weight: {
					required: " Please enter your weight",
					number: " Only numbers allowed"
				},
				height: {
					required: " Please enter your height",
					number: " Only numbers allowed"
				},
			}
			
	});


</script>