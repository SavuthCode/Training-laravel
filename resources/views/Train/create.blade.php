<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
<div class="panel panel-default">
  <div class="panel-heading">Product Form</div>
  <div class="panel-body">
      <form action="{{route('products.store')}}" method="post">
      @csrf
      <div class="form-group">
        <label for="text">Name:</label>
        <input type="text" class="form-control" name="name">
      </div>
      <div class="form-group">
        <label for="text">Ren_price:</label>
        <input type="text" class="form-control" name="rent_price">
      </div>
      <div class="form-group">
        <label for="pwd">list_price:</label>
        <input type="text" class="form-control" name="list_price">
      </div>

      <div class="form-group">
        <label for="pwd">sale_price:</label>
        <input type="text" class="form-control" id="pwd" name="sale_price">
      </div>

      <div class="form-group">
        <label for="pwd">sold_price:</label>
        <input type="text" class="form-control" id="pwd" name="sold_price">
      </div>

      <div class="form-group">
        <label for="pwd">profile:</label>
        <input type="text" class="form-control" name="profile">
      </div>

      <div class="form-group">
        <label for="pwd">galleries:</label>
        <input type="text" class="form-control" name="galleries">
      </div>

      <div class="form-group">
        <label for="pwd">created_by:</label>
        <input type="text" class="form-control" name="created_by">
      </div>

      <div class="form-group">
        <label for="pwd">updated_by:</label>
        <input type="text" class="form-control" name="updated_by">
      </div>
      
      <button type="submit" class="btn btn-primary">Submit</button>
      <button type="button" class="btn btn-primary">Cancel</button>
    </form>
  </div>
</div>

</div>

</body>
</html>
