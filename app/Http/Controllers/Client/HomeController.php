<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Models\CartItems;
use App\Models\District;
use App\Models\Order;
use App\Models\Province;
use App\Models\Ward;
use App\Services\Interfaces\ProductServiceInterface as ProductService;
use App\Services\Interfaces\OrderServiceInterface as OrderService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $productService;
    protected $orderService;
    public function __construct(ProductService $productService, OrderService $orderService)
    {
        $this->productService = $productService;
        $this->orderService = $orderService;
    }
    public function index()
    {
        $provinces = Province::all();
        $wards = Ward::all();
        $config['js'] = ['users_assets/lib/location.js',];
        $config['toastr'] = config('toastr');
        $template = 'client/home';
        $user = '';
        $cartItems = '';
        if (auth()->user()) {
            if (auth()->user()->role == '2') {
                $user = auth()->user();
                $cartItems = CartItems::with('product.images')
                    ->where('user_id', $user->id)
                    ->where('quantity', '>', 0)
                    ->get();
            }
        }

        return view('client/layouts/layout', compact('template', 'cartItems', 'config', 'provinces', 'wards', 'user'));
    }

    public function product(Request $request)
    {

        $provinces = Province::all();
        $wards = Ward::all();

        $user = '';
        $cartItems = '';
        if (auth()->user()) {
            if (auth()->user()->role == '2') {
                $user = auth()->user();
                $cartItems = CartItems::with('product.images')
                    ->where('user_id', $user->id)
                    ->where('quantity', '>', 0)
                    ->get();
            }
        }

        // $total = CartItems::where('user_id', $user->id)->
        $products = $this->productService->paginate($request);
        $config['js'] = ['users_assets/lib/addToCart.js', 'users_assets/lib/location.js'];
        $template = 'client/products';
        return view('client/layouts/layout', compact('template', 'products', 'user', 'provinces', 'wards', 'config', 'cartItems'));
    }

    public function addToCart(Request $request)
    {
        $product_id = $request->id_product;
        $quantity = 1;
        CartItems::updateOrCreate([
            'user_id' => auth()->id(),
            'product_id' => $product_id,
        ], [
            'quantity' => DB::raw("quantity + {$quantity}"),
        ]);
    }

    public function detail()
    {
        $template = 'client/detail';
        return view('client/layouts/layout', compact('template'));
    }


    public function getCountry($payload){

        $province = Province::find($payload->province_id);
        $district = District::find($payload->district_id);
        $ward = Ward::find($payload->ward_id);

        return $province.','.$district.','.$ward;
    }

    public function payment(OrderRequest $request)
    {

        $success = array(
            'message' => 'Thanh toán thành công',
            'alert-type' => 'success'
        );
        $error = array(
            'message' => 'Thanh toán thất bại',
            'alert-type' => 'error'
        );
        $payload = $request->except(['_token', 'name']);
        // dd($payload['payment_method']);

            $payload['users_id'] = auth()->user()->id;
            $payload['cost_total'] = $payload['total_vnpay'];

            $province = Province::where('code',$payload['province_id'])->first();
            $district = District::where('code',$payload['district_id'])->first();
            $ward = Ward::where('code',$payload['ward_id'])->first();

            $payload['customer_address'] = $province->name.', '.$district->name.', '.$ward->name;
        if ($payload['payment_method'] == '1') {

                // dd($payload);
                // return redirect()->route('client.product')->with($success);
            if ($this->orderService->createOrder( $request,$payload)) {
                return redirect()->route('client.product')->with($success);
            }
            return redirect()->route('client.product')->with($error);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
}
