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
            width: 80%;
            color:black;
            background-color:#FF5349;
            font-size:200%;
            padding: 2%;
        }
        table {
            /* border-collapse: collapse; */
            /* margin: 25px 0; */
            font-size: 0.9em;
            font-family: sans-serif;
            width: 100%;
            background-color:green;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            border-radius: 5px;
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
                Based on that we think you should try the following physical exercises  
            </div>
        </div>

    <table>
    
    <thead>
        
            <th>Recommendation</th>
            <th>Description</th>
            <th>Motive</th>
    </thead>    
        <tbody>
            @foreach($recommendations as $recommendation)
                <tr>
                    <td>{{ $recommendation->recommendation}}</td>
                    <td>{{ $recommendation->description}}</td>
                    <td> {{ $recommendation->motive}}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
        
    
  
</body>
</html>