<?php

namespace KCV\Dashboard\Core\Domain\Model;

class User
{
	protected const ROLE_USER = 0;
	protected const ROLE_ADMIN = 1;

	private UserId $userId;

	private string $username;

	private string $email;

	private Password $password;

	private int $role;

	private $hospitalId;

	private $queueStatus;

	public function __construct(UserId $userId, $username, $email, Password $password, $role = 0, $hospitalId=NULL, $queueStatus=NULL)
	{
		$this->userId = $userId;
		$this->username = $username;
		$this->email = $email;
		$this->password = $password;
		$this->role = $role;
		$this->hospitalId = $hospitalId;
		$this->queueStatus = $queueStatus;
	}

	public function getUserId()
	{
		return $this->userId;
	}

	public function setUserId($userId)
	{
		$this->userId = $userId;
	}

	public function getUsername()
	{
		return $this->username;
	}

	public function setUsername($username)
	{
		$this->username = $username;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setEmail($email)
	{
		$this->email = $email;
	}

	public function getPassword()
	{
		return $this->password;
	}

	public function setPassword($password)
	{
		$this->password = $password;
	}

	public function getRole()
	{
		return $this->role;
	}

	public function setRole($role)
	{
		$this->role = $role;
	}
	
	public function getHospitalId()
	{
		return $this->hospitalId;
	}

	public function setHospitalId($hospitalId)
	{
		$this->hospitalId = $hospitalId;
	}

	public function getQueueStatus()
	{
		return $this->queueStatus;
	}

	public function setQueueStatus($queueStatus)
	{
		$this->queueStatus = $queueStatus;
	}
}