<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Article</title>
    <style>
        body {
            background-color: #f8f9fa;
            color: #495057;
        }

        .container {
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 20px;
            margin-top: 50px;
        }

        img {
            max-width: 100%;
            border-radius: 10px;
        }

        h2 {
            color: #343a40;
        }

        .text-muted {
            color: #6c757d;
        }

        hr {
            border-top: 1px solid #dee2e6;
        }

        p {
            line-height: 1.6;
        }

        .badge {
            margin-right: 5px;
            background-color: #ffc107;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <img src="<?= APP_URL ?>public/assets/images/article.jpg"  class="img-fluid" alt="<?= $article['titre'] ?>">
                <h2 class="mt-3"><?= $article['titre'] ?></h2>
                <p class="text-muted">Par <?= $article['auteur'] ?> | Catégorie: <?= $article['categorie'] ?></p>
                <hr>
                <p><?= $article['contenu'] ?></p>
                <div class="mt-3">
                    <strong>Tags:</strong>
                    <?php foreach ($article['tags'] as $tag): ?>
                        <span class="badge bg-warning"><?= $tag ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
