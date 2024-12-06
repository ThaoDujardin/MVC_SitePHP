<?php require '../app/views/_template/header.php'; ?>
<table class="table table-striped table-hover">
    <thead>
    <tr>
        <th scope="col">#ID</th>
        <th scope="col">Prénom</th>
        <th scope="col">Nom</th>
        <th scope="col">Email</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user->getId() ?></td>
            <td><?= $user->getFirstName() ?></td>
            <td><?= $user->getLastName() ?></td>
            <td><?= $user->getEmail() ?></td>
            <td>
                <a href="user_update.php?id=<?= $user->getId() ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                <a href="user_delete.php?id=<?= $user->getId() ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<div class="d-flex flex-row-reverse">
    <a href="user_create.php" class="btn btn-success">
        <i class="fa fa-plus"></i> Ajouter un utilisateur
    </a>
</div>
<?php require '../app/views/_template/footer.php'; ?>