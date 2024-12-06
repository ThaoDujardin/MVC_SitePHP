<?php require_once '../app/views/_template/header.php'; ?>

    <h2 class="mb-4">Connexion</h2>

    <!-- Message d'erreur à afficher si besoin -->
<?php if (isset($error) && $error): ?>
    <div class="alert alert-danger text-center" role="alert">
        <?= $error ?>
    </div>
<?php endif; ?>

    <form method="post" action="login.php">
        <div class="mb-3">
            <label for="email" class="form-label">Adresse email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="d-flex flex-row-reverse">
            <button type="submit" class="btn btn-primary">Se connecter</button>
        </div>
    </form>

<?php require_once '../app/views/_template/footer.php'; ?>