<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\District;
use App\Models\Ward;
use App\Services\UserService;
use Illuminate\Http\Request;

class LocationController extends Controller
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
    public function index()
    {
        //
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

    public function districts(Request $request){
        $provinceId = $request->input('province_id');
        $options = $this->userService->district($provinceId);

        $response = [
            'html' => $options
        ];
        return response()->json($response);
    }
    public function ward(Request $request){
        $districtId = $request->input('district_id');
        $wards = Ward::where('district_code', $districtId)->get();

        $options = '<option value="0">[Chọn Xã/Phường]</option>';
        foreach ($wards as $ward) {
            $options .= '<option value="'.$ward->code.'">'.$ward->name.'</option>';
        }

        $response = [
            'html' => $options
        ];
        return response()->json($response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {


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
