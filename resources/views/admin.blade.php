<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <style>
            .card1{
            background-color: red;
            color: white;
            height: 200px;
            padding: 1%;
            width: 32.3%;
            border-radius: 10px;
            float: left;
            margin-right: 1%;
            margin-bottom: 1%;
        }       
    </style>
</head>
<body>

        

@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card"> 
                <div class="card-header"><h4>Admin Dashboard</h4>
                <hr>
                <div class="card1">
                    <br><br><br><br><br><br><br> Packages
                </div>
                <div class="card1">
                    <br><br><br><br><br><br><br> Packages
                </div>
                <div class="card1">
                    <br><br><br><br><br><br><br> Packages
                </div>
                <hr>
                <div class="card1">
                    <br><br><br><br><br><br><br> Packages
                </div>
                <div class="card1">
                    <br><br><br><br><br><br><br> Packages
                </div>
                <div class="card1">
                    <br><br><br><br><br><br><br> Packages
                </div>
                </div>
                    
            </div>
    </div>
        </div>
        </div>

@endsection

</body>
</html>