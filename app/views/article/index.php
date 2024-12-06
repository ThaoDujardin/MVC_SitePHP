<?php require '../app/views/_template/header.php'; ?>
<table class="table table-striped table-hover">
    <thead>
    <tr>
        <th scope="col">#ID</th>
        <th scope="col">Nom</th>
        <th scope="col">Catégorie</th>
        <th scope="col">Prix</th>
        <th scope="col">Description</th>
        <th scope="col">Stock</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($articles as $article): ?>
        <tr>
            <td><?= $article->getId() ?></td>
            <td><?= $article->getName() ?></td>
            <td><?= $article->getCategory()->getName() ?></td>
            <td><?= $article->getPrice() ?></td>
            <td><?= $article->getDescription() ?></td>
            <td><?= $article->getStock() ?></td>
            <td>
                <a href="article_update.php?id=<?= $article->getId() ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                <a href="article_delete.php?id=<?= $article->getId() ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<div class="d-flex flex-row-reverse">
    <a href="article_create.php" class="btn btn-success">
        <i class="fa fa-plus"></i> Ajouter un article
    </a>
</div>
<?php require '../app/views/_template/footer.php'; ?>