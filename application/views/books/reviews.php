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
    <title>Books</title>
  </head>
  <style media="screen">

  .container{
    width: 900px;
    margin: 0 auto;
  }
    .book_titles {
      width:300px;
      height:300px;
      border: 1px solid black;
      overflow-y: scroll;
      padding: 10px;
      background-color: white;
    }
  </style>
  <body>
    <div class="container">
      <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
      </button>
      <a class="navbar-brand" href="">Welcome <?= $user_session["name"]; ?>!</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
      <li><a href='/books/destroy'>Log Out</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
        <li><a href='/books/add'>Add Book and Review</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->




    <div class='col-md-6'>
    <h2>Recent Book Reviews:</h2>
<?php
		$reviews = $this->session->userdata('all_data');

    foreach($reviews as $review)
    {?>
     <h3><a href=''><?=$review['title'];?></a></h3>
     <p>Rating: <?=$review['ratings'];?></p>
     <p>Comments: <?="<a href=''>".$review['name']."</a> says: ". $review['comments'];?></p>
     <p>Posted on: <?=$review['created_at'];?></p>
<?php }?>
    </div>

    <div class='col-md-6'>
    <h2>Other Books with Reviews:</h2>
    <div class="book_titles">
<?php
      foreach($reviews as $review){
        echo "<a href=''>".$review['title']."</a>";
      }
?>
          </div><br>
        </div>
      </nav>
    </div>
  </body>
</html>
