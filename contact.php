

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PROJECT</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">
    <div class=" sidebar sidebarGo">
      <nav>
        <ul>
          <li><a href="/">Home</li></a>
          <li><a href="/services.html">Services</li></a>
          <li><a href="/">Music</li></a>
          <li><a href="/">GAMES</li></a>
          <li><a href="/cart.html">Shopping</a></li>
          <li><a href="/contact.html">Contact Us</li></a>
        </ul>
        <div class="socialmedia">
          <div class="simg">
            <a href=""><img src="socialmf.png" alt="" height="20px" width="20"></a>
            <a href=""> <img src="socialmi.png" alt="" height="20px" width="20"></a>
            <a href=""> <img src="socialmt.png" alt="" height="20px" width="20"></a>
            <a href=""> <img src="socialml.png" alt="" height="20px" width="20"></a>
          </div>
          <div class="ins">
            <p style="font-size:9px;">saching852002@gmail.com</p>
            <p style="font-size:15px;">&copy; ProfeSSionalZ</p>
          </div>
        </div>
      </nav>
    </div>
    <div class="main">
      <div class="hamburger">
        <img class="open" src="align-justify.png" alt="" width="23">
        <img class="cross" src="close_image.webp" alt="" width="23">
      </div>
    </div>
      <div class="contactform">
        <h1>Contact Us for Your Game/Web Development </h1>
        <form action="dbconnection.php" method="post">
          <div class="mb-3">
            <label for="clientphone" class="form-label">Name:</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="name">
          </div>
          <div class="mb-3">
            <label for="clientemail1" class="form-label">Email address:</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
            <div id="emailHelp" class="form-text">We'll never share your email & phone no.with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="clientphone" class="form-label">Phone No.:</label>
            <input type="number" class="form-control" id="exampleInputPassword1" name="phno">
          </div>
          <div class="mb-3">
            <label for="clientphone" class="form-label">Website/Game Detail:</label>
            <textarea id="w3review" name="w3review" rows="4" cols="10" name="detail">
                        </textarea>
          </div>
          <div class="mb-3" id="form-check">
            <input type="checkbox" class="form-check-input" id="isclient" name="fees">
            <label class="form-check-label" for="isclient">I paid the advance fees</label>
          </div>
          <div class="btn-smt">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
        <div class="qrinfo">
          <img src="qr.jpeg" alt="" height="250px" width="250px" style="border: 2px solid; border-radius: 10px;">
          <div class="upi" style="font-size: larger; color: blueviolet; margin-left: 20px;">UPI: 9305680208@ybl</div>
          <div class="upi" style="font-size: larger; color: blueviolet; margin-left: 50px;">SCAN & PAY</div>
        </div>
        <div class="map">
          <iframe class="mapinfo"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1789.9783027466287!2d76.57479381066808!3d30.76957593302688!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ffb140bd63e07%3A0x68591e334d17a988!2sChandigarh%20University!5e0!3m2!1sen!2sin!4v1650801626347!5m2!1sen!2sin"
            width="250px" height="250px" style="border: 2px solid;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
          <p class="upi" style="font-size: larger; color: blueviolet; margin-left: 7px; margin-top: 15px;">CHANDIGARH
            UNIVERSITY</p>
          <p class="upi" style="font-size: larger; color: blueviolet; margin-left: 40px; margin-top: 15PX;">MOHALI,
            PUNJAB</p>
        </div>
      </div>
  <script src="script.js"></script>
</body>

</html>