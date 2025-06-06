<?php

namespace App\Services\Interfaces;

use Illuminate\Http\Request;

/**
 * Interface PostServiceInterface
 * @package App\Services\Interfaces
 */
interface ProductServiceInterface
{
    public function paginate($request);
    public function findById($id);

    public function createS($request);
    public function updateS($request, $id);
    public function updateStatus($request);

    public function deleteS($id);
}
