<?php


namespace Kubersoftware\Microservices\EntityManagerMicroservice\Dto;


use DateTime;
use Kubersoftware\Microservices\MicroservicesListEnum;

class UpdateDto extends AbstractEntityManagerDto
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
     * @return UpdateDto
     */
    public function setMicroservice(MicroservicesListEnum $microservice): UpdateDto
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
     * @return UpdateDto
     */
    public function setCreatedAt(DateTime $createdAt): UpdateDto
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
     * @return UpdateDto
     */
    public function setEntityName(string $entityName): UpdateDto
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
     * @return UpdateDto
     */
    public function setEntityJsonValue(string $entityJsonValue): UpdateDto
    {
        $this->entityJsonValue = $entityJsonValue;
        return $this;
    }
}