<?php

namespace Kubersoftware\Microservices\TaskManagerMicroservice\Enum;


class TaskListEnum
{
    /**
     * Задача для сервиса Calculator
     */
    public const CALCULATE_ORDER_PRICE = "calculate order price";

    private string $task;

    /**
     * @return string
     */
    public function getTask(): string
    {
        return $this->task;
    }

    /**
     * @param string $task
     * @return TaskListEnum
     */
    public function setTask(string $task): TaskListEnum
    {
        $this->task = $task;
        return $this;
    }
}