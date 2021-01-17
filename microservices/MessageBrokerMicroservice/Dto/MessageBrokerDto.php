<?php


namespace Kubersoftware\Microservices\MessageBrokerMicroservice\Dto;


use DateTime;
use Kubersoftware\Microservices\MicroservicesListEnum;

class MessageBrokerDto
{
    private MicroservicesListEnum $microserviceName;

    private DateTime $createdAt;

    private DateTime $updatedAt;

    private int $requestTimeInSec;

    /**
     * @return MicroservicesListEnum
     */
    public function getMicroserviceName(): MicroservicesListEnum
    {
        return $this->microserviceName;
    }

    /**
     * @param MicroservicesListEnum $microserviceName
     * @return MessageBrokerDto
     */
    public function setMicroserviceName(MicroservicesListEnum $microserviceName): MessageBrokerDto
    {
        $this->microserviceName = $microserviceName;
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
     * @return MessageBrokerDto
     */
    public function setCreatedAt(DateTime $createdAt): MessageBrokerDto
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
     * @return MessageBrokerDto
     */
    public function setUpdatedAt(DateTime $updatedAt): MessageBrokerDto
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    /**
     * @return int
     */
    public function getRequestTimeInSec(): int
    {
        return $this->requestTimeInSec;
    }

    /**
     * @param int $requestTimeInSec
     * @return MessageBrokerDto
     */
    public function setRequestTimeInSec(int $requestTimeInSec): MessageBrokerDto
    {
        $this->requestTimeInSec = $requestTimeInSec;
        return $this;
    }

}