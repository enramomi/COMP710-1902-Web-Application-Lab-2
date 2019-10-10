@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">

                    @foreach($booking as $bookings)
                    <ul>
                    <li>Name :{{$bookings->name}}</li>
                    <li>Email:{{$bookings->email}}</li> 
                    <li>Number:{{$bookings->number}}</li> 
                    <li>Address:{{$bookings->address}}</li> 
                    </ul> 
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
