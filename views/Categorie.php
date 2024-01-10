<?php 
include ('../views/Dashbord.php');
require_once ('../Controller/AdminController.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="content">
        <div class="col-sm-6">
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#addEmployeeModal">
                <i class="material-icons">&#xE147;</i> <span>Add New Categorie</span>
            </button>
        </div>
        <table class="agent table align-middle bg-white">
            <thead class="bg-light">
                <tr>
                    <th>Categorie Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($results as $categorie) {
                ?>
                    <tr class="freelancer">
                        <td>
                            <p class="fw-bold mb-1 f_name"><?php echo $categorie['nom']; ?></p>
                        </td>
                        <td>
                            <a href="#editEmployeeModal" class="edit" data-bs-toggle="modal" data-bs-target="#editEmployeeModal">
                                <i class="material-icons" data-bs-toggle="tooltip" title="Edit">&#xE254;</i>
                            </a>
                            <a href="#deleteEmployeeModal" class="delete" data-bs-toggle="modal" data-bs-target="#deleteEmployeeModal">
                                <i class="material-icons" data-bs-toggle="tooltip" title="Delete">&#xE872;</i>
                            </a>
                        </td>
                    </tr>

                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Add Modal HTML -->
    <div class="modal fade" id="addEmployeeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Add Categorie</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" required>
                        </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-warning">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Modal HTML -->
    <div class="modal fade" id="editEmployeeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Categorie</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" required>
                        </div>
                        
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-warning">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Make sure it's included after Bootstrap CSS) -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha384-oZ/GunIzWJWA75z6n8P5ZsD0v3dJTQQmqv24/s/jnFqpozPrR7fEXcfb1zWZcTA" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
