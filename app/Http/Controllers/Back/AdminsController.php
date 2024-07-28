<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\RepoController;
use App\Http\Requests\Back\CreateAdminsRequest;
use App\Http\Requests\Back\EditAdminsRequest;
use App\Models\Admins;
use App\Repository\Contracts\IAdminsRepository;

class AdminsController extends RepoController
{
    public function __construct(IAdminsRepository $repository)
    {
        parent::__construct($repository);
    }

    public function store(CreateAdminsRequest $request)
    {
        return self::repo()->store($request);
    }

    public function update(EditAdminsRequest $request, Admins $admins)
    {
        return self::repo()->update($request, $admins);
    }
}
