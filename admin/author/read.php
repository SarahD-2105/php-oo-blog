<?php

// admin/author/read.php

require '../../bootstrap.php';

use Repository\Authorrepository;

// Récupérer l'identifiant dans les paramètres d'URL ($_GET)
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Utiliser la méthode findOneById() de la classe AuthorRepository
// pour récupérer l'auteur correspondant à l'identifiant
$repository = new AuthorRepository($connection);

$author = $repository->findOneById($id);

// Gerer le cas 404 : 'Auteur introuvable'
if (null === $author) {
    http_response_code(404);
    exit;
}

?>
<!doctype html>
<html lang="fr">
<head>
    <!-- Head -->
    <?php include PROJECT_ROOT . '/admin/includes/head.php'; ?>
    <title>Administration</title>
</head>
<body>
<!-- Top bar -->
<?php include PROJECT_ROOT . '/admin/includes/topbar.php'; ?>

<div class="container-fluid">
    <div class="row">

        <!-- Sidebar bar -->
        <?php include PROJECT_ROOT . '/admin/includes/sidebar.php'; ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Détail de l'utilisateur</h1>
            </div>

            <p>
                <!-- Boutons Modifier / Supprimer -->
            </p>

            <table>
                <tbody>
                <tr>
                    <th>ID</th>
                    <td>
                        #
                    </td>
                </tr>
                <tr>
                    <th>Nom</th>
                    <td>
                        #
                    </td>
                </tr>
                </tbody>
            </table>

        </main>
    </div>
</div>

<!-- Scripts -->
<?php include PROJECT_ROOT . '/admin/includes/scripts.php'; ?>
</html>
