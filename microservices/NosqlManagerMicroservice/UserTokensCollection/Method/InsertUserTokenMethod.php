<?php

namespace Kubersoftware\Microservices\NosqlManagerMicroservice\UserTokensCollection\Method;

use Kubersoftware\Microservices\MessageBrokerMicroservice\AbstractMessageBrokerObject;
use Kubersoftware\Microservices\MicroservicesListEnum;
use Kubersoftware\Microservices\NosqlManagerMicroservice\UserTokensCollection\Dto\InsertUserTokenDto;

class InsertUserTokenMethod extends AbstractMessageBrokerObject implements InsertUserTokenMethodInterface
{
    public function __construct()
    {
        $this->microserviceName = (new MicroservicesListEnum())->setMicroserviceName(MicroservicesListEnum::NOSQL_DB_CLUSTER);
        $this->requestTimeInSec = 30;
        $this->createdAt = new \DateTime();
    }


    public function setInputObject(InsertUserTokenDto $inputObject): InsertUserTokenMethod
    {
        $this->inputObject = $inputObject;
        return $this;
    }

    public function getInputObject(): InsertUserTokenDto
    {
        return $this->inputObject;
    }

    public function setOutputObject(InsertUserTokenDto $inputObject): InsertUserTokenMethod
    {
        $this->outputObject = $inputObject;
        return $this;
    }

    public function getOutputObject(): InsertUserTokenDto
    {
        return $this->inputObject;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     * @return InsertUserTokenMethod
     */
    public function setUpdatedAt(\DateTime $updatedAt): InsertUserTokenMethod
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
}