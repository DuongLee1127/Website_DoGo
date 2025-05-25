<?php

namespace App\Http\Controllers\Vnpay;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VnpayController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function vnpay_payment(Request $request)
    {
        $data = $request->all();
        $code_cart = rand(00, 9999);
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = "http://127.0.0.1:8000/client/vnpay/return";
        $vnp_TmnCode = "T0JAFCRM"; //Mã website tại VNPAY
        $vnp_HashSecret = "ZP1DV774FOH4CKBVQHKQ4GZ4AM0QGQCA"; //Chuỗi bí mật

        $vnp_TxnRef = $code_cart; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = 'Thanh toán đơn hàng test';
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = $data['total_vnpay'] * 100;
        $vnp_Locale = 'vn';
        // $vnp_BankCode = 'NCB';
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];

        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,

        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        // if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
        //     $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        // }

        //var_dump($inputData);
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        return redirect($vnp_Url);
    }

    // public function vnpay_payment(Request $request)
    // {
    //     $vnp_TmnCode = "T0JAFCRM";
    //     $vnp_HashSecret = "ZP1DV774FOH4CKBVQHKQ4GZ4AM0QGQCA";
    //     $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
    //     $vnp_Returnurl = route('client.vnpay.return');

    //     $vnp_TxnRef = time(); // mã đơn hàng
    //     $vnp_OrderInfo = 'Thanh toán đơn hàng test';
    //     $vnp_OrderType = 'billpayment';
    //     $vnp_Amount = 100000 * 100; // số tiền * 100
    //     $vnp_Locale = 'vn';
    //     $vnp_BankCode = 'NCB'; // test bank
    //     $vnp_IpAddr = $request->ip();

    //     $inputData = [
    //         "vnp_Version" => "2.1.0",
    //         "vnp_TmnCode" => $vnp_TmnCode,
    //         "vnp_Amount" => $vnp_Amount,
    //         "vnp_Command" => "pay",
    //         "vnp_CreateDate" => now()->format('YmdHis'),
    //         "vnp_CurrCode" => "VND",
    //         "vnp_IpAddr" => $vnp_IpAddr,
    //         "vnp_Locale" => $vnp_Locale,
    //         "vnp_OrderInfo" => $vnp_OrderInfo,
    //         "vnp_OrderType" => $vnp_OrderType,
    //         "vnp_ReturnUrl" => $vnp_Returnurl,
    //         "vnp_TxnRef" => $vnp_TxnRef,
    //     ];

    //     ksort($inputData);
    //     $hashdata = urldecode(http_build_query($inputData));

    //     $hashdata = rtrim($hashdata, '&');
    //     $vnp_SecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);

    //     $inputData['vnp_SecureHash'] = $vnp_SecureHash;
    //     $inputData['vnp_SecureHashType'] = 'SHA512';

    //     $vnp_Url = $vnp_Url . '?' . http_build_query($inputData);
    //     dd($vnp_Url);

    //     return redirect($vnp_Url);
    // }
    public function vnpayReturn(Request $request)
    {
        $inputData = $request->all();
        $vnp_HashSecret = "ZP1DV774FOH4CKBVQHKQ4GZ4AM0QGQCA";
        $vnp_SecureHash = $inputData['vnp_SecureHash'];
        unset($inputData['vnp_SecureHash']);
        unset($inputData['vnp_SecureHashType']);

         ksort($inputData);

        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }

        }

        $hashData = rtrim($hashdata, '&');
        $secureHash = hash_hmac('sha512', $hashData, $vnp_HashSecret);


        $template = 'client.home';
        // dd('secureHash'.$secureHash.'vnp_SecureHash'.$vnp_SecureHash);
        if ($secureHash === $vnp_SecureHash) {
            if ($request->vnp_ResponseCode == '00') {
                $success = array(
                    'message' => 'Đăng nhập thành công',
                    'alert-type' => 'success'
                );
                return view('client.layouts.layout', compact('template', 'success'));
            } else {
                $notification = array(
                    'message' => 'Tài khoản hoặc mật khẩu không chính xác',
                    'alert-type' => 'warning'
                );
                return view('client.layouts.layout', compact('template', 'notification'));
            }
        } else {
            $notification = array(
                'message' => 'Tài khoản hoặc mật khẩu không chính xác',
                'alert-type' => 'warning'
            );
           return view('client.layouts.layout', compact('template', 'notification'));
        }
    }

}
