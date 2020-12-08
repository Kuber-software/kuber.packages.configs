<?php

namespace Kubersoftware\Microservices\EntityManagerMicroservice\Dto;

use DateTime;
use Kubersoftware\Microservices\EntityManagerMicroservice\Enum\EntityEnum;
use Kubersoftware\Microservices\MicroservicesListEnum;

class InsertDto extends AbstractEntityManagerDto
{
    /**
     * @return MicroservicesListEnum
     */
    public function getMicroservice(): MicroservicesListEnum
    {
        return $this->microservice;
    }

    /**
     * @param MicroservicesListEnum $microservice
     * @return InsertDto
     */
    public function setMicroservice(MicroservicesListEnum $microservice): InsertDto
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
     * @return InsertDto
     */
    public function setCreatedAt(DateTime $createdAt): InsertDto
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return string
     */
    public function getEntityName(): string
    {
        return $this->entityName;
    }

    /**
     * @param string $entityName
     * @return InsertDto
     */
    public function setEntityName(string $entityName): InsertDto
    {
        $this->entityName = $entityName;
        return $this;
    }

    /**
     * @return string
     */
    public function getEntityJsonValue(): string
    {
        return $this->entityJsonValue;
    }

    /**
     * @param string $entityJsonValue
     * @return InsertDto
     */
    public function setEntityJsonValue(string $entityJsonValue): InsertDto
    {
        $this->entityJsonValue = $entityJsonValue;
        return $this;
    }
}