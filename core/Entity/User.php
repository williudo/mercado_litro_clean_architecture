<?php

namespace Core\Entity;

use DateTime;

class User
{
    private int $id;
    private string $name;
    private string $email;
    private string $password;
    private string $remember_token;
    private string $email_verified_at;
    private User $user_created;
    private User $user_updated;
    private User $user_deleted;
    private DateTime $deleted_at;
    private DateTime $created_at;
    private DateTime $updated_at;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getRememberToken(): string
    {
        return $this->remember_token;
    }

    /**
     * @param string $remember_token
     */
    public function setRememberToken(string $remember_token): void
    {
        $this->remember_token = $remember_token;
    }

    /**
     * @return string
     */
    public function getEmailVerifiedAt(): string
    {
        return $this->email_verified_at;
    }

    /**
     * @param string $email_verified_at
     */
    public function setEmailVerifiedAt(string $email_verified_at): void
    {
        $this->email_verified_at = $email_verified_at;
    }

    /**
     * @return User
     */
    public function getUserCreated(): User
    {
        return $this->user_created;
    }

    /**
     * @param User $user_created
     */
    public function setUserCreated(User $user_created): void
    {
        $this->user_created = $user_created;
    }

    /**
     * @return User
     */
    public function getUserUpdated(): User
    {
        return $this->user_updated;
    }

    /**
     * @param User $user_updated
     */
    public function setUserUpdated(User $user_updated): void
    {
        $this->user_updated = $user_updated;
    }

    /**
     * @return User
     */
    public function getUserDeleted(): User
    {
        return $this->user_deleted;
    }

    /**
     * @param User $user_deleted
     */
    public function setUserDeleted(User $user_deleted): void
    {
        $this->user_deleted = $user_deleted;
    }

    /**
     * @return DateTime
     */
    public function getDeletedAt(): DateTime
    {
        return $this->deleted_at;
    }

    /**
     * @param DateTime $deleted_at
     */
    public function setDeletedAt(DateTime $deleted_at): void
    {
        $this->deleted_at = $deleted_at;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->created_at;
    }

    /**
     * @param DateTime $created_at
     */
    public function setCreatedAt(DateTime $created_at): void
    {
        $this->created_at = $created_at;
    }

    /**
     * @return DateTime
     */
    public function getUpdatedAt(): DateTime
    {
        return $this->updated_at;
    }

    /**
     * @param DateTime $updated_at
     */
    public function setUpdatedAt(DateTime $updated_at): void
    {
        $this->updated_at = $updated_at;
    }


}
