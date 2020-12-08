<?php


namespace Kubersoftware\Microservices\ApiDocMicroservice\Dto;


use DateTime;
use Exception;
use Kubersoftware\Microservices\LoggerMicroservice\Dto\AbstractLoggerDto;
use Kubersoftware\Microservices\MicroservicesListEnum;

class LoggerDto extends AbstractLoggerDto
{
    /**
     * Ошибка по-умолчанию
     */
    private const DEFAULT = 'Ошибка не определена';

    /**
     *  Вызывается в случае ошибки при декодировании документации (json->array)
     */
    public const WRONG_JSON = 'Неверный JSON';

    /**
     * Вызывается, в случае отсутствия ключа ['info']['version'] в массиве документации
     */
    public const VERSION_NOT_FOUND = 'Версия не найдена';

    /**
     * Вызывается в случае несоответвия версии из массива и даты
     */
    public const VERSION_MISMATCH = 'Версии не совпадают';


    /**
     * Сообщение об ошибке, берем из констант класса
     * Kubersoftware\Microservices\ApiDocMicroservice\Dto\LoggerDto
     *
     * @var string
     */
    private string $errorMessage = self::DEFAULT;

    /**
     * Объект, приведший к ошибке
     * @var object
     */
    private object $object;


    /**
     * @return string
     */
    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }

    /**
     * @param string $errorMessage
     * @return LoggerDto
     */
    public function setErrorMessage(string $errorMessage): LoggerDto
    {
        $this->errorMessage = $errorMessage;
        return $this;
    }

    /**
     * @return object
     */
    public function getObject(): object
    {
        return $this->object;
    }

    /**
     * @param object $object
     * @return LoggerDto
     */
    public function setObject(object $object): LoggerDto
    {
        $this->object = $object;
        return $this;
    }

    /**
     * @return MicroservicesListEnum
     */
    public function getMicroservice(): MicroservicesListEnum
    {
        return $this->microservice;
    }

    /**
     * @param MicroservicesListEnum $microservice
     * @return LoggerDto
     */
    public function setMicroservice(MicroservicesListEnum $microservice): LoggerDto
    {
        $this->microservice = $microservice;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param DateTime $createdAt
     * @return LoggerDto
     */
    public function setCreatedAt(DateTime $createdAt): LoggerDto
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return Exception
     */
    public function getException(): Exception
    {
        return $this->exception;
    }

    /**
     * @param Exception $exception
     * @return LoggerDto
     */
    public function setException(Exception $exception): LoggerDto
    {
        $this->exception = $exception;
        return $this;
    }
}