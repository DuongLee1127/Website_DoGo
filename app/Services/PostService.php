<?php

namespace App\Services;

use App\Models\Province;
use App\Models\District;
use App\Models\PostCatalogue;
use App\Services\Interfaces\PostServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PostService
 * @package App\Services
 */
class PostService extends BaseService implements PostServiceInterface
{
    protected $model;
    public function __construct(PostCatalogue $model){
        $this->model = $model;
    }

    public function paginate($request){
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

        return $query->paginate($perpage)->withQueryString()->withPath('post');
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
        return Post::where('id', $id)->first();
    }

    public function createS($request){
        DB::beginTransaction($request);

        try{
            $payload = $request->except(['send', '_token']);
            dd($payload);
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
