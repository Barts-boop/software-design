<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;
      font-size: 25px;
}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 10px 15px;
  margin: 8px 0;
  display: inline-block;
  border: 5px solid #ccc;
  box-sizing: border-box;
  font-size: 15px; 
}

button {
  background-color: #04AA6D;
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

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 250px;
  border-radius: 250px;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

body {
            background-image: url('background.jpg'); /* Replace 'path/to/your/image.jpg' with the actual path to your image file */
            background-size: cover; /* This property ensures the background image covers the whole body */
            background-repeat: no-repeat; /* Prevents the image from repeating */
            height: 100vh; /* Ensures the background image covers the full height of the viewport */
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
}
</style>
</head>
<body>

<h2><center>Login Form</center></h2>

<form action="barts admin page.php" method="post">
  <div class="imgcontainer">
    <img src="login pic.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
  <center><label for="uname"><b>Username</b></label></center>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <center><label for="psw"><b>Password</b></label></center>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>
</html>
