<?php


namespace Dreams\Filemanager\Contracts;


interface UserFilemanager
{
    public function hasAnyRole(array $roles);
    public function hasRole(string $role);
}