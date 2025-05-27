<?php

namespace App\Services\Interfaces;

use Illuminate\Http\Request;

/**
 * Interface PostServiceInterface
 * @package App\Services\Interfaces
 */
interface OrderServiceInterface
{
    public function paginate($request);
    public function createOrder($request, $lastPayload);
}
