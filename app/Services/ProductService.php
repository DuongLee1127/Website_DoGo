<?php

namespace App\Services;

use App\Models\ProductCatalogue;
use App\Models\ProductImages;
use App\Models\Products;
use App\Services\Interfaces\ProductServiceInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;

use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isNull;
use function PHPUnit\Framework\isObject;

/**
 * Class ProductService
 * @package App\Services
 */
class ProductService extends BaseService implements ProductServiceInterface
{
    protected $productModel;
    protected $imageModel;
    protected $catalogueModel;
    public function __construct(Products $productModel, ProductImages $imageModel, ProductCatalogue $productCatalogue){
        $this->productModel = $productModel;
        $this->imageModel = $imageModel;
        $this->catalogueModel = $productCatalogue;
    }

    public function paginate($request){
        $column = ['*'];
        $perpage = (addslashes($request->input('records'))==''?6:addslashes($request->input('records')));
        // dd($perpage);
        $condition['keyword'] = addslashes($request->input('keyword'));
        $condition['publish'] = addslashes($request->input('publish'));
        // dd($condition['publish']);
        $productQuery = $this->productModel->select($column)->where(function($productQuery) use ($condition){
            if(isset($condition['keyword']) && !empty($condition['keyword'])){
                $productQuery->where('name', 'LIKE', '%'.$condition['keyword'].'%');
            }
            if(isset($condition['publish']) && (string)$condition['publish'] != '' && $condition['publish'] != -1){
                $productQuery->where('status', '=', $condition['publish']);
            }
        });

        return $productQuery->paginate($perpage)->withQueryString()->withPath('product');
    }

    public function findById($id){
        return Products::where('id', $id)->first();
    }

    public function createS($request){
        DB::beginTransaction($request);
        try{
            $payloadProduct = $request->except(['send', '_token', 'image_path', 'keywordseo', 'descriptionSeo', 'link', 'image']);
            $product = Products::create($payloadProduct);
            // $this->productModel->create($payloadProduct);

            $this->imageModel->create([
                'image_path' => $request->image_path,
                'product_id' => $product->id
            ]);
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
            $productFindId = Products::find($id);
            $payloadProduct = $request->except(['send', '_token', 'image_path', 'keywordseo', 'descriptionSeo', 'link', 'image']);
            $this->productModel->update($payloadProduct);
            // $this->productModel->create($payloadProduct);
            $this->imageModel = $productFindId->images()->first();
            $this->imageModel->update([
                'image_path' => $request->image_path
            ]);
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
        $product = Products::findOrFail($id);
        DB::beginTransaction();
            // if(isset($product->images) && ($product->images) )
        try{
            if($product->images->first())
                $product->images->first()->delete();
            $product->delete();
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
        $user = $this->productModel->findOrFail($id);
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

        $user = $this->productModel->findOrFail($id);
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
