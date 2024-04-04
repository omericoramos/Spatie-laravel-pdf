<?php

declare(strict_types=1);

namespace App\Actions;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class GetDataUserAction
{
    public function getUsers():  Collection
    {
        return User::all();
    }
}
