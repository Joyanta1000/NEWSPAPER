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
                <h3 class="panel-title">Reporters</h3>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Search </button>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="#" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Email" disabled></th>

                        <th><input type="text" class="form-control" placeholder="Code" disabled></th>
                         <th>CV</th>
                        <th><input type="text" class="form-control" placeholder="Phonenumb" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Password" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Status" disabled></th>
                        
                        <th>Edit</th>
                        <th>View</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach($reporters as $n)
                    <tr>
                        <td>{{$n->id}}</td>
                        <td>{{$n->remail}}</td>
                        <td>{{$n->code}}</td>
                         <td>
                            <embed src="{{asset($n->name)}}" width="100" height="70"/>
                        </td>
                        <td>{{$n->phonenumb}}</td>
                        <td>{{$n->password}}</td>
                       <td> <form action="{{URL::to('updates/'.$n->id)}}" method="post">
                        {{csrf_field()}}
                        <select name="status">
                            <option style="background-color: red;" value="{{$n->status}}">{{$n->status}}</option>
                            <option value="Active">Accept</option>
                            <option value="Deactivated">Deactivate</option>
                        </select>
                        <button class="btn-primary" type="submit">Update</button>
                       </form></td>
                        <td><a class="btn btn-primary" href="{{URL::to('/admin/editn/'.$n->id)}}">Edit</a></td>
                        <td><a class="btn btn-primary" href="{{URL::to('/admin/rview/'.$n->id)}}">View</a></td>
                            <td><a class="btn btn-danger" href="{{URL::to('/delete/'.$n->id)}}" onclick="return confirm('Are you sure you want to delete this ?');">Delete</a></td>
                    </tr>
                   @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop