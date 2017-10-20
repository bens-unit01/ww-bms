
@extends('layouts.default')
@section('content')
 

@if(count($messages) > 0)
   <p> -------------</p> <br>
  @foreach( $messages as $message)
   <ul class='list-group'>
     <li class='list-group-item' > Name: {{$message->name}}</li>
     <li class='list-group-item' > Email: {{$message->email}}</li>
     <li class='list-group-item' > Message: {{$message->message}}</li>
   </ul>
  @endforeach
@endif

@stop



