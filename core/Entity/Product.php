<?php

namespace Core\Entity;

use DateTime;

class Product
{
    private int $id;
    private string $name;
    private string $description;
    private int $quantity;
    private float $price;
    private string $color;
    private User $user_created;
    private User $user_updated;
    private User $user_deleted;
    private DateTime $created_at;
    private DateTime $updated_at;
    private DateTime $deleted_at;

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
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
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


}
