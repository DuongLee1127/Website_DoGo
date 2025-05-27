<?php

namespace App\Services;

use App\Models\CartItems;
use App\Models\ProductCatalogue;
use App\Models\ProductImages;
use App\Models\Order;
use App\Services\Interfaces\OrderServiceInterface;
use Illuminate\Support\Facades\DB;

/**
 * Class OrderService
 * @package App\Services
 */
class OrderService extends BaseService implements OrderServiceInterface
{
    protected $orderModel;
    public function __construct(Order $orderModel){
        $this->orderModel = $orderModel;
    }

    public function paginate($request){
        $column = ['*'];
        $perpage = (addslashes($request->input('records'))==''?6:addslashes($request->input('records')));
        // dd($perpage);
        $condition['keyword'] = addslashes($request->input('keyword'));
        $condition['publish'] = addslashes($request->input('publish'));
        // dd($condition['publish']);
        $orderQuery = $this->orderModel->with('user')->select($column)->where(function($orderQuery) use ($condition){
            if(isset($condition['keyword']) && !empty($condition['keyword'])){
                $orderQuery->join('users', 'orders.user_id', '=', 'users.id')
                            ->where('users.name', 'like', "%{$condition['keyword']}%")
                            ->select('orders.*');
            }
            if(isset($condition['publish']) && (string)$condition['publish'] != '' && $condition['publish'] != -1){
                $orderQuery->where('status', '=', $condition['publish']);
            }
        });

        return $orderQuery->with('user')->paginate($perpage)->withQueryString()->withPath('order');
    }

    public function createOrder($request, $lastPayload){
        // dd($request);

        DB::beginTransaction($request);
        $cartitem = CartItems::where('user_id', $lastPayload['users_id']);
        try{
            // dd($lastPayload);
            Order::create($lastPayload);
            $cartitem->delete();
            DB::commit();
            return true;
        }catch(\Exception $e){
            DB::rollBack();
            dd('Lỗi rồi:', $e->getMessage());
            echo $e->getMessage();
            return false;
        }
    }
}
