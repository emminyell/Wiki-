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
    <div class="container d-flex justify-content-between align-items-center">
        <div>
            <h4>Wiki™</h4>
        </div>
        <form class="row g-2 align-items-center">
            <div class="col-auto">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            </div>
            <div class="col-auto">
                <button class="btn btn-outline-warning" type="submit">Search</button>
            </div>
        </form>
        <div class="dropdown">
            <button class="btn btn-warning dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                User
            </button>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="../logique/logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
</header>

