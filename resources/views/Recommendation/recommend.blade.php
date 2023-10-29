<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recommend</title>
    
<style>
    body{
        font-size: 150%;
        color: #FF0613;
    }
    label{
      min-width: 20%; 
      color: #FF0613;
    }
    input, select, option{
        width: 100%;
        border-radius: 5px;
        padding: 0.5%;
    }
    button{
        border-radius:5px;
        color:white;
        padding: 0.5%;
        font-size: 150%;
        background-color: #008000;
        border: none;
    }
    button :hover{
        border-radius:5px;
        color:white;
        padding: 0.5%;
        font-size: 150%;
        background-color: blue;
        border: none;
    }
</style>

</head>
<body>



@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-15">
            <div class="card">
                <div class="card-header">{{ __('Get a Recommendation ...') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="/myrecommendation" method="get">
                      @csrf
                    <!-- Input for gender -->
                        <label for="">What's your Gender?</label> <br>
                        <input type="text" name="sex" id="" required><br>

                    <!-- User to select their age bracket from here -->
                        <label for="">What's your age bracket?</label>
                        <select name="age" id="">
                            <option value=""></option>
                            <option value="5-9">1-5 Years old</option>
                            <option value="9-12">5-12 Years old</option>
                            <option value="12-16">12-16 Years old</option>
                            <option value="16-18">16-18 Years old</option>
                            <option value="18-35">18-35 Years old</option>
                            <option value="16-18">35-65 Years old</option>
                            <option value="65">65 Years old and above</option>
                        </select>

                    <!-- User to select the intensity of the training that they want to undertake -->
                        <label for="">What's the intensity of the training that you want?</label> <br>
                        <input type="text" name="intensity" id=""><br>

                        <br><br>


                        <button>Get Recommendation</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
    
</body>
</html>

