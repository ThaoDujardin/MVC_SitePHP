<?php
require_once '../app/services/ArticleService.php';
require_once '../app/services/CategoryService.php';
require_once '../app/core/Controller.php';
require_once '../app/trait/FormTrait.php';

class ArticleController extends Controller
{

	use FormTrait;

	public function index() {
		$service = new ArticleService();
		$articles = $service->allArticles();
		//var_dump($articles);  // Affichage brut pour vérification

		$this->view('/article/index', 'Liste des articles', ['articles' => $articles]);
	}

	public function create() {
		$categoryService = new CategoryService();
		$categories = $categoryService->allCategory();

		$data = $this->getAllPostParams();
		$errors = [];

		if (!empty($data))
		{
			try
			{
				$articleService = new ArticleService();
				$articleService->create($data);
				$this->redirectTo('articles.php');
			}
			catch (Exception $e)
			{
				$errors = explode(', ', $e->getMessage());
			}
		}

		$this->view('/article/form', 'Création d\'un article', [
			'categories' => $categories,
			'data' => $data,
			'errors' => $errors
		]);
	}
}
