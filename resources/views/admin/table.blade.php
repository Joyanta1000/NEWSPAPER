@extends('admin.default.default')
@section('content')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{asset('table/style.css')}}">
<script type="text/javascript" src="{{asset('table/jquery.js')}}"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    
   
    <div class="row">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">News</h3>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Search </button>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="#" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Title" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Details" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Date" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Types" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Subtypes" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Image" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Image(2)" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Details(2)" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Reporter" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Reporters Code" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Reporters Email" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Status" disabled></th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach($papers as $n)
                    <tr>
                        <td>{{$n->id}}</td>
                        <td>{{$n->title}}</td>
                        <td>{{$n->details}}</td>
                        <td>{{$n->date}}</td>
                        <td>{{$n->types}}</td>
                        <td>{{$n->subtypes}}</td>
                        <td>
                            <img src="{{asset($n->name)}}" width="100" height="70">
                        </td>
                        <td>
                            <img src="{{asset($n->name1)}}" width="100" height="70">
                        </td>

                        <td>{{$n->details1}}</td>
                        <td>{{$n->reporter}}</td>
                        <td>{{$n->rcode}}</td>
                        <td>{{$n->repemail}}</td>
                        <td>{{$n->status}}</td>
                        <td><a class="btn btn-primary" href="{{URL::to('/admin/editn/'.$n->id)}}">Edit</a></td>
                            <td><a class="btn btn-danger" href="{{URL::to('/delete/'.$n->id)}}" onclick="return confirm('Are you sure you want to delete this ?');">Delete</a></td>
                    </tr>
                   @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop