<?php

namespace Kubersoftware\Microservices\TaskManagerMicroservice\Enum;

use MyCLabs\Enum\Enum;

class TaskListEnum extends Enum
{
    public const __default = 'default_task';

    /**
     * Задача для сервиса Calculator
     */
    public const CALCULATE_ORDER_PRICE = "calculate order price";
}