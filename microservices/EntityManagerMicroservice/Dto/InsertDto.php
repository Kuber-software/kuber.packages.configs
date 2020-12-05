<?php
namespace Kubersoftware\Microservices\EntityManagerMicroservice\Dto;

use Kubersoftware\Microservices\EntityManagerMicroservice\Enum\InsertObjectEnum;
use Kubersoftware\Microservices\ServicesListEnum;

class InsertDto
{
    private ServicesListEnum $service;

    private InsertObjectEnum $insertObjectName;

    private string $insertObjectJson;

    /**
     * @return ServicesListEnum
     */
    public function getService(): ServicesListEnum
    {
        return $this->service;
    }

    /**
     * @param ServicesListEnum $service
     * @return InsertDto
     */
    public function setService(ServicesListEnum $service): InsertDto
    {
        $this->service = $service;
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