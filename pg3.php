<!DOCTYPE html>

<html>


<head>

 <meta charset="utf-8">
   <title> Website </title>
  <link rel= "stylesheet" href="c1.css">
   
   <script>


   function myFunc(x) {
    x.style.background="pink";
   }

   function myFuncLoad(){
   alert("Page is loaded");
   }


   function submetform(){
    return confirm("Do you really want to submit the form?");

   }
  
    
   function resetform(){
    return confirm("Do you really want to reset the form?");

   }
  

   </script>


  <style>

   a { color : white;
        text-decoration: none;}
   a:hover{
       text-decoration: underline;}

   </style>

</head>

<body onload="myFuncLoad()">
  <header>
    <div class="wrapper">
        <div class="logo">
       
       </div>
       
       <ul class="nav-area">
        <li><a  href="index2.html">Home</a></li>
        <li><a  href="pg1.html">About</a></li>
        <li><a  href="pg2.html">Services</a></li>
        <li><a class="active" href="pg3.php">Contact</a></li>
      </ul>
     </div>

<div class="logo img">
      <img src="data:image/jpeg;base64,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" width="100" height = "90">
      
      </div>
       
    <div class="welcome-text">
      <p> Kindly fill out the contact from below and we will get back to you as soon as we can THANKS!</p>
       

        <br></br>
     
   <!------------------------------------------------Form------------------------------------------------>  
   
      <form method= "post" onsubmit="return submetform(this);" onreset="return resetform(this);">


<p><label>FirstName:
<input name = "name" type = "text" size = "25" id="input" onfocus="this.value=''"value="enter your First name" onblur="myFunc(this)">
</label>

<label>LastName:
<input name = "name1" type = "text" size = "25" id="input" onfocus="this.value=''"value="enter your Last name" onblur="myFunc(this)">
</label></p><br>

<p><label>E-mail:
<input name = "email" type = "text" size = "24" id="input" onfocus="this.value=''"value="enter your Email" onblur="myFunc(this)">
</label>
         
<label> Phone:
<input name = "phone" type = "text" size = "24" id="input" onfocus="this.value=''"value="enter your Phone number" onblur="myFunc(this)">
</label></p><br>
         
<p><label>Message:<br>
<textarea name = "Message" rows = "4" cols = "36" id="inputt" onfocus="this.value=''"value="enter note here" onblur="myFunc(this)">Enter address here.</textarea>
</label></p><br>


<p>
<strong>Country:</strong>


<input name = "cc" type = "checkbox"
          value = "KSA">
 <label for= "cc">KSA</label>

         <input name = "cc" type = "checkbox"
          value = "OTHER">
        <label for= "cc">OTHER</label>  

       

       </p><br>
 
 
         
         
  <p>
<strong>How would you like to contact with you?</strong><br>
<label>Phone
<input name = "ph" type = "radio"
          value = "phone"></label>
 
 <label>E-mail
<input name = "ph" type = "radio"
          value = "E-mail" checked></label>
 
  </p><br>
 
  <p>
     <label>Select subject:
 <select name = "sub">
 <option selected>Choose one</option>
 <option>Billing question</option>
 <option>Book the course</option>
 <option>Other</option>

 </select>
</p><br>

<p>
<input name="sub" type = "submit" value = "Submit">
<input type = "reset" value = "Clear">
 </p>

   </form>
   </div>
   
  </header>
  
  
   <!-------------------------------------------------php------------------------------------------->
   <?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "DBase";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$fname = $_POST['name'];
$lname = $_POST['name1'];
$emailAdd = $_POST['email'];
$phonenumber = $_POST['phone'];


if(isset($_POST['sub'])){
	if(empty($_POST['email'])){
		echo 'an email is required<br />';
   }else{
		$emaill = $_POST['email'];
		if(!filter_var($emaill, FILTER_VALIDATE_EMAIL)){
			echo 'email must be a valid email';
		}
		else{
				$sql = "INSERT INTO informaion(firstname, lastname, email, phone) VALUES ( '$fname', '$lname', '$emailAdd','$phonenumber')";
		$run=mysqli_query($conn,$sql) or die(mysqli_error());
		}
	}
	
}

	
	$sqll = "SELECT email,firstname, lastname, phone FROM informaion";
$result = $conn->query($sqll);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> email: ". $row["email"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . " - phone: ". $row["phone"]."<br>";
    }
} else {
    echo "0 results";
}

	
$conn->close();
?>
<!--------------------------------------------------------end php------------------------------------------------------>
   
<div class="sty">
 
                 <p style="margin: 12px 0px ; color: #ffffff; font-size: 30px;"> WAAD-SAMAHER</p><hr>
             
                   <p style="margin: 12px 0px ; color: #ffffff;">
                     <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQUxMF6u4vi9X-oYzh1GI_4uUegogdnPIDX2w&usqp=CAU"
                       style="max-width:18px; vertical-align: middle; margin-right: 5px; "/> 67555577
                  </p>  



                 <p style="margin: 12px 0px ; color: #ffffff; ">
                       <a href="mailto:wjambi0004@stu.kau.edu.sa ">                                      
                     <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT3EFUySGN23Pg8mRuzZl59AHPWV5HvKbJBvQ&usqp=CAU"
                       style="max-width:18px; vertical-align: middle; margin-right: 5px; "/> wjambi0004@stu.kau.edu.sa
                 </p>  


                 <p style="margin: 12px 0px ; color: #ffffff;">
                     <a href="
https://twitter.com/dawratkw?s=21">                                          
                     <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSZE04GAOT6LgF5lVla1uWH3ayJ8zGBKlIE1A&usqp=CAU"
                       style="max-width:18px;  vertical-align: middle; margin-right: 5px; "/> @Dawratkw
                  </p>  


                 


                 
       
       

   </div>

</body>
 


</html>