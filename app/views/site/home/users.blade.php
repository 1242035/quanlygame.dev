@extends('layouts.site')
@section('content')
    @if(isset($users) && count($users) >0  )
        @foreach($users as $user)
            <p><div>{{$user->email}}</div>
            <div>{{$user->name}}</div></p>
        @endforeach
    @else
         <p>Nothing</p>
    @endif
@stop