<?php
namespace Kubersoftware\Microservices\EntityManagerMicroservice\Enum;

class InsertObjectEnum
{
    public const SECURITY_USER_ENTITY = 'App\Entity\Security\UserEntity';

    private string $objectName;

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
}