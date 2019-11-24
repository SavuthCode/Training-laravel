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
      <li><a href="#">Product History</a></li>
      <li><a href="#">Status</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
@if($mgs=Session::get('success'))
  <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> {{$mgs}}
  </div>
@endif
<a href="{{route('products.create')}}" class="btn btn-primary">Add New</a> </br></br>
<div class="panel panel-default">
  <div class="panel-heading">Panel Heading</div>
  <div class="panel-body">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Name</th>
        <th>rent_price</th>
        <th>list_price</th>
        <th>sale_price</th>
        <th>sold_price</th>
        <th>profile</th>
        <th>galleries</th>
        <th>created_by</th>
        <th>updated</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach($product as $pro)
      <tr>
        <td>{{$pro->name}}</td>
        <td>{{$pro->rent_price}}</td>
        <td>{{$pro->list_price}}</td>
        <td>{{$pro->sale_price}}</td>
        <td>{{$pro->sold_price}}</td>
        <td>{{$pro->profile}}</td>
        <td><{{$pro->galleries}}</td>
        <td>{{$pro->created_by}}</td>
        <td>{{$pro->updated_by}}</td>
        <td>
            <a href="{{route('products.edit',$pro->id)}}"><i class="glyphicon glyphicon-edit" class="btn btn-primary"></i>
            <a href="{{route('products.destroy',$pro->id)}}" onclick="event.preventDefault();document.getElementById('product_destroy').submit();"><i class="glyphicon glyphicon-trash"></i></a>

                  <form action="{{route('products.destroy',$pro->id)}}" id="product_destroy" method="post">
                    @csrf

                    @method('DELETE')
                    <input type="hidden" name="id" value="{{$pro->id}}">
                  </form>
            </td>
        </td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
  {{$product->links()}}
</div>
  </div>
</div>

</body>
</html>
