<?php

namespace App\Services;

use App\Models\User;
use App\Models\Province;
use App\Models\District;
use App\Services\Interfaces\UserServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UserService
 * @package App\Services
 */
class UserService extends BaseService implements UserServiceInterface
{
    protected $model;
    public function __construct(User $model){
        $this->model = $model;
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
    public function findById($id){
        return User::where('id', $id)->first();
    }

    public function createS($request){
        DB::beginTransaction($request);
        try{
            $payload = $request->except(['send', '_token']);
            $payload['password'] = Hash::make($payload['password']);
            $this->model->create($payload);
            // dd($payload);
            // DB::table('users')->insert($payload);
            DB::commit();
            return true;
        }catch(\Exception $e){
            DB::rollBack();
            echo $e->getMessage();
            return false;
        }
    }


    public function updateS($request, $id){
        DB::beginTransaction($request);
        try{
            $payload = $request->except(['send', '_token']);
            $user = $this->model->findOrFail($id);
            $user->update($payload);
        // dd($user);
            // DB::table('users')->insert($payload);
            DB::commit();
            return true;
        }catch(\Exception $e){
            DB::rollBack();
            echo $e->getMessage();
            return false;
        }
    }

    public function deleteS($id){
        $user = $this->model->findOrFail($id);
        DB::beginTransaction();
        try{
            $user->delete();
        // dd($user);
            // DB::table('users')->insert($payload);
            DB::commit();
            return true;
        }catch(\Exception $e){
            DB::rollBack();
            echo $e->getMessage();
            return false;
        }
    }
    public function forceDeleteS($id){
        $user = $this->model->findOrFail($id);
        DB::beginTransaction();
        try{
            $user->forceDelete();
        // dd($user);
            // DB::table('users')->insert($payload);
            DB::commit();
            return true;
        }catch(\Exception $e){
            DB::rollBack();
            echo $e->getMessage();
            return false;
        }
    }
}
