<?php

namespace App\Services;

use App\Models\ProductCatalogue;
use App\Models\ProductImages;
use App\Models\Products;
use App\Services\Interfaces\ProductClientServiceInterface;
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
class ProductClientService extends BaseService implements ProductClientServiceInterface
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

        return $productQuery->paginate($perpage)->withQueryString()->withPath('shop');
    }

    public function findById($id){
        return Products::where('id', $id)->first();
    }


}
