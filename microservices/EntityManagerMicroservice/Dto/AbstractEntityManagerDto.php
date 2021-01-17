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
    public const USER_ENTITY = 'Apphttps://zoom.us/j/91927243422?pwd=dzU2UVhSbVJ1NG5ldWxMNC90ZllnUT09\Entity\Security\UserEntity';

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


    /**
     * Задача, выставленная Task manager
     *
     * @var TaskDto
     */
    protected TaskDto $taskDto;

    /**
     * @return string
     */
    public function getEntityName(): string
    {
        return $this->entityName;
    }

    /**
     * @param string $entityName
     * @return AbstractEntityManagerDto
     */
    public function setEntityName(string $entityName): AbstractEntityManagerDto
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
     * @return AbstractEntityManagerDto
     */
    public function setEntityJsonValue(string $entityJsonValue): AbstractEntityManagerDto
    {
        $this->entityJsonValue = $entityJsonValue;
        return $this;
    }

    /**
     * @return TaskDto
     */
    public function getTaskDto(): TaskDto
    {
        return $this->taskDto;
    }

    /**
     * @param TaskDto $taskDto
     * @return AbstractEntityManagerDto
     */
    public function setTaskDto(TaskDto $taskDto): AbstractEntityManagerDto
    {
        $this->taskDto = $taskDto;
        return $this;
    }
}