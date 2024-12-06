<?php require '../app/views/_template/header.php'; ?>

<form method="POST" action="user_create.php" class="container mt-5">
    <h1 class="mb-4">Création d'un utilisateur</h1>

    <!-- Erreurs -->
    <?php if (!empty($errors)): ?>
        <div class="alert alert-danger">
            <ul class="mb-0">
                <?php foreach ($errors as $error): ?>
                    <li><?= $error; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <!-- Nom d'utilisateur -->
    <div class="mb-3">
        <label for="firstname" class="form-label">Prénom</label>
        <input type="text" name="firstname" id="firstname" class="form-control"
               value="<?= $data['firstname'] ?? ''; ?>" required>
    </div>

    <!-- Nom d'utilisateur -->
    <div class="mb-3">
        <label for="lastname" class="form-label">Nom</label>
        <input type="text" name="lastname" id="lastname" class="form-control"
               value="<?=$data['lastname'] ?? ''; ?>" required>
    </div>

    <!-- Email -->
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control"
               value="<?= $data['email'] ?? ''; ?>" required>
    </div>

    <!-- Mot de passe -->
    <div class="mb-3">
        <label for="password" class="form-label">Mot de passe</label>
        <input type="password" name="password" id="password" class="form-control" required>
    </div>

    <!-- Bouton -->
    <button type="submit" class="btn btn-primary">Créer</button>
</form>

<?php require '../app/views/_template/footer.php'; ?>
