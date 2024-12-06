<?php
function getCategories(): array
{
    $file = __DIR__ . '/../../repositories/CategoryRepository.php';
    $categories = [];
    if (file_exists($file)) {
        include_once $file;
        $categoryRepository = new CategoryRepository();
        if (method_exists($categoryRepository, 'findAll')) {
            $categories = $categoryRepository->findAll();
        }
    }
    return $categories;
}
?>