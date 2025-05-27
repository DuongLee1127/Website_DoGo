<?php

namespace App\Services\Interfaces;

use Illuminate\Http\Request;

/**
 * Interface UserServiceInterface
 * @package App\Services\Interfaces
 */
interface UserServiceInterface
{
    public function paginate($request, $role);
    public function district($provinceId);
    public function province();
    public function findById($id);

    public function createS($request, $role);
    public function updateS($request, $id, $role);

    public function updateStatus($request);
    public function deleteS($id);
}
