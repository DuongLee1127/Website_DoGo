<?php

namespace App\Services;

use App\Models\User;
use App\Models\Province;
use App\Models\District;
use App\Services\Interfaces\UserServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Class UserService
 * @package App\Services
 */
class UserService implements UserServiceInterface
{
    public function __construct(){

    }

    public function paginate(){
        return User::paginate(perPage: 6);
    }

    public function district($provinceId){
        $districts = District::where('province_code', $provinceId)->get();

        $options = '<option value="0">[Chọn Quận/Huyện]</option>';
        foreach ($districts as $district) {
            $options .= '<option value="'.$district->code.'">'.$district->name.'</option>';
        }
        return $options;
    }

    public function province(){
        return Province::all();
    }

    public function create(){
        
    }
}
