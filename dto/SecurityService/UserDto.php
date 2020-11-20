<?php

namespace Kubersoftware\Dto\SecurityService;

use DateTime;

class UserDto
{
    private string $csrfToken;
    private DateTime $loggedAt;
    private string $email;
    private array $roles;
    private bool $isVerified;

    /**
     * UserDto constructor.
     * @param DateTime $loggedAt
     */
    public function __construct(DateTime $loggedAt)
    {
        $this->loggedAt = new DateTime();
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
     * @return UserDto
     */
    public function setCsrfToken(string $csrfToken): UserDto
    {
        $this->csrfToken = $csrfToken;
        return $this;
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
     * @return UserDto
     */
    public function setEmail(string $email): UserDto
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return array
     */
    public function getRoles(): array
    {
        return $this->roles;
    }

    /**
     * @param array $roles
     * @return UserDto
     */
    public function setRoles(array $roles): UserDto
    {
        $this->roles = $roles;
        return $this;
    }

    /**
     * @return bool
     */
    public function isVerified(): bool
    {
        return $this->isVerified;
    }

    /**
     * @param bool $isVerified
     * @return UserDto
     */
    public function setIsVerified(bool $isVerified): UserDto
    {
        $this->isVerified = $isVerified;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getLoggedAt(): DateTime
    {
        return $this->loggedAt;
    }
}