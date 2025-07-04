<?php

namespace App\Services\Interfaces;

use Illuminate\Http\Request;

/**
 * Interface PostServiceInterface
 * @package App\Services\Interfaces
 */
interface ProductClientServiceInterface
{
    public function paginate($request);
}
