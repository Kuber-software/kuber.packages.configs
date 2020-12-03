<?php

namespace Kubersoftware\Microservices\TaskManagerMicroservice\Enum;


use SplEnum;

class TaskListEnum extends SplEnum
{
    public const __default = 'default_task';

    /**
     * Задача для сервиса Calculator
     */
    public const CALCULATE_ORDER_PRICE = "calculate order price";
}