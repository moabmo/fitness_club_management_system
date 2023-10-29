<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booked Packages</title>
</head>
<body>




@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-18">
            <div class="card"> 
                    <div class="card-header"><h1>Booked packages for{{ Auth::user()->name }} </h1></div>
                    
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