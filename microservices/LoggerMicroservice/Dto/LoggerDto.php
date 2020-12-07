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
     * Объект, послуживший причиной ошибки
     * @var object
     */
    private object $case;


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

    /**
     * @return object
     */
    public function getCase(): object
    {
        return $this->case;
    }

    /**
     * @param object $case
     * @return LoggerDto
     */
    public function setCase(object $case): LoggerDto
    {
        $this->case = $case;
        return $this;
    }
}