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
        <form action="{{route('properties.store')}}" method="post">
        @csrf
            <div class="col-md-6">

                <div class="form-group">
                    <label for="usr">Name:</label>
                    <input type="text" class="form-control"" name="name">
                </div>

                <div class="form-group">
                    <label for="usr">code:</label>
                    <input type="text" class="form-control" id="code" name="code">
                </div>

                <div class="form-group">
                    <label for="usr">Property_type:</label>
                    <input type="text" name="po_id" class="form-control">
                    <!-- <select class="form-control" name="po_id">
                    
                        @foreach($protype as $pt)
                            <option value="{{$pt->id}}">{{$pt->name}}</option>
                        @endforeach
                    </select> -->
                </div>

                <div class="form-group">
                    <label for="usr">Propery_status:</label>
                    <input type="text" name="prostatus_id" class="form-control">
                    <!-- <select class="form-control" name="prostatus_id">
      
                        @foreach($status as $st)
                            <option value="{{$st->id}}">{{$st->name}}</option>
                        @endforeach
                    </select> -->
                </div>

                <div class="form-group">
                    <label for="usr">Zone:</label>
                    <select class="form-control" name="zone_id">
                        <!-- <option>=======Select status=======</option> -->
                        @foreach($zone as $zones)
                            <option value="{{$zones->id}}">{{$zones->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="usr">Shape:</label>
                    <select class="form-control" name="shape_id">
                        @foreach($shap as $sp)
                            <option value="{{$sp->id}}">{{$sp->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="usr">rent_price:</label>
                    <input type="text" class="form-control" id="rent_price" name="rent_price">
                </div>

                <div class="form-group">
                    <label for="usr">sale_price:</label>
                    <input type="text" class="form-control" id="sale_price" name="sale_price">
                </div>

                <div class="form-group">
                    <label for="usr">list_price:</label>
                    <input type="text" class="form-control" id="list_price" name="list_price">
                </div>

                <div class="form-group">
                    <label for="usr">sold_price:</label>
                    <input type="text" class="form-control" id="sold_price" name="sold_price">
                </div>

                <div class="form-group">
                    <label for="usr">created_by:</label>
                    <input type="text" class="form-control" id="created_by" name="created_by">
                </div>

                <div class="form-group">
                    <label for="usr">updated_by:</label>
                    <input type="text" class="form-control" id="updated_by" name="updated_by">
                </div>
            </div>

            <div class="form-group">
                <input type="submit" value="Save" class="btn btn-primary">
                <input type="button" value="Back" class="btn btn-default">
            </div>
            
        </form>
    </div>
  </div>
</div>
</body>
</html>
