<?php


namespace Kubersoftware\Microservices\ApiDocMicroservice\Dto;


use Kubersoftware\Microservices\LoggerMicroservice\Dto\AbstractLoggerDto;

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
     * Сообщение об ошибке, берем из констант класса @LoggerDto
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
}