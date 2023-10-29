<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Book</title>
    <style>
        body{
            margin: auto;
            width: 100%;
            color:black;
            background-color:#FF5349;
            font-size:200%;
        }
        table {
            /* border-collapse: collapse; */
            /* margin: 25px 0; */
            font-size: 0.9em;
            font-family: sans-serif;
            width: 100%;
            background-color:white;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }
        th{
            background-color:yellow;
            color: black;
            border-radius: 5px;
        }
        tr{
            background-color:grey;
            color: white;
            border-radius: 5px;
            transition: background-color 600ms;
            decoration: none;
            font-size:150%;
        }
        a, {
            text-decoration:none;
            color:white;
            paddi
        }
        tr:nth-child(even) {
            background: black;
        }
        tr:hover, a:hover{
            background-color:lightblue;
            color: black;
            border-radius: 5px;
            font-size:200%;
            font-weight: bold;
        }
        thead{
            background-color:yellow;
        }
        button{
            background-color:yellow;
            border-radius:5px;
            padding:2px;
            color:black;
            float:center;
        }
    </style>
</head>
<body>




@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-18">
            <div class="card">
                <center>
                    <div class="card-header"><h1>Packages for you: {{ Auth::user()->name }} </h1></div>
                    </center>

                <!-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __("This is the application's landing page after logging in!") }}
                </div> -->
            </div>
    <table>
    <thead>
            <th>Code</th>
            <th>Name</th>
            <th>Duration</th>
    </thead>    
        <tbody>
            
            @foreach($books as $book)
                <tr>
                    <td>{{ $book->id}}</a></td>
                    <td>{{ $book->packageName}}</td>
                    <td>{{ $book->duration}}</td>
                </tr>
                
            @endforeach
        </tbody>
    </table>
    </div>
        </div>
        </div>
        @endsection
        
    
  
</body>
</html>