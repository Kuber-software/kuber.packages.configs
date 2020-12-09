<?php

namespace Kubersoftware\Microservices\EntityManagerMicroservice\Dto;


use Kubersoftware\Microservices\TaskManagerMicroservice\Dto\TaskDto;

class InsertDto extends AbstractEntityManagerDto
{
    /**
     * @return string
     */
    public function getEntityName(): string
    {
        return $this->entityName;
    }

    /**
     * @param string $entityName
     * @return InsertDto
     */
    public function setEntityName(string $entityName): InsertDto
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
     * @return InsertDto
     */
    public function setEntityJsonValue(string $entityJsonValue): InsertDto
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
     * @return InsertDto
     */
    public function setTaskDto(TaskDto $taskDto): InsertDto
    {
        $this->taskDto = $taskDto;
        return $this;
    }
}