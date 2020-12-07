<?php

namespace Kubersoftware\Microservices\EntityManagerMicroservice\Dto;

use DateTime;
use Kubersoftware\Microservices\EntityManagerMicroservice\Enum\InsertObjectEnum;
use Kubersoftware\Microservices\MicroservicesListEnum;

class InsertDto
{
    private MicroservicesListEnum $microservice;

    private DateTime $createdAt;

    private InsertObjectEnum $insertObjectName;

    private string $insertObjectJson;

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
     * @return InsertObjectEnum
     */
    public function getInsertObjectName(): InsertObjectEnum
    {
        return $this->insertObjectName;
    }

    /**
     * @param InsertObjectEnum $insertObjectName
     * @return InsertDto
     */
    public function setInsertObjectName(InsertObjectEnum $insertObjectName): InsertDto
    {
        $this->insertObjectName = $insertObjectName;
        return $this;
    }

    /**
     * @return string
     */
    public function getInsertObjectJson(): string
    {
        return $this->insertObjectJson;
    }

    /**
     * @param string $insertObjectJson
     * @return InsertDto
     */
    public function setInsertObjectJson(string $insertObjectJson): InsertDto
    {
        $this->insertObjectJson = $insertObjectJson;
        return $this;
    }
}