<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/sunny/jquery-ui.css">
    <script type ="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>​
    <script src ="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript"></script>
    <title>Books Review</title>
  </head>
  <style media="screen">

  body{
    width: 600px;
    margin: 0 auto;
  }
    #register {
      width: 200px;
      height: 300px;
    }
    #login {
      width: 200px;
      height: 300px;
    }
    .row{
      display: inline-block;
    }
  </style>
  <body>
<?php     if($this->session->flashdata("registration_errors")){
          echo $this->session->flashdata("registration_errors");
}?>​
    <div class="container">
      <h2>Welcome</h2>



      <div class='col-md-4'>
        <fieldset id="register">
          <legend>Register</legend>
          <form class="" action="/books/register" method="post">
            <label for="name">Name:</label><br>
            <input type="text" name="name" value=""><br>
            <label for="name">Alias:</label><br>
            <input type="text" name="alias" value=""><br>
            <label for="name">Email:</label><br>
            <input type="email" name="email" value=""><br>
            <label for="name">Password:</label><br>
            <input type="password" name="password" value=""><br>
            <label for="name">Confirm PW:</label><br>
            <input type="password" name="confirm" value=""><br><br>
            <input type="submit" value="Register">
          </form>
        </fieldset>
      </div>

<?=($this->session->flashdata('login_errors') != false) ?
            $this->session->flashdata('login_errors') : "";?>​

  <div class='col-md-'>
        <fieldset id ='login'>
          <legend>Login</legend>
          <form class="" action="/books/login" method="post">
            <label for="name">Email:</label><br>
            <input type="password" name="email" value=""><br>
            <label for="name">Password:</label><br>
            <input type="password" name="password" value=""><br><br>
            <input type="submit" value="login">
          </form>
        </fieldset>
      </div>





    </div>
  </body>
</html>
