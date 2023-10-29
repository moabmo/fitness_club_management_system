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
            text-decoration: none;
        }
    </style>
</head>
<body>





<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            
                
            

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <!-- This is the system's landing page     -->

                

               
            </div>
        </div>


















    <table>
    
    <thead>
        <a href="/packages/create">Add Package</a>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th></th>
    </thead>    
        <tbody>
            @foreach($packages as $package)
                <tr>
                    <td>{{ $package->packageName}}</td>
                    <td>{{ $package->description}}</td>
                    <td>kes {{ $package->price}}/=</td>
                    <td><a href="/packages/{{ $package->id}}/edit">Edit</td>
                </tr>
            @endforeach
        </tbody>
    </table>
        
    
  
</body>
</html>