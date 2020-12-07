<?php
namespace Kubersoftware\Microservices\LoggerMicroservice\Dto;


use DateTime;
use Kubersoftware\Microservices\MicroservicesListEnum;

class LoggerDto
{
    /**
     * @var MicroservicesListEnum
     */
    private MicroservicesListEnum $microservice;

    /**
     * @var DateTime
     */
    private DateTime $createdAt;

    /**
     * @var string
     */
    private string $errorMessage;


    /**
     * @return MicroservicesListEnum
     */
    public function getMicroservice(): MicroservicesListEnum
    {
        return $this->microservice;
    }

    /**
     * @param MicroservicesListEnum $microservice
     * @return LoggerDto
     */
    public function setMicroservice(MicroservicesListEnum $microservice): LoggerDto
    {
        $this->microservice = $microservice;
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
     * @return LoggerDto
     */
    public function setCreatedAt(DateTime $createdAt): LoggerDto
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return string
     */
    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }

    /**
     * @param string $errorMessage
     * @return LoggerDto
     */
    public function setErrorMessage(string $errorMessage): LoggerDto
    {
        $this->errorMessage = $errorMessage;
        return $this;
    }
}