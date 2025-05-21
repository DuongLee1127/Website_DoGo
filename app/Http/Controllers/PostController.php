<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use Illuminate\Http\Request;
use App\Services\Interfaces\PostServiceInterface as PostService;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $postService;
    public function __construct(PostService $postService){
        $this->postService = $postService;
    }
    public function index(Request $request)
    {

        // $post = Post::paginate(6);

        $posts = $this->postService->paginate($request);
        $config = config('post');
        $template = 'admin.post.post';

        return view('admin.layouts.layout', compact('posts', 'config', 'template'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $config['seo'] = config('post');
        $config['js'] = [
                'admin_assets/library/location.js',
                'admin_assets/library/ckeditor.js',
                'admin_assets/library/seo.js',
                'admin_assets/library/uploadAvatar.js',
            ];

        $config['method'] = 'create';
        $template = 'admin.post.store';
        return view('admin.layouts.layout', compact('config', 'template'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {

        $success = array(

            'message' => 'Thêm mới bản ghi thành công',
            'alert-type' => 'success'

        );
        $error = array(

            'message' => 'Thêm mới bản ghi thất bại. Thử lại',
            'alert-type' => 'error'

        );
        if($this->postService->createS($request)){
            return redirect()->route('admin.user')->with($success);
        }
        return redirect()->route('admin.user')->with($error);
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
    public function edit($id)
    {
        // $user = $this->postService->findById($id);
        // $config = [
        //     'js' => 'admin_assets/library/location.js'
        //     ];

        // $provinces = $this->postService->province();
        // $wards = Ward::all();
        // $config['seo'] = config('user');
        // $config['method'] = 'update';
        // return view('admin.post.store', compact('config', 'provinces', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(UpdatePostRequest $request, $id)
    // {
    //     $success = array(

    //         'message' => 'Sửa bản ghi thành công',
    //         'alert-type' => 'success'

    //     );
    //     $error = array(

    //         'message' => 'Sửa bản ghi thất bại. Thử lại',
    //         'alert-type' => 'error'

    //     );
    //     if($this->postService->updateS($request, $id)){
    //         return redirect()->route('admin.user')->with($success);
    //     }
    //     return redirect()->route('admin.user')->with($error);
    // }

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
    public function delete($id)
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
        if($this->postService->deleteS($id)){
            return redirect()->back()->with($success);
        }
        return redirect()->back()->with($error);
    }
}
