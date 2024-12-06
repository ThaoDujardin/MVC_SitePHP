<?php

require_once '../app/repositories/CategoryRepository.php';

class CategoryService
{
    public function allCategory() {
        $repository = new CategoryRepository();
        return $repository->findAll();
    }
}