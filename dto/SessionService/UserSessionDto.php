<?php

namespace Kubersoftware\Dto\SessionService;

use DateTime;

class UserSessionDto
{
    private int $id;
    private string $uuid;
    private DateTime $createdAt;
    private DateTime $updatedAt;
    private DateTime $livedAt;
    private bool $isActual;
    private UserDto $userDto;
    private string $csrfToken;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return UserSessionDto
     */
    public function setId(int $id): UserSessionDto
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getUuid(): string
    {
        return $this->uuid;
    }

    /**
     * @param string $uuid
     * @return UserSessionDto
     */
    public function setUuid(string $uuid): UserSessionDto
    {
        $this->uuid = $uuid;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param DateTime $createdAt
     * @return UserSessionDto
     */
    public function setCreatedAt(DateTime $createdAt): UserSessionDto
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getUpdatedAt(): DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @param DateTime $updatedAt
     * @return UserSessionDto
     */
    public function setUpdatedAt(DateTime $updatedAt): UserSessionDto
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getLivedAt(): DateTime
    {
        return $this->livedAt;
    }

    /**
     * @param DateTime $livedAt
     * @return UserSessionDto
     */
    public function setLivedAt(DateTime $livedAt): UserSessionDto
    {
        $this->livedAt = $livedAt;
        return $this;
    }

    /**
     * @return bool
     */
    public function isActual(): bool
    {
        return $this->isActual;
    }

    /**
     * @param bool $isActual
     * @return UserSessionDto
     */
    public function setIsActual(bool $isActual): UserSessionDto
    {
        $this->isActual = $isActual;
        return $this;
    }

    /**
     * @return UserDto
     */
    public function getUserDto(): UserDto
    {
        return $this->userDto;
    }

    /**
     * @param UserDto $userDto
     * @return UserSessionDto
     */
    public function setUserDto(UserDto $userDto): UserSessionDto
    {
        $this->userDto = $userDto;
        return $this;
    }

    /**
     * @return string
     */
    public function getCsrfToken(): string
    {
        return $this->csrfToken;
    }

    /**
     * @param string $csrfToken
     * @return UserSessionDto
     */
    public function setCsrfToken(string $csrfToken): UserSessionDto
    {
        $this->csrfToken = $csrfToken;
        return $this;
    }
}