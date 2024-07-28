<?php

namespace App\Models;

use App\Casts\Status;
use App\Http\Traits\AdminsTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admins extends Model
{
    use HasFactory, SoftDeletes, AdminsTrait;

    public int $cols = 5;

    protected $guarded = ['id'];

    protected $casts = ['status' => Status::class];
}
