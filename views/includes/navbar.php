<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wikis</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
    /* Custom styles for transparent navbar */
    .navbar-custom {
        background-color: #110f16;
        max-width: 100%;
    }
    

    /* Custom styles for circular buttons */
    .btn-circle {
        border-radius: 50%;
    }

    /* Custom styles for elegant search bar */
    .search-form {
        display: flex;
        align-items: center;
    }

    .search-input {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }

    .search-button {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }
    span{
        color:#ffc107;
    }
</style>

<header>
    <div class="container-fluid position-absolute shadow">
        <div navbar-custom>
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom py-3 py-lg-0 px-0 px-lg-5">
            <a class="navbar-brand me-2" href="#">
            <p>WI<span>KI</span></p>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav font-weight-bold mx-auto py-0">
                    <a href="./index.php?route=index.php" class="nav-item nav-link active me-4">Home</a>
                    <a href="./index.php?route=profile" class="nav-item nav-link active me-4">Profile</a>
                    <a href="index.html" class="nav-item nav-link active me-4">All Wikis</a>
                    <a href="index.html" class="nav-item nav-link active me-4">Categories</a>
                    <a href="index.html" class="nav-item nav-link active me-4">Tags</a>
                    <form class="search-form d-flex">
                        <input class="form-control me-2 search-input" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-warning search-button" type="submit">Search</button>
                    </form>
                </div>
                <a href="../index.php?route=Signup" class=" text-light btn btn-circle">Sign Up</a>
                <a href="../index.php?route=Login" class="btn btn-warning btn-circle">Login</a>
            </div>
        </nav>
        </div>
    </div>
</header>


                <!-- <div class="d-flex gap-3">
                    
                    if (isset($_SESSION['role_id']) ) {
                            <div class="dropdown">
                            <button class="btn btn-dark dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                              $_SESSION['name'] 
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="reservation.php">reservation</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="logique/logout.php">Logout</a></li>
                            </ul>
                        </div>



                 
                   }else {
                    <div class="navbar-nav ml-auto">
                   
                   <button class="btn btn-dark" type="button"><a href="login.php">Login</a></button>
               </div> 
                   
                   } -->
            </nav>  
        </div>
    </header>
</header>
<body>

</body>

</html>