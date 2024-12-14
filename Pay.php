<!DOCTYPE html>
<html>
<head>
<title>Payment Login</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0">

</head>
<style>
.header {
  background-color: #276E22;
  padding: 20px 40px;
}
.header h2 {
  margin: 0;
}
.form {
  padding: 30px 40px; 
}
.form-control {
  margin-bottom: 10px;
  padding-bottom: 20px;
  position: relative;
}
.form-control label {
  display: inline-block;
  margin-bottom: 5px;
}
.form-control input {
  border: 2px solid #f0f0f0;
  border-radius: 4px;
  display: block;
  font-family: inherit;
  font-size: 14px;
  padding: 10px;
  width: 100%;
}
.form-control input:focus {
  outline: 0;
  border-color: #777;
}
.form-control i {
  visibility: hidden;
  position: absolute;
  top: 40px;
  right: 10px;
}
.form-control.success i.fa-check-circle {
  color: #2ecc71;
  visibility: visible;
}
.form-control.error i.fa-exclamation-circle {
  color: #e74c3c;
  visibility: visible;
}
.form-control small {
  color: #e74c3c;
  position: absolute;
  bottom: 0;
  left: 0;
  visibility: hidden;
}
.form-control.error small {
  visibility: visible;
}
.form button {
  background-color: #276E22;
  border: 2px solid #276E22;
  border-radius: 4px;
  color: #fff;
  display: block;
  font-family: inherit;
  font-size: 16px;
  padding: 10px;
  margin-top: 20px;
  width: 100%;
}
@media screen and (max-width: 480px) {
.social-panel-container.visible {
    transform: translateX(0px);
}
.floating-btn {
    right: 10px;
}
}
</style>
<body style="background-image: linear-gradient( to top,rgba(0,0,0,0.5)50%, rgba(0,0,0,0.5)50%),url(images/1.jpg);background-repeat: no-repeat;">
 <div>
  <marquee style="margin-top: 100px; color: white; font-weight: bold; font-size:80px; font-family:monospace;" behavior="alternate" direction="right">PAYMENT</marquee>
</div>
<div style="margin-top:200px; margin-left:350px; margin-right:300px; margin-top:7px; background-color:#FBFBFB; margin-bottom: 100px; width:700px;" class="container">
  <div class="header">
    <h2 style="color:white;">Log In</h2>
    <h4 style="color:white;"><i>Login for Payment</i></h4>
  </div>
    <form  id="form" class="form" method="POST" action="PayLogin.php">
    <div class="form-control">
      <span class="details">User Name:</span>
     <input type="text" name="username" placeholder="Enter your name" id="username" required>
      <i class="fas fa-check-circle"></i>
      <i class="fas fa-exclamation-circle"></i>
      <small>Error message</small>
    </div>
     <div class="form-control">
      <span class="details">Password:</span>
      <input type="password" name="password" placeholder="Enter password" id="password" size="6" required>
      <i class="fas fa-check-circle"></i>
      <i class="fas fa-exclamation-circle"></i>
      <small>Error message</small>
    </div>
    <button style="background-color: #276E22;">Submit</button>
     <div class="text-center">
     <p>Already have an account? <a href="Registration.php">Sign in</a></p>
     </div>
  </form>   
</div>
</body>
</html>
 
