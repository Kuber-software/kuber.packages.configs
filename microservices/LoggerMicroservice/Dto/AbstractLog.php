<?php


namespace App\Logger;


use Kubersoftware\Microservices\MicroservicesListEnum;

abstract class AbstractLog
{

    private string $message;
    private array $context;
    private int $level;
    private string $levelName;
    private string $channel;
    private \DateTime $dateTime;
    private array $extra;
    private MicroservicesListEnum $service;

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return $this
     */
    public function setMessage(string $message): AbstractLog
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return array
     */
    public function getContext(): array
    {
        return $this->context;
    }

    /**
     * @param array $context
     * @return $this
     */
    public function setContext(array $context): AbstractLog
    {
        $this->context = $context;
        return $this;
    }

    /**
     * @return int
     */
    public function getLevel(): int
    {
        return $this->level;
    }

    /**
     * @param int $level
     * @return $this
     */
    public function setLevel(int $level): AbstractLog
    {
        $this->level = $level;
        return $this;
    }

    /**
     * @return string
     */
    public function getLevelName(): string
    {
        return $this->levelName;
    }

    /**
     * @param string $levelName
     * @return $this
     */
    public function setLevelName(string $levelName): AbstractLog
    {
        $this->levelName = $levelName;
        return $this;
    }

    /**
     * @return string
     */
    public function getChannel(): string
    {
        return $this->channel;
    }

    /**
     * @param string $channel
     * @return $this
     */
    public function setChannel(string $channel): AbstractLog
    {
        $this->channel = $channel;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateTime(): \DateTime
    {
        return $this->dateTime;
    }

    /**
     * @param \DateTime $dateTime
     * @return $this
     */
    public function setDateTIme(\DateTime $dateTime): AbstractLog
    {
        $this->dateTime = $dateTime;
        return $this;
    }

    /**
     * @return array
     */
    public function getExtra(): array
    {
        return $this->extra;
    }

    /**
     * @param array $extra
     * @return $this
     */
    public function setExtra(array $extra): AbstractLog
    {
        $this->extra = $extra;
        return $this;
    }

    /**
     * @return MicroservicesListEnum
     */
    public function getService(): MicroservicesListEnum
    {
        return $this->service;
    }

    /**
     * @param MicroservicesListEnum $service
     * @return $this
     */
    public function setService(MicroservicesListEnum $service): AbstractLog
    {
        $this->service = $service;
        return $this;
    }

}