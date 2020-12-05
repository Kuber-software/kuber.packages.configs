<?php

namespace Kubersoftware\Microservices\TaskManagerMicroservice\Enum;

class TaskStatusesEnum
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

    private string $taskStatus;

    /**
     * @return string
     */
    public function getTaskStatus(): string
    {
        return $this->taskStatus;
    }

    /**
     * @param string $taskStatus
     * @return TaskStatusesEnum
     */
    public function setTaskStatus(string $taskStatus): TaskStatusesEnum
    {
        $this->taskStatus = $taskStatus;
        return $this;
    }
}