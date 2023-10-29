<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin: auto;
            width: 100%;
            color:white;
            /* background-color:#FF5349; */
            background-color:orange;
            font-size:200%;
        }
        form {
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            font-family: sans-serif;
            min-width: 400px;
            background-color: blue;
            padding:1%;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            border-radius: 5px;
        }
        input,textarea{
            width: 80%;
            background-color:orange;
            border-right: 0;
            float:right;
            height:25px;
            border-radius:5px;
            color: black; 
            
        }
        label{
            border-right: 0;
            float:left;
            height:20px;
            border-radius:5px;
            color: white;
            font-size: 70%;
            width:15%;
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
    <a href="/packages">Go Back</a>
    <form method="POST" action="/packages/{{ $package->id}}">
        @method('PUT')
        @csrf
        <label for="packageName">Package Name:</label>
        <input type="text" name="packageName" id="" value="{{ $package->packageName}}"><br>

        <label for="description">Package Description:</label>
        <textarea name="description" id="" cols="30" rows="5">{{ $package->description}}</textarea><br>

        <label for="price">Price:</label>
        <input type="number" name="price" id="" value="{{ $package->price}}"><br>

        <button>Update</button>
        <button><a href="/packages">Cancel</a></button>

        <form action="/packages/{{ $package->id}}">
            @csrf
            @method('DELETE')
            <button>Delete</button>
        </form>


    </form>
</body>
</html>