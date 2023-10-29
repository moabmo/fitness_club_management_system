<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <style>
       
    </style>
</head>
<body>

        

@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-18">
            <div class="card">
                </div>
                 <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   

                    {{ __("Homepage") }}
                    Hello {{ Auth::user()->name }}, Welcome to the fitness management system
                </div>
                <img src="/images/1.jpg" alt="">
                <img src="/images/2.webp" alt="">
                <img src="/images/3.webp" alt=""> 
                <img src="/images/5.jpg" alt="">
            </div>
            You can be able to view packages, choose your preffered ones and book them.
            You can request for recommendationsYou can be able to view packages, choose your preffered ones and book them
            You can request for recommendationsYou can be able to view packages, choose your preffered ones and book them
            You can request for recommendations
        </div>
    </div>
</div>

@endsection

</body>
</html>