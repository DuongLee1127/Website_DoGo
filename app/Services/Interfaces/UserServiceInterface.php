<?php

namespace App\Services\Interfaces;

use Illuminate\Http\Request;

/**
 * Interface UserServiceInterface
 * @package App\Services\Interfaces
 */
interface UserServiceInterface
{
    public function paginate();
    public function district($provinceId);
    public function province();
    public function findById($id);

    public function createS($request);
    public function updateS($request, $id);

    public function deleteS($id);
}
