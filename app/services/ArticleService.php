<?php
require_once '../app/repositories/ArticleRepository.php';
require_once '../app/repositories/CategoryRepository.php';

class ArticleService {
    public function allArticles() {
        $articleRepo = new ArticleRepository();
        $categoryRepo = new CategoryRepository();

        $articles = $articleRepo->findAll();

        foreach ($articles as $article) {
            $category = $categoryRepo->findByArticle($article);
            $article->setCategory($category);
        }

        return $articles;
    }

    public function create(array $data): Article {
        $errors = [];

        // Validation des données
        if (empty($data['category_id'])) {
            $errors[] = 'La catégorie est requise.';
        }
        if (empty($data['name'])) {
            $errors[] = 'Le nom est requis.';
        }
        if (empty($data['price']) || $data['price'] <= 0) {
            $errors[] = 'Le prix doit être supérieur à 0.';
        }
        if (empty($data['stock']) || $data['stock'] < 0) {
            $errors[] = 'Le stock ne peut pas être négatif.';
        }

        if (!empty($errors)) {
            throw new Exception(implode(', ', $errors));
        }

        $article = new Article(
            null,
            $data['name'],
            (float)$data['price'],
            $data['description'] ?? '',
            (int)$data['stock']
        );

        $article->setCategory(new Category((int)$data['category_id'], ''));

        $repository = new ArticleRepository();
        if (!$repository->create($article)) {
            throw new Exception('Erreur lors de la création de l\'article.');
        }

        return $article;
    }

}
