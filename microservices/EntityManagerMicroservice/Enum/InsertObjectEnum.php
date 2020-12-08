<?php

namespace Kubersoftware\Microservices\EntityManagerMicroservice\Enum;

class InsertObjectEnum
{
    private EntityEnum $entityName;

    private string $entityValue;


    /**
     * @return EntityEnum
     */
    public function getEntityName(): EntityEnum
    {
        return $this->entityName;
    }

    /**
     * @param EntityEnum $entityName
     * @return InsertObjectEnum
     */
    public function setEntityName(EntityEnum $entityName): InsertObjectEnum
    {
        $this->entityName = $entityName;
        return $this;
    }

    /**
     * @return string
     */
    public function getEntityValue(): string
    {
        return $this->entityValue;
    }

    /**
     * @param string $entityValue
     * @return InsertObjectEnum
     */
    public function setEntityValue(string $entityValue): InsertObjectEnum
    {
        $this->entityValue = $entityValue;
        return $this;
    }
}