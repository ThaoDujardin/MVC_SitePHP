<?php
require_once '../app/repositories/UserRepository.php';

class AuthService
{

	// Vérifie si les identifiants sont corrects
	public function login(string $email, string $password): bool
	{
		$repo = new UserRepository();

		$user = $repo->findByEmail($email);
		$validEmail    = $user->getEmail();
		$validPassword = $user->getPassword();

		if (session_status() === PHP_SESSION_NONE)
		{
			session_start();
			$_SESSION['user'] = serialize($user);
		}

		// Vérifier les identifiants
		return $email === $validEmail && $password === $validPassword;
	}

	public function getUser() : User
	{
		return unserialize($_SESSION['user']);
	}

	public function logout()
	{
		// Logique pour déconnecter l'utilisateur
		// Par exemple, détruire la session
		session_destroy();
	}

	public function isLoggedIn(): bool
	{
		// Vérifier si l'utilisateur est connecté (vérification simple pour exemple)
		return isset($_SESSION['logged_in']) && $_SESSION['logged_in'];
	}
}
