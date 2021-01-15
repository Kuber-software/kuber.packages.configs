<?php


namespace Kubersoftware\Microservices\NosqlManagerMicroservice\Dto\UserTokensCollection;


class InsertUserTokenDto
{
    private string $uuid;

    private string $token;

    /**
     * @return string
     */
    public function getUuid(): string
    {
        return $this->uuid;
    }

    /**
     * @param string $uuid
     * @return InsertUserTokenDto
     */
    public function setUuid(string $uuid): InsertUserTokenDto
    {
        $this->uuid = $uuid;
        return $this;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * @param string $token
     * @return InsertUserTokenDto
     */
    public function setToken(string $token): InsertUserTokenDto
    {
        $this->token = $token;
        return $this;
    }


}