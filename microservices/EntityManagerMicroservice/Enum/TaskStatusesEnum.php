<?php


namespace Kubersoftware\Microservices\EntityManagerMicroservice\Enum;


class TaskStatusesEnum
{
    public const STATUS_WAIT = 'wait';

    public const STATUS_IN_PROGRESS = 'in_progress';

    public const STATUS_SUCCESS = 'success';

    public const STATUS_ERROR = 'error';


    private string $status = self::STATUS_WAIT;

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return TaskStatusesEnum
     */
    public function setStatus(string $status): TaskStatusesEnum
    {
        $this->status = $status;
        return $this;
    }
}