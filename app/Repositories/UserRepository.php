<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Repositories\Interfaces\UserRepositoryInterface;

use App\Models\User;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
}
