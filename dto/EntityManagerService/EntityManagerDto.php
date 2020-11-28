<?php

namespace Kubersoftware\Dto\EntityManagerService;

use DateTimeInterface;
use Kubersoftware\Enum\EntityManagerTypesEnum;
use Kubersoftware\Enum\ServicesListEnum;

class EntityManagerDto
{
    private string $service;     // какой сервис отправил объект
    private string $type;        // тип, добавление/удаление/обновление/выборка
    private string $objectName;  // имя объекта
    private string $objectJson;  // значение объекта
    private DateTimeInterface $createdAt;

    /**
     * @return string
     */
    public function getService(): string
    {
        return $this->service;
    }

    /**
     * @param string $service
     * @return EntityManagerDto
     */
    public function setService(string $service): EntityManagerDto
    {
        $this->service = $service;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return EntityManagerDto
     */
    public function setType(string $type): EntityManagerDto
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getObjectName(): string
    {
        return $this->objectName;
    }

    /**
     * @param string $objectName
     * @return EntityManagerDto
     */
    public function setObjectName(string $objectName): EntityManagerDto
    {
        $this->objectName = $objectName;
        return $this;
    }

    /**
     * @return string
     */
    public function getObjectJson(): string
    {
        return $this->objectJson;
    }

    /**
     * @param string $objectJson
     * @return EntityManagerDto
     */
    public function setObjectJson(string $objectJson): EntityManagerDto
    {
        $this->objectJson = $objectJson;
        return $this;
    }

    /**
     * @return DateTimeInterface
     */
    public function getCreatedAt(): DateTimeInterface
    {
        return $this->createdAt;
    }

    /**
     * @param DateTimeInterface $createdAt
     * @return EntityManagerDto
     */
    public function setCreatedAt(DateTimeInterface $createdAt): EntityManagerDto
    {
        $this->createdAt = $createdAt;
        return $this;
    }
}