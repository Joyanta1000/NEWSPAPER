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
                <h3 class="panel-title">Reporter</h3>
                <div class="pull-right">
                   
                </div>
            </div>
            <table class="table">
             
                <tbody>
                  
                    
                        <i style="text-decoration-line: none;">ID : {{$reporters->id}}</i><br>
                        <i style="text-decoration-line: none;" >Reporters Email : {{$reporters->remail}}</i><br>
                        <i style="text-decoration-line: none;" >Reporters Code : {{$reporters->code}}</i><br>
                        
                        <i style="text-decoration-line: none;" > Phone-Number : {{$reporters->phonenumb}}</i><br>
                        <i style="text-decoration-line: none;" > Password : {{$reporters->password}}</i><br>
                        <i style="text-decoration-line: none;" > Password : {{$reporters->status}}</i><br>
                       
                        <li> CV : 
                            <embed src="{{asset($reporters->name)}}" width="500" height="300"/>
                        </li>
                    
                  
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop