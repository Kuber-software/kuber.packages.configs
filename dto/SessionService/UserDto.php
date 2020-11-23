<?php


namespace Kubersoftware\Dto\SessionService;


class UserDto
{
    private string $uuid;
    private array $roles;

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
}