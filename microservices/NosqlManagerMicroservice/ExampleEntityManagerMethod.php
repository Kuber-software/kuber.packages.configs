<?php


namespace Kubersoftware\Microservices\NosqlManagerMicroservice;


use DateTime;
use Kubersoftware\Microservices\EntityManagerMicroservice\Dto\InsertDto;
use Kubersoftware\Microservices\MessageBrokerMicroservice\AbstractMessageBrokerObject;
use Kubersoftware\Microservices\MicroservicesListEnum;

class ExampleEntityManagerMethod extends AbstractMessageBrokerObject
{
    public function __construct()
    {
        $this->microserviceName = (new MicroservicesListEnum())->setMicroserviceName(MicroservicesListEnum::ENTITY_MANAGER);
        $this->requestTimeInSec = 30;
        $this->createdAt = new DateTime();
    }

    public function setInputObject(InsertDto $inputObject): ExampleEntityManagerMethod
    {
        $this->inputObject = $inputObject;
        return $this;
    }

    public function getInputObject(): InsertDto
    {
        return $this->inputObject;
    }

    public function setOutputObject(InsertDto $inputObject):  ExampleEntityManagerMethod
    {
        $this->outputObject = $inputObject;
        return $this;
    }

    public function getOutputObject(): InsertDto
    {
        return $this->inputObject;
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
     * @return ExampleEntityManagerMethod
     */
    public function setUpdatedAt(DateTime $updatedAt): ExampleEntityManagerMethod
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

}