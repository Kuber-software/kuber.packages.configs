<?php
namespace Kubersoftware\Dto\CalculatorService;


class OutputCalculatorTaskDto
{
    private string $taskGuid;
    private float $orderResult;

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
}