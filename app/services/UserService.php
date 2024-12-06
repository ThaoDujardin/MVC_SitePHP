<?php
require_once '../app/repositories/UserRepository.php';
require_once '../app/trait/AuthTrait.php';
require_once '../app/entities/User.php';
class UserService
{

	use AuthTrait;
	public function allUsers()
	{
		$repository = new UserRepository();
		return $repository->findAll();
	}

	public function create(array $data): User
	{
		$errors = [];

		// Validation des données
		if (empty($data['firstname']))
		{
			$errors[] = 'Le prénom est requis.';
		}
		// Validation des données
		if (empty($data['lastname']))
		{
			$errors[] = 'Le nom est requis.';
		}
		if (empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL))
		{
			$errors[] = 'Un email valide est requis.';
		}
		if (empty($data['password']) || strlen($data['password']) < 6)
		{
			$errors[] = 'Le mot de passe doit contenir au moins 6 caractères.';
		}

		if (!empty($errors))
		{
			throw new Exception(implode(', ', $errors));
		}

		// Création de l'objet utilisateur
		$hashedPassword = $this->hash($data['password']);
		$user = new User(null, $data['firstname'], $data['lastname'], $data['email'], $hashedPassword);

		// Sauvegarde dans la base de données
		$userRepo = new UserRepository();
		if (!$userRepo->create($user))
		{
			throw new Exception('Erreur lors de l\'enregistrement de l\'utilisateur.');
		}

		return $user;
	}
}
