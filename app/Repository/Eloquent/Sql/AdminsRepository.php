<?php

namespace App\Repository\Eloquent\Sql;

use App\Models\Admins;
use App\Repository\Contracts\IAdminsRepository;
use Illuminate\Http\Request;

class AdminsRepository extends BaseRepository implements IAdminsRepository
{
    public function __construct(Admins $model)
    {
        parent::__construct($model);
    }
}
