<?php


namespace Kubersoftware\Microservices\LoggerMicroservice\Dto;


use Kubersoftware\Microservices\MicroservicesListEnum;

class LoggerDto
{
    /**
     * @var MicroservicesListEnum
     */
    private MicroservicesListEnum $microservice;

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