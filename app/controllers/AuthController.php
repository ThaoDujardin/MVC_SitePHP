<?php

require_once '../app/core/Controller.php';
require_once '../app/services/AuthService.php';
require_once '../app/trait/FormTrait.php';

class AuthController extends Controller {
    use FormTrait;

    public function login() {
        $authService = new AuthService();

        // Récupérer les données POST nettoyées
        $postData = $this->getAllPostParams();

        // Si aucune donnée n'est envoyée en POST ou si la connexion échoue, afficher le formulaire
        if (empty($postData) || !$authService->login($this->getPostParam('email'), $this->getPostParam('password'))) {

            $data= empty($postData) ? []:['error'=>'Email ou mot de passe invalide'];// si des données existent, elles ne sont pas valide

            $this->view('login', 'Authentification',$data ); // Affiche la vue login.php
        } else {
            // Rediriger vers la page d'accueil après connexion réussie
            $this->redirectTo('index.php');
        }
    }
}
