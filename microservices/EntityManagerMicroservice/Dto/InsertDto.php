<?php

namespace Kubersoftware\Microservices\EntityManagerMicroservice\Dto;

use DateTime;
use Kubersoftware\Microservices\EntityManagerMicroservice\Enum\EntityEnum;
use Kubersoftware\Microservices\MicroservicesListEnum;

class InsertDto
{
    private MicroservicesListEnum $microservice;

    private DateTime $createdAt;

    private EntityEnum $entityName;

    private string $entityObject;


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
     * @return EntityEnum
     */
    public function getEntityName(): EntityEnum
    {
        return $this->entityName;
    }

    /**
     * @param EntityEnum $entityName
     * @return InsertDto
     */
    public function setEntityName(EntityEnum $entityName): InsertDto
    {
        $this->entityName = $entityName;
        return $this;
    }

    /**
     * @return string
     */
    public function getEntityObject(): string
    {
        return $this->entityObject;
    }

    /**
     * @param string $entityObject
     * @return InsertDto
     */
    public function setEntityObject(string $entityObject): InsertDto
    {
        $this->entityObject = $entityObject;
        return $this;
    }
}