<?php
require_once '../app/services/UserService.php';
require_once '../app/core/Controller.php';
require_once '../app/trait/FormTrait.php';

class UserController extends Controller {

    use FormTrait;
    public function index() {
        $service = new UserService();
        //var_dump($service->allUsers());  // Affichage brut pour vérifier les données

        // Ensuite, affiche la vue
        $this->view('/user/index', 'Liste des utilisateurs', ['users' => $service->allUsers()]);
    }

    public function create() {
        $data = $this->getAllPostParams(); // Récupération des données soumises
        $errors = [];

        if (!empty($data)) {
            try {
                $userService = new UserService();
                $userService->create($data);
                $this->redirectTo('users.php'); // Redirection après création
            } catch (Exception $e) {
                $errors = explode(', ', $e->getMessage()); // Récupération des erreurs
            }
        }

        // Affichage du formulaire
        $this->view('/user/form', 'Création d\'un utilisateur', [
            'data' => $data,
            'errors' => $errors,
        ]);
    }
}
