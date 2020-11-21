<?php

namespace Kubersoftware\Dto\UserTokenService;

class UserTokenDto
{
    private string $userUuid;
    private string $userToken;
    private string $createdAt;
    private string $livedAt;

    /**
     * @return string
     */
    public function getUserUuid(): string
    {
        return $this->userUuid;
    }

    /**
     * @param string $userUuid
     * @return UserTokenDto
     */
    public function setUserUuid(string $userUuid): UserTokenDto
    {
        $this->userUuid = $userUuid;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserToken(): string
    {
        return $this->userToken;
    }

    /**
     * @param string $userToken
     * @return UserTokenDto
     */
    public function setUserToken(string $userToken): UserTokenDto
    {
        $this->userToken = $userToken;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    /**
     * @param string $createdAt
     * @return UserTokenDto
     */
    public function setCreatedAt(string $createdAt): UserTokenDto
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return string
     */
    public function getLivedAt(): string
    {
        return $this->livedAt;
    }

    /**
     * @param string $livedAt
     * @return UserTokenDto
     */
    public function setLivedAt(string $livedAt): UserTokenDto
    {
        $this->livedAt = $livedAt;
        return $this;
    }
}