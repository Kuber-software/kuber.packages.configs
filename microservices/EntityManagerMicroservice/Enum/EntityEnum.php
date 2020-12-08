<?php


namespace Kubersoftware\Microservices\EntityManagerMicroservice\Enum;


class EntityEnum
{
    public const USER_ENTITY = 'App\Entity\Security\UserEntity';

    public const USERS_TEST_ENTITY = 'App\Entity\UsersTest';

    public const MOVERS_TEST_ENTITY = 'App\Entity\MoversTest';



    private string $entity;

    /**
     * @return string
     */
    public function getEntity(): string
    {
        return $this->entity;
    }

    /**
     * @param string $entity
     * @return EntityEnum
     */
    public function setEntity(string $entity): EntityEnum
    {
        $this->entity = $entity;
        return $this;
    }
}