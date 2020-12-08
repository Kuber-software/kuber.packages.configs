<?php

namespace Kubersoftware\Microservices\LoggerMicroservice\Dto;


use DateTime;
use Exception;
use Kubersoftware\Microservices\MicroservicesListEnum;

abstract class AbstractLoggerDto
{
    /**
     * Имя микросервиса, берем из констант класса Kubersoftware\Microservices\MicroservicesListEnum
     *
     * @var MicroservicesListEnum
     */
    private MicroservicesListEnum $microservice;

    /**
     * @var DateTime
     */
    private DateTime $createdAt;


    /**
     * @var Exception
     */
    private Exception $exception;


    /**
     * @return MicroservicesListEnum
     */
    public function getMicroservice(): MicroservicesListEnum
    {
        return $this->microservice;
    }

    /**
     * @param MicroservicesListEnum $microservice
     * @return AbstractLoggerDto
     */
    public function setMicroservice(MicroservicesListEnum $microservice): AbstractLoggerDto
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
     * @return AbstractLoggerDto
     */
    public function setCreatedAt(DateTime $createdAt): AbstractLoggerDto
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return Exception
     */
    public function getException(): Exception
    {
        return $this->exception;
    }

    /**
     * @param Exception $exception
     * @return AbstractLoggerDto
     */
    public function setException(Exception $exception): AbstractLoggerDto
    {
        $this->exception = $exception;
        return $this;
    }
}