<?php

namespace Kubersoftware\Microservices\EntityManagerMicroservice\Enum;

class InsertObjectEnum
{
    public const SECURITY_USER_ENTITY = 'App\Entity\Security\UserEntity';

    private string $objectName;

    private string $objectValue;

    /**
     * @return string
     */
    public function getObjectName(): string
    {
        return $this->objectName;
    }

    /**
     * @param string $objectName
     * @return InsertObjectEnum
     */
    public function setObjectName(string $objectName): InsertObjectEnum
    {
        $this->objectName = $objectName;
        return $this;
    }

    /**
     * @return string
     */
    public function getObjectValue(): string
    {
        return $this->objectValue;
    }

    /**
     * @param string $objectValue
     * @return InsertObjectEnum
     */
    public function setObjectValue(string $objectValue): InsertObjectEnum
    {
        $this->objectValue = $objectValue;
        return $this;
    }
}