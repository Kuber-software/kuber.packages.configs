<?php

namespace Kubersoftware\Microservices\TaskManagerMicroservice\Enum;

use MyCLabs\Enum\Enum;

class TaskStatusesEnum extends Enum
{
    /**
     *
     */
    public const WAIT_STATUS = "wait";

    /**
     *
     */
    public const WORK_STATUS = "work";

    /**
     *
     */
    public const ERROR_STATUS = "error";

    /**
     *
     */
    public const DONE_STATUS = "done";
}