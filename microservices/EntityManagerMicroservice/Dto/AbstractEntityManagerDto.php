<?php


namespace Kubersoftware\Microservices\EntityManagerMicroservice\Dto;


use DateTime;
use Kubersoftware\Microservices\MicroservicesListEnum;

abstract class AbstractEntityManagerDto
{
    public const USER_ENTITY = 'App\Entity\Security\UserEntity';

    public const USERS_TEST_ENTITY = 'App\Entity\UsersTest';

    public const MOVERS_TEST_ENTITY = 'App\Entity\MoversTest';


    /**
     * Имя микросервиса из констант класса @MicroservicesListEnum
     *
     * @var MicroservicesListEnum
     */
    private MicroservicesListEnum $microservice;

    /**
     * Дата и время создания объекта
     *
     * @var DateTime
     */
    private DateTime $createdAt;

    /**
     * Имя объекта Entity из констант класса @EntityManagerDto
     *
     * @var string
     */
    private string $entityName;

    /**
     * Объект Entity сериализованный в json
     *
     * @var string
     */
    private string $entityJsonValue;



}