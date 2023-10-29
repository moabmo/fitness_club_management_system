<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <style>
        .topnav {
        overflow: hidden;
        background-color: lightgrey;
        font-weight: bold;
        color: black;
        }

        .topnav a {
        float: left;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
        width:25%;
        }

        .topnav a:hover {
        background-color: grey;
        color: blue;
        font-size: 150%;
        
        }

        .topnav a.active {
        background-color: #04AA6D;
        color: black;
        }


        /* Dropdown */
        .dropbtn {
        background-color: #04AA6D;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        }

        .dropdown {
        position: relative;
        display: inline-block;
        }

        .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        }

        .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        }

        .dropdown-content a:hover {background-color: #ddd;}

        .dropdown:hover .dropdown-content {display: block;}

        .dropdown:hover .dropbtn {background-color: #3e8e41;}
    </style>
</head>
<body>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-18">
            <div class="card">
                <div class="topnav">
                <a href="home">Home</a>
                <a href="packages">Packages</a>
                <a href="recommend">Get Recomendtion</a>
            
                <a href="recommendations">About</a>
            
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
                You can be able to view packages, choose your preffered ones and book them <br>
                You can request for recommendations
            </div>
        </div>
    </div>
</div>
@endsection

</body>
</html>