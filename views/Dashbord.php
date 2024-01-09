<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; 
        }

        header {
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1); 
        }

        .container-fluid {
            height: 95vh; 
        }

        .aside {
            height: 95vh;
        }
       aside li a{
        text-decoration:none;
         color:white
       }
       aside li{ 
        padding:10px;
        margin-bottom:10px;
        border-radius:5px;
        transition:.3s;
       }
       aside li:hover{
       
        background-color:white;
       }
        aside li:hover a{
            color:black;
        }
       header {
            background-color: #ffffff; 
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1); 
        }
    </style>
</head>

<body>

    <header class="bg-light p-2">
        <?php  
    include '../views/header.php'; 
    ?>
    </header>
    
    <div class="container-fluid h-custom">
        <aside class="col-md-2 bg-dark text-light p-4 aside">
            <ul class="list-unstyled">
                <li><h5>dashboard</h5></li>
                <li><a href="">users</a></li>
                <li><a href="">requests</a></li>
                <li><a href="">Tags</a></li>
                <li><a href="">Wikis</a></li>
            </ul>
        </aside>
      
       