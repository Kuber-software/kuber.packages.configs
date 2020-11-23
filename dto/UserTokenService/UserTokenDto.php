<?php

namespace Kubersoftware\Dto\UserTokenService;

use DateTime;

class UserTokenDto
{
    private string $userEmail;
    private string $userCsrfToken;
    private array $userRoles;
    private string $sessionID;
    private DateTime $createdAt;
    private DateTime $livedAt;

    /**
     * @return string
     */
    public function getUserEmail(): string
    {
        return $this->userEmail;
    }

    /**
     * @param string $userEmail
     * @return UserTokenDto
     */
    public function setUserEmail(string $userEmail): UserTokenDto
    {
        $this->userEmail = $userEmail;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserCsrfToken(): string
    {
        return $this->userCsrfToken;
    }

    /**
     * @param string $userCsrfToken
     * @return UserTokenDto
     */
    public function setUserCsrfToken(string $userCsrfToken): UserTokenDto
    {
        $this->userCsrfToken = $userCsrfToken;
        return $this;
    }

    /**
     * @return array
     */
    public function getUserRoles(): array
    {
        return $this->userRoles;
    }

    /**
     * @param array $userRoles
     * @return UserTokenDto
     */
    public function setUserRoles(array $userRoles): UserTokenDto
    {
        $this->userRoles = $userRoles;
        return $this;
    }

    /**
     * @return string
     */
    public function getSessionID(): string
    {
        return $this->sessionID;
    }

    /**
     * @param string $sessionID
     * @return UserTokenDto
     */
    public function setSessionID(string $sessionID): UserTokenDto
    {
        $this->sessionID = $sessionID;
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
     * @return UserTokenDto
     */
    public function setCreatedAt(DateTime $createdAt): UserTokenDto
    {
        $this->createdAt = $createdAt;
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
     * @return UserTokenDto
     */
    public function setLivedAt(DateTime $livedAt): UserTokenDto
    {
        $this->livedAt = $livedAt;
        return $this;
    }
}