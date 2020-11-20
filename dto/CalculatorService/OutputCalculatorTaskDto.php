<?php
namespace Kubersoftware\Dto\CalculatorService;

use DateTime;

class OutputCalculatorTaskDto
{
    private string $taskGuid;
    private float $orderResult;
    private DateTime $updateAt;

    /**
     * @return string
     */
    public function getTaskGuid(): string
    {
        return $this->taskGuid;
    }

    /**
     * @param string $taskGuid
     * @return OutputCalculatorTaskDto
     */
    public function setTaskGuid(string $taskGuid): OutputCalculatorTaskDto
    {
        $this->taskGuid = $taskGuid;
        return $this;
    }

    /**
     * @return float
     */
    public function getOrderResult(): float
    {
        return $this->orderResult;
    }

    /**
     * @param float $orderResult
     * @return OutputCalculatorTaskDto
     */
    public function setOrderResult(float $orderResult): OutputCalculatorTaskDto
    {
        $this->orderResult = $orderResult;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getUpdateAt(): DateTime
    {
        return $this->updateAt;
    }

    /**
     * @param DateTime $updateAt
     * @return OutputCalculatorTaskDto
     */
    public function setUpdateAt(DateTime $updateAt): OutputCalculatorTaskDto
    {
        $this->updateAt = $updateAt;
        return $this;
    }
}