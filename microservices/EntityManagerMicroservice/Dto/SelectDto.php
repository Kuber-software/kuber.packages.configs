<?php


namespace Kubersoftware\Microservices\EntityManagerMicroservice\Dto;


use DateTime;
use Kubersoftware\Microservices\MicroservicesListEnum;

class SelectDto extends AbstractEntityManagerDto
{
    /**
     * Критерии выборки из БД.
     * Пример: [ 'name' => 'user_name', 'isActual' => false ]
     *
     * @var array
     */
    private array $criteria;

    /**
     * @return array
     */
    public function getCriteria(): array
    {
        return $this->criteria;
    }

    /**
     * @param array $criteria
     * @return SelectDto
     */
    public function setCriteria(array $criteria): SelectDto
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return MicroservicesListEnum
     */
    public function getMicroservice(): MicroservicesListEnum
    {
        return $this->microservice;
    }

    /**
     * @param MicroservicesListEnum $microservice
     * @return SelectDto
     */
    public function setMicroservice(MicroservicesListEnum $microservice): SelectDto
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
     * @return SelectDto
     */
    public function setCreatedAt(DateTime $createdAt): SelectDto
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
     * @return SelectDto
     */
    public function setEntityName(string $entityName): SelectDto
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
     * @return SelectDto
     */
    public function setEntityJsonValue(string $entityJsonValue): SelectDto
    {
        $this->entityJsonValue = $entityJsonValue;
        return $this;
    }
}