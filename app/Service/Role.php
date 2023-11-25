<?php

namespace App\Service;

enum Role: int
{
    case Admin = 1;
    case Teacher = 2;
    case Parent = 3;
    case Student = 4;

    public function getRoleName(): string
    {
        return match ($this) {
            Role::Admin => 'Администратор',
            Role::Teacher => 'Учитель',
            Role::Parent => 'Родитель',
            Role::Student => 'Ученик',
        };
    }
}
