<?php require '../app/views/_template/header.php'; ?>

<form method="POST" action="article_create.php" class="container mt-5">
    <h1 class="mb-4">Création d'un article</h1>

    <!-- Erreurs -->
    <?php if (!empty($errors)): ?>
        <div class="alert alert-danger">
            <ul class="mb-0">
                <?php foreach ($errors as $error): ?>
                    <li><?=$error; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <!-- Catégorie -->
    <div class="mb-3">
        <label for="category" class="form-label">Catégorie</label>
        <select name="category_id" id="category" class="form-select" required>
            <option value="" disabled selected>Choisissez une catégorie</option>
            <?php foreach ($categories as $category): ?>
                <option value="<?= $category->getId(); ?>"
                    <?= (isset($data['category_id']) && $data['category_id'] == $category->getId()) ? 'selected' : ''; ?>>
                    <?= $category->getName(); ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <!-- Nom -->
    <div class="mb-3">
        <label for="name" class="form-label">Nom</label>
        <input type="text" name="name" id="name" class="form-control"
               value="<?= $data['name'] ?? ''; ?>" required>
    </div>

    <!-- Prix -->
    <div class="mb-3">
        <label for="price" class="form-label">Prix</label>
        <input type="number" name="price" id="price" class="form-control"
               min="0.01" step="0.01" value="<?= $data['price'] ?? ''; ?>" required>
    </div>

    <!-- Description -->
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea name="description" id="description" class="form-control" rows="4"><?= $data['description'] ?? ''; ?></textarea>
    </div>

    <!-- Stock -->
    <div class="mb-3">
        <label for="stock" class="form-label">Stock</label>
        <input type="number" name="stock" id="stock" class="form-control"
               min="0" value="<?=$data['stock'] ?? ''; ?>" required>
    </div>

    <!-- Bouton -->
    <button type="submit" class="btn btn-primary">Créer</button>
</form>


<?php require '../app/views/_template/footer.php'; ?>
