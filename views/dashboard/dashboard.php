<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">



    <link rel="stylesheet" href="public/assets/css/dashb.css">
    <title>Document</title>
</head>

<body>

    <div class="menu">
        <ul class="menu__list">
            <li class="menu__list__item menu__list__item__profile">
                <div class="menu__profile">
                    <img src="<?= APP_URL ?>public/assets/images/admin_prfl.jpg" alt="">
                </div>
                <h4 class="menu__profile__name">oumaima el</h4>
            </li>
            <li class="menu__list__item">
                <a href="">
                    <i class="fas fa-home"></i>
                    <p>home</p>
                </a>
            </li>
            <li class="menu__list__item">
                <a href="">
                    <i class="fas fa-user-group"></i>
                    <p>users</p>
                </a>
            </li>
            <li class="menu__list__item">
                <a href="">
                    <i class="fas fa-table"></i>
                    <p>dashboard</p>
                </a>
            </li>
            <li class="menu__list__item">
                <a href="">
                    <i class="fas fa-chart-pie"></i>
                    <p>dashboard</p>
                </a>
            </li>

            <li class="menu__list__item__logout">
                <a href="">
                    <i class="fas fa-sign-out"></i>
                    <p>Log Out</p>
                </a>
            </li>
        </ul>

    </div>

    <main class="container">
        <div class="container__header">
            <h4>dashboard</h4>
            <i class="fas fa-chart-pie"></i>
        </div>
        <div class="container__statistique">
            <div class="container__statistique__data">
                <i class="fas fa-user"></i>
                <div class="container__statistique__info">
                    <p>users</p>
                    <p class="container__statistique__detail">
                        <?= count($users) ?>
                    </p>
                </div>
            </div>
            <div class="container__statistique__data">
                <i class="fas fa-pen"></i>
                <div class="container__statistique__info">
                    <p>wikis waiting</p>
                    <p class="container__statistique__detail">
                        <?= count($wikis) ?>
                    </p>
                </div>
            </div>
            <div class="container__statistique__data">
                <i class="fas fa-tag"></i>
                <div class="container__statistique__info">
                    <p>tags</p>
                    <p class="container__statistique__detail">
                        <?= count($tags) ?>
                    </p>
                </div>
            </div>


        </div>


        <table class="agent table align-middle bg-white">
            <thead class="bg-light">
                <tr>
                    <th>titre</th>
                    <th>Nom Categorie</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($wikis as $wiki): ?>

                    <tr>
                        <td>
                            <?= $wiki['titre'] ?>
                        </td>
                        <td>
                            <?= $wiki['nom'] ?>
                        </td>
                        <td>

                            <!-- Button trigger modal -->
                            <button type="button" class="btn warning" data-bs-toggle="modal"
                                data-bs-target="#exampleModal<?= $wiki['id'] ?>">
                                voir wiki
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal<?= $wiki['id'] ?>" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5 text-dark " id="exampleModalLabel">
                                                <?= $wiki['titre'] ?>
                                            </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-dark ">
                                            <?= $wiki['contenu'] ?>
                                        </div>
                                        <form action="./index.php?route=wikiaccept" method="post">
                                            <input type="hidden" name="id" value="<?= $wiki['id'] ?>"></br>
                                            <button type="submit" class="btn btn-outline-warning"
                                                name="isaccept">accepter</button>
                                        </form>
                                        <form action="./index.php?route=wikidelete" method="post">
                                            <input type="hidden" name="id" value="<?= $wiki['id'] ?>">
                                            <button type="submit" class="btn btn-outline-danger"
                                                name="isaccept">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>

        </table>

        <!-- user affich -->
        <div>
            <div class="container__header">
                <h4>Users</h4>
                <i class="fas fa-user-group"></i>
            </div>

            <table class="agent table align-middle bg-white">
            <thead class="bg-light">
                    <tr>
                        <th>nom</th>
                        <th>email</th>
                        <th>role</th>
                    </tr>
                </thead>
                <tbody>



                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td>
                                <?= $user['nom'] ?>
                            </td>
                            <td>
                                <?= $user['email'] ?>
                            </td>
                            <td>
                                <?= $user['role'] ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- end user affich -->
        <div class="container mt-4 row">

            <div class="col-md-6">
                <div class="container__header">
                    <h4>Tags </h4>

                    <i class="fas fa-tag"></i>
                </div>
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="material-icons">&#xE147;</i> <span>Add New Tags</span>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 text-dark " id="exampleModalLabel">Ajouter Tags</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-dark ">

                                <form action="./index.php?route=addTags" method="post">
                                    <div class="form-group">
                                        <label for="tag">Nom Tag</label>
                                        <input type="text" class="form-control" id="nom_tag" name="nom_tag"
                                            aria-describedby="tag" placeholder="Enter Tag">
                                    </div>


                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>



                            </div>


                        </div>
                    </div>
                </div>

                <table class="agent table align-middle bg-white">
            <thead class="bg-light">
                        <tr>
                            <th>nom</th>
                            <th>actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php


                        foreach ($tags as $tag): ?>


                            <tr>
                                <td>
                                    <?= $tag["nom"] ?>
                                </td>
                                <td>


                                    <div class="btn btn-outline-warning">modifier</div>
                                    <form action="./index.php?route=tagdelete" method="post">
                                        <input type="hidden" name="id" value="<?= $tag['id'] ?>">
                                        <button type="submit" class="btn btn-outline-danger">supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- categories affich -->
            <div class="col-md-6">
                <div class="container__header">
                    <h4>Categories </h4>

                    <i class="fas fa-tag"></i>
                </div>
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModalCat">
                <i class="material-icons">&#xE147;</i> <span>Add New Categorie</span> 
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCat" tabindex="-1" aria-labelledby="exampleModalLabelCat"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 text-dark " id="exampleModalLabel">Ajouter categorie</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-dark ">

                                <form action="./index.php?route=addCategories" method="post">
                                    <div class="form-group">
                                        <label for="categorie">Nom categorie</label>
                                        <input type="text" class="form-control" id="nom_categorie" name="nom_categorie"
                                            aria-describedby="categorie" placeholder="Enter Categorie">
                                    </div>


                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>



                            </div>


                        </div>
                    </div>
                </div>

                <table class="agent table align-middle bg-white">
            <thead class="bg-light">
                        <tr>
                            <th>nom</th>
                            <th>actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php


                        foreach ($categories as $categorie): ?>


                            <tr>
                                <td>
                                    <?= $categorie["nom"] ?>
                                </td>
                                <td>


                                    <div class="btn btn-outline-warning">modifier</div>
                                    <form action="./index.php?route=categoriedelete" method="post">
                                        <input type="hidden" name="id" value="<?= $categorie['id'] ?>">
                                        <button type="submit" class="btn btn-outline-danger">supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>

        <!-- <div class="container__header">
            <h4>Tags Statistiques</h4>
            <i class="fas fa-table"></i>
        </div>

        <table class="container__table">
            <thead>
                <tr>
                    <th>nom</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td></td>
                    <td>
                        <div class="btn btn-outline-warning">modifier</div>
                        <div class="btn btn-outline-danger">supprimer</div>
                    </td>
                </tr>

            </tbody>
        </table> -->

    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>