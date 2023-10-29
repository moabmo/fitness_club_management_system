<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recommendation Homepage</title>
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
        tr,a{
            background-color:grey;
            color: white;
            border-radius: 5px;
            transition: background-color 600ms;
            decoration: none;
        }
        tr:hover, a:hover{
            background-color:orange;
            color: black;
            border-radius: 5px;
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





<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            
                
            

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            This is the recommendation's landing page    

                

               
            </div>
        </div>

    <table>
    
    <thead>
        <a href="/recommendations/create">Add Recommendation</a>
            <th>Name</th>
            <th>Description</th>
            <th>Sex</th>
            <th>Weight</th>
            <th>Age</th>
            <th>Intensity</th>
    </thead>    
        <tbody>
            @foreach($recommendations as $recommendation)
                <tr>
                    <td><a href="/recommendations/{{ $recommendation->id}}/edit">{{ $recommendation->name}}</td>
                    <td>{{ $recommendation->description}}</td>
                    <td> {{ $recommendation->sex}}</td>
                    <td> {{ $recommendation->weight}}</td>
                    <td> {{ $recommendation->age}} years old</td>
                    <td> {{ $recommendation->intensity}}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
        
    
  
</body>
</html>