@extends('layouts.app')








@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!<li class="nav-item"><a href="#" onclick="window.location='{{ url("qr") }}'" class="btn btn-outline-light my-3 my-sm-0 ml-lg-3">GENERATE QR HERE</a></li>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
