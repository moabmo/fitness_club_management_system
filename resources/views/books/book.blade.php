


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>    
</head>
<style>
    button{
        text-decoration: none;
        color: green;
        background-color: lightgrey;
        border: none;
        border-radius: 50px;
    }
    .a{
        color: grey;
    }
</style>
<body>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-18">
            <div class="card">
                <div class="card-header">{{ __('Packages Available for Booking(View and Buy Package)') }}</div>

                <!-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __("This is the application's landing page after logging in!") }}
                </div> -->
            </div>
        </div>
    



    <table>
    <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
    </thead>    
        <tbody>
            @foreach($packages as $package)
                <tr>
                    <td>{{ $package->id}}</td>
                    <td>{{ $package->packageName}}</td>
                    <td>{{ $package->description}}</td>
                    <td>kes {{ $package->price}}/=</td>
                </tr>
            @endforeach
        </tbody>
    </table> <br>
        <form action="/add" method="post">
        @csrf
            <select name="packageName" id=""> 
                <option>Package Name</option>
            @foreach($packages as $package)
                <option value="{{$package->packageName}}">{{$package->packageName}}</option> 
            @endforeach
            </select>
            <select name="duration" id="">
                <option value="duration">Duration</option>
                <option value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
            </select>
            Name:
            <input type="text" name="name" value="{{ Auth::user()->name }}">
            <button type="submit">Take Package</button>
        </form>
        </div> <br><br><br>
        </div>
        @endsection        
</body>
</html>