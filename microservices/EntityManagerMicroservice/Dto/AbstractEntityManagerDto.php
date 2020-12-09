<?php


namespace Kubersoftware\Microservices\EntityManagerMicroservice\Dto;


use DateTime;
use Kubersoftware\Microservices\MicroservicesListEnum;
use Kubersoftware\Microservices\TaskManagerMicroservice\Dto\TaskDto;

/**
 * @IgnoreAnnotation("MicroservicesListEnum")
 * @IgnoreAnnotation("EntityManagerDto")
 *
 * Class AbstractEntityManagerDto
 * @package Kubersoftware\Microservices\EntityManagerMicroservice\Dto
 *
 */
abstract class AbstractEntityManagerDto
{
    public const USER_ENTITY = 'App\Entity\Security\UserEntity';

    public const USERS_TEST_ENTITY = 'App\Entity\UsersTest';

    public const MOVERS_TEST_ENTITY = 'App\Entity\MoversTest';

    /**
     * Имя объекта Entity из констант класса @EntityManagerDto
     *
     * @var string
     */
    protected string $entityName;

    /**
     * Объект Entity сериализованный в json
     *
     * @var string
     */
    protected string $entityJsonValue;


    protected TaskDto $taskDto;

}