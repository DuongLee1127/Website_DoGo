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

    public function paginate($request, $role){
        $column = ['*'];
        $perpage = (addslashes($request->input('records'))==''?6:addslashes($request->input('records')));
        // dd($perpage);
        $condition['keyword'] = addslashes($request->input('keyword'));
        $condition['publish'] = addslashes($request->input('publish'));
        // dd($condition['publish']);
        $query = $this->model->select($column)->where(function($query) use ($condition){
            if(isset($condition['keyword']) && !empty($condition['keyword'])){
                $query->where('name', 'LIKE', '%'.$condition['keyword'].'%')
                ->orWhere('email', 'LIKE', '%'.$condition['keyword'].'%')
                ->orWhere('phone', 'LIKE', '%'.$condition['keyword'].'%');
            }
            if(isset($condition['publish']) && (string)$condition['publish'] != '' && $condition['publish'] != -1){
                $query->where('status', '=', $condition['publish']);
            }
        });
        $role_id = filter_User($role);
        $query->where('role' , '=', $role_id);

        return $query->paginate($perpage)->withQueryString()->withPath('user');
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

    public function createS($request, $role){
        DB::beginTransaction($request);
        try{
            $payload = $request->except(['send', '_token']);
            $payload['role'] = filter_User($role);
            // dd(filter_User($payload['role']));
            // dd($payload);
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


    public function updateS($request, $id, $role){
        DB::beginTransaction($request);
        try{
            $payload = $request->except(['send', '_token']);
            $payload['role'] = filter_User($role);
            $user = $this->model->findOrFail($id);
            $user->update(attributes: $payload);
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



    public function deleteS($id, $role){
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

    public function updateStatus($request){
        $post = $request->input();
        $payload[$post['publish']] = ($post['status'] == 1)?0:1;
        $id = $post['id'];

        $user = $this->model->findOrFail($id);
        DB::beginTransaction();
        try{

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
}
