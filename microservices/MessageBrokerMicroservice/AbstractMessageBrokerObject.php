<?php


namespace Kubersoftware\Microservices\MessageBrokerMicroservice;


use DateTime;
use Kubersoftware\Microservices\MicroservicesListEnum;

abstract class AbstractMessageBrokerObject
{
    /**
     * @var MicroservicesListEnum
     */
    protected MicroservicesListEnum $microserviceName;

    protected DateTime $createdAt;

    protected DateTime $updatedAt;

    /**
     * Максимальное время отработки запроса в сек
     * @var int
     */
    protected int $requestTimeInSec;

    protected object $inputObject;

    protected object $outputObject;

    /**
     * @return MicroservicesListEnum
     */
    protected function getMicroserviceName(): MicroservicesListEnum
    {
        return $this->microserviceName;
    }

    /**
     * @return DateTime
     */
    protected function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }
}