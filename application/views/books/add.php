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
    <title>Add</title>
  </head>
  <style media="screen">
    #addBook{
      width: 450px;
      margin: 0 auto;
      border: 1px solid black;
      padding:60px;
    }
  </style>
  <body>
    <div class="container">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
            </button>
              <a class="navbar-brand" href="#">Add a New Book title and a Review</a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href='/books/destroy'>Log Out</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href='/'>Home</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    <!-- <h2>Add a New Book title and a Review</h2> -->
    <div class="'col-md-6'">
    <form id="addBook" class="" action="books/add" method="post">
      <label for="">Book Title</label>
      <input type="text" name="title" value=""><br>
      <label for="">Author</label><br>
      <label>Choose from the List</label>
      <select class="" name="author">
        <option>Stephen King</option>
        <option>R L Stein</option>
        <option>RC Sproul</option>
      </select><br>
      <label for="">Or add a new author:</label>
      <input type="text" name="new_author" value=""><br>
      <label for="">Review:</label><br>
      <textarea name="review" rows="8" cols="40"></textarea><br>
      <label for="">Rating:</label>
      <select class="" name="">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select><br><br>
      <input type="submit" name="add" value="Add Book and Review"><br>
    </form>
  </div><br>

  </body>
</html>
