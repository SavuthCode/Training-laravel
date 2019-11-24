<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Homework') }}</title>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<body>

<div class="container">
  
  <div class="panel panel-default">
    <div class="panel-heading">Laravel Crud  
  
    </div>
    <div class="panel-body">
    <div class="well">Detatil Properties</div>
        <form action="{{route('properties.store')}}" method="post">
        @csrf
            <div class="col-md-3">

                <div class="form-group">
                    <label for="usr">Name:</label>
                    <input type="text" class="form-control"" name="name"  value="{{$properties->name}}" disabled="true">
                </div>

                <div class="form-group">
                    <label for="usr">code:</label>
                    <input type="text" class="form-control" id="code" name="code"  disabled="true" value="{{$properties->code}}">
                </div>

                <div class="form-group">
                    <label for="usr">Property_type:</label>
                    <select class="form-control" name="property_type_id"  disabled="true" value="{{$properties->property_type_id}}">
                    
                        @foreach($protype as $pt)
                            <option value="{{$pt->id}}">{{$pt->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                <a href="{{route('properties.index')}}" class="btn btn-primary">Back</a>
            </div>
                
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="usr">rent_price:</label>
                    <input type="text" class="form-control" id="rent_price" name="rent_price"  disabled="true" value="{{$properties->rent_price}}">
                </div>

                <div class="form-group">
                    <label for="usr">sale_price:</label>
                    <input type="text" class="form-control" id="sale_price" name="sale_price"  disabled="true"  value="{{$properties->sale_price}}">
                </div>

                <div class="form-group">
                    <label for="usr">list_price:</label>
                    <input type="text" class="form-control" id="list_price" name="list_price"  disabled="true" value="{{$properties->list_price}}">
                </div>

                

            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="usr">rent_price:</label>
                    <input type="text" class="form-control" id="rent_price" name="created_by"  disabled="true" value="{{$properties->created_by}}">
                </div>

                <div class="form-group">
                    <label for="usr">updated_by:</label>
                    <input type="text" class="form-control" id="updated_by" name="updated_by"  disabled="true" value="{{$properties->updated_by}}">
                </div>

                <div class="form-group">
                    <label for="usr">created_at:</label>
                    <input type="text" class="form-control" id="created_at" name="created_at"  disabled="true" value="{{$properties->created_at}}">
                </div>

                
               
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="usr">Shape:</label>
                    <select class="form-control" name="shape_id"  disabled="true">
                        @foreach($shap as $sp)
                            <option value="{{$sp->id}}">{{$sp->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="usr">sold_price:</label>
                    <input type="text" class="form-control" id="sold_price" name="sold_price"  disabled="true" value="{{$properties->sold_price}}"> 
                </div>

                <div class="form-group">
                    <label for="usr">updated_at:</label>
                    <input type="text" class="form-control" id="updated_at" name="updated_at"  disabled="true" value="{{$properties->updated_at}}">
                </div>

                <div class="form-group">
                    <label for="usr">Status:</label>
                    <select class="form-control" name="shape_id"  disabled="true">
                        @foreach($status as $st)
                            <option value="{{$sp->id}}">{{$st->name}}</option>
                        @endforeach
                    </select>
                </div>

            </div>
        </form>
    </div>
  </div>
</div>
</body>
</html>
