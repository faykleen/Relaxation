<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
 background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
  { /* The image used */
  background-image: src("hotel1.PNG");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
}
</style>
</head>
<body>
<div class="topnav">
<a href="homepagee.html">homepage</a>
  <a href="gallery.html">gallery</a>
  <a href="bookiing.php">booking</a>
    <a href="about us.html">about us</a>
    <a href="Adminlogin.php">Admin</a>

  </div>
  <body>
<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">ROOMS AVAILABLE</button>
<div id="id02" class="modal">
  <form class="modal-content animate" method="POST" action="http://localhost/PROJECT/Pic.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="single.jpg" alt="twin" class="avatar">
      <h4>FIND A ROOM OF YOUR CHOICE</h4>
      <input type="email" required style="width: 50%;text-align: center" placeholder="@gmail.com" name="emaill">
    </div>
    <div class="container">
    <div class="custom-select" style="width:200px; text-align: center">
  <select>
    <option value="0">Select Room:</option>
    <option value="1">king</option>
    <option value="2">duplex</option>
    <option value="3">studio</option>
    <option value="4">twin</option>
    <option value="5">Mountain view</option>
    <option value="6"></option>
  </select>
</div>
<div class="row">
  <div class="column">
  <label for="king"><b>King</b></label>
<label class="container">$600
  <input type="radio" checked="checked" value="master.jpg" name="radio">
  <span class="checkmark"></span>
  <img src="master.jpg" alt="king" class="king">
</label>
</div>
<div class="column">
  <label for="duplex"><b>Duplex</b></label>
<label class="container">$800
  <input type="radio" name="radio" value="suitte.jpg">
  <span class="checkmark"></span>
  <img src="suitte.jpg" alt="duplex" class="duplex">
</label>
</div>
<div class="column">
<label for="studio"><b>studio</b></label>
<label class="container">$500
  <input type="radio" name="radio" value="suite.PNG">
  <span class="checkmark"></span>
  <img src="suite.PNG" alt="studio" class="studio">
</label>
</div>
</div>
<div class="column">
<label for="twin"><b>twin</b></label>
<label class="container">$750
  <input type="radio" name="radio" value="pool.jpg">
  <span class="checkmark"></span>
  <img src="pool.jpg" alt="twin" class="twin">
</label>
</div>
<div class="column">
<label for="Ocean view"><b>Ocean view</b></label>
<label class="container">$1000
  <input type="radio" name="radio" value="skyline.jpg">
  <span class="checkmark"></span>
  <img src="skyline.jpg" alt="Ocean view" class="oceanview">
</label>
</div>
<div>
<button class="button" name="imgbook">Book Now</button>
</div>
</body>
</div>
</div>
</form>
<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<body>
  <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">BOOK NOW</button>
<div id="id01" class="modal">
  <form class="modal-content animate" method="POST" action="http://localhost/PROJECT/productt.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="BED.jpg" alt="Avatar" class="avatar">
      <h4 Style="color:blue">BOOK!BOOK!BOOK</h4>
    </div>
<div class="container">
      <label for="uname"><b>FirstName</b></label>
      <input type="text" placeholder="Enter FirstName" name="fname" required>
 <label for="uname"><b>SecondName</b></label>
      <input type="text" placeholder="Enter SecondName" name="sname" required>
       <label for="uname"><b>Contact</b></label>
      <input type="text" placeholder="Enter Contact" name="contact" required>
 <label for="uname"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>
      <button type="submit" name="book">Book</button>
    </div>
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
<body>
<button onclick="document.getElementById('id03').style.display='block'" style="width:auto;">PAYMENTS</button>
<div id="id03" class="modal">
  <form class="modal-content animate" method="POST" action="http://localhost/PROJECT/pay.php">>
    <div class="imgcontainer">
      <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="double.jpg" alt="Avatar" class="avatar">
    </div>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form method="POST">
      
        <div class="row">
          <div class="col-50">
             <h3>Billing Address</h3>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="emaily" placeholder="ivy@example.com">
            </div>
          </div>
 <p>
                <h4>How it works</h4>
                <p>Lipa na mpesa</p>
                <p>Buy goods and services</p>
         <p>Enter till number 220220</p>
         <p>Enter amount</p>
         <p>Enter mpesa pin</p>
 </p>
  <div class="col-50">
            <h3>Payment</h3>
                    <div>
                 <label>Enter MPESA code: </label>
    <input type="text" name="Mpesacode" placeholder="payment"> 
</div>
       
        <input type="submit" name="pay" value="Pay" class="btn">
      </form>
    </div>
  </div>
</div>

</body>
<script>
// Get the modal
var modal = document.getElementById('id03');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>
</div>

  <br>
  <em>&copy; All rights reserved:CSK Laws&Copy;2020</em>
</br>
</body>
</body>
</body>
</html>