<?php

namespace Kubersoftware\Dto\SessionService;

use DateTimeInterface;

class UserSessionDto
{
    private int $id;
    private string $uuid;
    private DateTimeInterface $createdAt;
    private DateTimeInterface $updatedAt;
    private DateTimeInterface $livedAt;
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
     * @return DateTimeInterface
     */
    public function getCreatedAt(): DateTimeInterface
    {
        return $this->createdAt;
    }

    /**
     * @param DateTimeInterface $createdAt
     * @return UserSessionDto
     */
    public function setCreatedAt(DateTimeInterface $createdAt): UserSessionDto
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return DateTimeInterface
     */
    public function getUpdatedAt(): DateTimeInterface
    {
        return $this->updatedAt;
    }

    /**
     * @param DateTimeInterface $updatedAt
     * @return UserSessionDto
     */
    public function setUpdatedAt(DateTimeInterface $updatedAt): UserSessionDto
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    /**
     * @return DateTimeInterface
     */
    public function getLivedAt(): DateTimeInterface
    {
        return $this->livedAt;
    }

    /**
     * @param DateTimeInterface $livedAt
     * @return UserSessionDto
     */
    public function setLivedAt(DateTimeInterface $livedAt): UserSessionDto
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