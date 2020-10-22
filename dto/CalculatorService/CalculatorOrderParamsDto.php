<?php

namespace Kubersoftware\Dto\CalculatorService;


class CalculatorOrderParamsDto
{
    private int $param_1;

    private int $param_2;

    /**
     * @return int
     */
    public function getParam1(): int
    {
        return $this->param_1;
    }

    /**
     * @param int $param_1
     * @return OrderParamsDto
     */
    public function setParam1(int $param_1): OrderParamsDto
    {
        $this->param_1 = $param_1;
        return $this;
    }

    /**
     * @return int
     */
    public function getParam2(): int
    {
        return $this->param_2;
    }

    /**
     * @param int $param_2
     * @return OrderParamsDto
     */
    public function setParam2(int $param_2): OrderParamsDto
    {
        $this->param_2 = $param_2;
        return $this;
    }
}