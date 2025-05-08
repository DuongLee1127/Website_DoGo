<?php

namespace App\Services;

use App\Models\User;
use App\Services\Interfaces\BaseServiceInterface;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UserService
 * @package App\Services
 */
class BaseService implements BaseServiceInterface
{
    protected $model;
    public function __construct(Model $model){
        $this->model = $model;
    }

    public function all(){
        return $this->model->all();
    }

    public function create(){
        return $this->model->create();
    }
}
