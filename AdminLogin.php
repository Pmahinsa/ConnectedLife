<!DOCTYPE html>
<html>
<head>
<title>Admin Log in</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0">

</head>
<style>
.header {
  background-color: blue;
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
  <marquee style="margin-top: 100px; color: white; font-weight: bold; font-size:80px; font-family:monospace;" behavior="alternate" direction="right">ADMIN</marquee>
</div>
<div style="margin-top:200px; margin-left:350px; margin-right:300px; margin-top:7px; background-color:#FBFBFB; margin-bottom: 100px; width:700px;" class="container">
  <div class="header">
    <h2 style="color:white;">Log in</h2>
  </div>
    <form  id="form" class="form" method="POST" action="AdminSave.php">
    <div class="form-control">
        <span class="details">Email:</span>
      <input type="text" name="email" placeholder="Enter email" id="email" required>
      <i class="fas fa-check-circle"></i>
      <i class="fas fa-exclamation-circle"></i>
      <small>Error message</small>
    </div>
     <div class="form-control">
      <span class="details">Admin ID:</span>
     <input type="text" name="adminid" placeholder="Enter your id" id="adminid" required>
      <i class="fas fa-check-circle"></i>
      <i class="fas fa-exclamation-circle"></i>
      <small>Error message</small>
    </div>
    <button style="background-color: blue;">Submit</button>
     <div class="text-center">
     </div>
  </form>   
</div>
</body>
</html>
 