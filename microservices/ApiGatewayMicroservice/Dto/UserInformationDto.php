<?php


namespace Kubersoftware\Microservices\ApiGatewayMicroservice\Dto;


use Doctrine\Common\Collections\ArrayCollection;

class UserInformationDto
{
    private string $ip;

    private ArrayCollection $userAgent;

    /**
     * @return string
     */
    public function getIp(): string
    {
        return $this->ip;
    }

    /**
     * @param string $ip
     * @return UserInformationDto
     */
    public function setIp(string $ip): UserInformationDto
    {
        $this->ip = $ip;
        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getUserAgent(): ArrayCollection
    {
        return $this->userAgent;
    }

    /**
     * @param ArrayCollection $userAgent
     * @return UserInformationDto
     */
    public function setUserAgent(ArrayCollection $userAgent): UserInformationDto
    {
        $this->userAgent = $userAgent;
        return $this;
    }
}