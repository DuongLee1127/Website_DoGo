<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use App\Services\Interfaces\ProductServiceInterface as ProductService;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $productService;
    public function __construct(ProductService $productService){
        $this->productService = $productService;
    }
    public function index(Request $request)
    {

        // $post = Post::paginate(6);
        // dd(auth()->user()->images);
        $products = $this->productService->paginate($request);
        $config = config('product');
        $config['js'] = [
            'admin_assets/library/library.js',
            'admin_assets/library/checkbox.js'
        ];
        $template = 'admin.product.product';
        return view('admin.layouts.layout', compact('products', 'config', 'template'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $config['seo'] = config('product');
        $config['js'] = [
                'admin_assets/library/ckeditor.js',
                'admin_assets/library/seo.js',
                'admin_assets/library/uploadAvatar.js',
                'admin_assets/library/changeImg.js',
            ];
        $categories = ProductCategory::select('id', 'name')->get();
        $config['modal'] = 'admin_assets/plugins/responsive_filemanager/responsive_filemanager/filemanager/dialog.php?field_id=uploadi';
        $config['modal2'] = 'admin_assets/plugins/responsive_filemanager/responsive_filemanager/filemanager/dialog.php?field_id=upload-product';
        $config['method'] = 'create';
        $template = 'admin.product.store';
        return view('admin.layouts.layout', compact('config', 'template', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        $success = array(
            'message' => 'Thêm mới bản ghi thành công',
            'alert-type' => 'success'
        );
        $error = array(
            'message' => 'Thêm mới bản ghi thất bại. Thử lại',
            'alert-type' => 'error'
        );
        if($this->productService->createS($request)){
            return redirect()->route('admin.product')->with($success);
        }
        return redirect()->route('admin.product')->with($error);
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
        $products = $this->productService->findById($id);
        $config['js'] = [
                'admin_assets/library/ckeditor.js',
                'admin_assets/library/seo.js',
                'admin_assets/library/uploadAvatar.js',
                'admin_assets/library/changeImg.js',
            ];

        $config['seo'] = config('product');

        $categories = ProductCategory::select('id', 'name')->get();
        $config['modal'] = 'admin_assets/plugins/responsive_filemanager/responsive_filemanager/filemanager/dialog.php?field_id=uploadi';
        $config['modal2'] = 'admin_assets/plugins/responsive_filemanager/responsive_filemanager/filemanager/dialog.php?field_id=upload-product';
        $config['method'] = 'update';
        $template = 'admin.product.store';
        return view('admin.layouts.layout', compact('config', 'template', 'categories', 'products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, $id)
    {
        $success = array(

            'message' => 'Sửa bản ghi thành công',
            'alert-type' => 'success'

        );
        $error = array(

            'message' => 'Sửa bản ghi thất bại. Thử lại',
            'alert-type' => 'error'

        );
        if($this->productService->updateS($request, $id)){
            return redirect()->route('admin.product')->with($success);
        }
        return redirect()->route('admin.product')->with($error);
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
        if($this->productService->deleteS($id)){
            return redirect()->back()->with($success);
        }
        return redirect()->back()->with($error);
    }
}
