<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Recommendation</title>
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
    <a href="/recommendations">Go Back</a>
    <form method="POST" action="/recommendations/{{ $recommendation->id}}">
        @method('PUT')
        @csrf
        <label for="recommendation"> Recommendation:</label>
        <input type="text" name="recommendation" id="" value="{{ $recommendation->recommendation}}"><br>

        <label for="description">Recommendation Description:</label>
        <textarea name="description" id="" cols="30" rows="5">{{ $recommendation->description}}</textarea><br>

        <label for="price">Sex:</label>
        <input type="text" name="sex" id="" value="{{ $recommendation->sex}}"><br>

        <label for="price">Weight:</label>
        <input type="text" name="weight" id="" value="{{ $recommendation->weight}}"><br>

        <label for="price">Age:</label>
        <input type="number" name="age" id="" value="{{ $recommendation->age}}"><br>

        <label for="price">Motive:</label>
        <input type="text" name="motive" id="" value="{{ $recommendation->motive}}"><br>

        <button>Update</button>
        <button><a href="/recommendations">Cancel</a></button>



        <form action="/recommendations/{{ $recommendation->id}}">
            @csrf
            @method('DELETE')
            <button>Delete</button>
        </form>


    </form>
</body>
</html>