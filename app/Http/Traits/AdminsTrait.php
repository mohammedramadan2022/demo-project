<?php

namespace App\Http\Traits;

use App\Http\Scopes\AdminsScopes;

trait AdminsTrait
{
    use BasicTrait, AdminsScopes;
}
