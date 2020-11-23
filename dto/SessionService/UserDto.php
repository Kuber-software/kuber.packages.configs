<?php


namespace Kubersoftware\Dto\SessionService;


class UserDto
{
    private string $uuid;
    private array $roles;
    private UserFingerprintDto $userFingerprint;

    /**
     * @return string
     */
    public function getUuid(): string
    {
        return $this->uuid;
    }

    /**
     * @param string $uuid
     * @return UserDto
     */
    public function setUuid(string $uuid): UserDto
    {
        $this->uuid = $uuid;
        return $this;
    }

    /**
     * @return array
     */
    public function getRoles(): array
    {
        return $this->roles;
    }

    /**
     * @param array $roles
     * @return UserDto
     */
    public function setRoles(array $roles): UserDto
    {
        $this->roles = $roles;
        return $this;
    }

    /**
     * @return UserFingerprintDto
     */
    public function getUserFingerprint(): UserFingerprintDto
    {
        return $this->userFingerprint;
    }

    /**
     * @param UserFingerprintDto $userFingerprint
     * @return UserDto
     */
    public function setUserFingerprint(UserFingerprintDto $userFingerprint): UserDto
    {
        $this->userFingerprint = $userFingerprint;
        return $this;
    }
}