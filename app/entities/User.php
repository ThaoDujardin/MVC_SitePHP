<?php
class User {
   
	public function __construct(private ?int $id,private string $firstname,private string $lastname,private string $email, private ?string $password)
	{}

	public function getId(): ?int
	{
		return $this->id;
	}

	public function getFirstname(): string
	{
		return $this->firstname;
	}

	public function setFirstname(string $firstname): void
	{
		$this->firstname = $firstname;
	}

	public function getLastname(): string
	{
		return $this->lastname;
	}

	public function setLastname(string $lastname): void
	{
		$this->lastname = $lastname;
	}

	public function getEmail(): string
	{
		return $this->email;
	}

	public function setEmail(string $email): void
	{
		$this->email = $email;
	}

	public function getPassword(): ?string
	{
		return $this->password;
	}

	public function setPassword(?string $password): void
	{
		$this->password = $password;
	}

	// Contrôle des données à sérialiser
	public function __serialize(): array
	{
		return [
			'firstname' => $this->firstname,
			'lastname'  => $this->lastname,
			'email'     => $this->email
		]; // Exclut le mot de passe
	}

	// Restaure les données de l'objet lors de la désérialisation
	public function __unserialize(array $data): void
	{
		$this->firstname = $data['firstname'];
		$this->lastname  = $data['lastname'];
		$this->email     = $data['email'];
		$this->password  = ''; // Par sécurité, on ne restaure pas le mot de passe
	}
}
