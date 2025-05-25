<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\District;
use App\Models\User;
use App\Models\Ward;
use Illuminate\Http\Request;
use App\Services\Interfaces\UserServiceInterface as UserService;
use Laravel\Ui\Presets\React;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $userService;
    public function __construct(UserService $userService){
        $this->userService = $userService;
    }
    public function index(Request $request, $role)
    {

        // $users = User::paginate(6);

        $users = $this->userService->paginate($request, $role);
        $config = config('user');
        $config['js'] = ['admin_assets/library/library.js','admin_assets/library/checkbox.js'];
        $template = 'admin.users.users';

        return view('admin.layouts.layout', compact('users', 'config', 'template', 'role'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($role)
    {
        $config['js'] = ['admin_assets/library/location.js',
            ];

        $provinces = $this->userService->province();
        $wards = Ward::all();
        $config['seo'] = config('user');
        $config['method'] = 'create';
        $template = 'admin.users.store';
        return view('admin.layouts.layout', compact('config', 'provinces', 'template', 'role'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request, $role)
    {

        $success = array(

            'message' => 'Thêm mới bản ghi thành công',
            'alert-type' => 'success'

        );
        $error = array(

            'message' => 'Thêm mới bản ghi thất bại. Thử lại',
            'alert-type' => 'error'

        );
        if($this->userService->createS($request, $role)){
            return redirect()->route('admin.user.role', $role)->with($success);
        }
        return redirect()->route('admin.user.role',$role)->with($error);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $role)
    {
        $user = $this->userService->findById($id);
        $config['js'] = ['admin_assets/library/location.js'
            ];

        $provinces = $this->userService->province();
        $wards = Ward::all();
        $config['seo'] = config('user');
        $config['method'] = 'update';
        $template = 'admin.users.store';
        return view('admin.layouts.layout', compact('config', 'provinces', 'user', 'template'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, $id, $role)
    {
        $success = array(

            'message' => 'Sửa bản ghi thành công',
            'alert-type' => 'success'

        );
        $error = array(

            'message' => 'Sửa bản ghi thất bại. Thử lại',
            'alert-type' => 'error'

        );
        if($this->userService->updateS($request, $id, $role)){
            return redirect()->route('admin.user.role', $role)->with($success);
        }
        return redirect()->route('admin.user.role', $role)->with($error);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function delete($id, $role)
    {
        //
        $success = array(

            'message' => 'Xóa bản ghi thành công',
            'alert-type' => 'success'

        );
        $error = array(

            'message' => 'Xóa bản ghi thất bại. Thử lại',
            'alert-type' => 'error'

        );
        if($this->userService->deleteS($id, $role)){
            return redirect()->back()->with($success);
        }
        return redirect()->back()->with($error);
    }
}
