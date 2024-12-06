<?php
require_once '../app/core/Repository.php';
require_once '../app/entities/User.php';

class UserRepository
{
	private $pdo;

	public function __construct()
	{
		$this->pdo = Repository::getInstance()->getPDO();
	}

	public function findAll(): array
	{
		$stmt = $this->pdo->query('SELECT * FROM "User"');
		$users = [];
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
		{
			$users[] = $this->createUserFromRow($row);
		}
		return $users;
	}

	private function createUserFromRow(array $row): User
	{
		return new User($row['id'], $row['firstname'], $row['lastname'], $row['email'], $row['password']);
	}

	public function create(User $user): bool
	{
		$stmt = $this->pdo->prepare('INSERT INTO "User" (firstname,lastname,email,password ) VALUES (:firstname, :lastname, :email, :password)');
		return $stmt->execute([
			'firstname' => $user->getFirstname(),
			'lastname' => $user->getLastname(),
			'email' => $user->getEmail(),
			'password' => $user->getPassword(),
		]);
	}

	public function findByEmail(string $email) : ?User
	{
		$stmt = $this->pdo->prepare('SELECT * FROM \"User\" WHERE email = :email');
		$stmt->execute([ 'email' => $email, ]);
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		return $this->createUserFromRow($row);
	}
}
