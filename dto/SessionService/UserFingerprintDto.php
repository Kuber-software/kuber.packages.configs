<?php


namespace Kubersoftware\Dto\SessionService;


class UserFingerprintDto
{
    private string $language;
    private string $accept;
    private string $userAgent;

    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * @param string $language
     * @return UserFingerprintDto
     */
    public function setLanguage(string $language): UserFingerprintDto
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccept(): string
    {
        return $this->accept;
    }

    /**
     * @param string $accept
     * @return UserFingerprintDto
     */
    public function setAccept(string $accept): UserFingerprintDto
    {
        $this->accept = $accept;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserAgent(): string
    {
        return $this->userAgent;
    }

    /**
     * @param string $userAgent
     * @return UserFingerprintDto
     */
    public function setUserAgent(string $userAgent): UserFingerprintDto
    {
        $this->userAgent = $userAgent;
        return $this;
    }
}