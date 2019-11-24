@extends('layouts.app')


@section('content')

<div class="container">
  
  <div class="panel panel-default">
    <div class="panel-heading">Laravel Crud  
    <a href="{{route('properties.create')}}" class="btn btn-primary pull-right">Add Recored</a>
    </div>
    <div class="panel-body">
    <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Name</th>
                    <th>rent_price</th>
                    <th>sale_price</th>
                    <th>list_price</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($properties as $pro)
                <tr>
                    <td>{{$pro->id}}</td>
                    <td>{{$pro->name}}</td>
                    <td>{{$pro->rent_price}}</td>
                    <td>{{$pro->sale_price}}</td>
                    <td>{{$pro->list_price}}</td>
                   
                    <td >
                    @if($pro->propertyStatuse->name=="Publiced")
                        <span class="label label-danger">Publiced</span>
                    @else
                        <span class="label label-warning">Pandding</span>
                    @endif
                    </td>
                    <td>
                        <a href="{{route('properties.show',$pro->id)}}" class="btn btn-info"><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="#" class="btn btn-danger"><i class="glyphicon glyphicon-edit"></i></a>
                        <form action="{{ route('properties.destroy', $pro->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
  </div>
</div>


@endsection
