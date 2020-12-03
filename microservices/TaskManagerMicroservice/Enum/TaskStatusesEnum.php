<?php

namespace Kubersoftware\Microservices\TaskManagerMicroservice\Enum;


use SplEnum;

class TaskStatusesEnum extends SplEnum
{
    public const __default = self::WAIT_STATUS;

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