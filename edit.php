<html>
    <head>
        <title>Edit Result</title>
<style>
.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
h1{
    color: indigo;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input,.option,textarea{
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
  background:lightslategray;
}
#gtco-footer{
  background-color: white;
}
        </style>
    </head>
    <body>
        <div class="login-page">
            <div class="form">
<?php
      $con=mysqli_connect("localhost","root","","student_result");
      
          $res=mysqli_query($con,"select * from result");
         $row=mysqli_fetch_row($res);
      ?>

                <h1>Edit Results</h1>
              <form action="update.php" method="POST" class="login-form">
                <input type="text" name="id"  value="<?php echo $row[0]; ?>"><br>
                <input type="text" name="rollno"  value="<?php echo $row[1]; ?>"><br>
		<input type="text" name="webtechnology" value="<?php echo $row[2]; ?>"><br>
		<input type="text" name="cybersecurity" value="<?php echo $row[3]; ?>"><br>
                <input type="text" name="informationtechnology" value="<?php echo $row[4]; ?>"><br>
                <input type="text" name="totalmark" value="<?php echo $row[5]; ?>"><br>
                <input type="text" name="markobtain" value="<?php echo $row[6]; ?>"><br>
                <input type="text" name="result" value="<?php echo $row[7]; ?>"><br>
		<input type="text" name="grade" value="<?php echo $row[8]; ?>"><br>		
                <button>Edit</button>
              </form>
        <?php
         //}
         ?>

            </div>
          </div>
        </div>      
    </body>
</html>