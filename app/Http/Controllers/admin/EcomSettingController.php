<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Currency;
use App\Models\EcomSetting;
use Illuminate\Http\Request;

class EcomSettingController extends Controller
{
    public function index()
    {
        $ecomSetting = EcomSetting::first();
        $currencies = Currency::all();

        return view('admin.modules.ecom_settings.index',compact('currencies','ecomSetting'));
    }

    public function update(EcomSetting $ecomSetting)
    {
        $data = request()->validate([
            'currency_id'=>'required|numeric',
            'shipping_cost'=>'required|numeric',
            'outer_city_shipping_cost'=>'required|numeric',
            'admin_email'=>'required|string|max:255',
        ]);

        $ecomSetting->update($data);

        return redirect(route('ecom-settings.index'))->with('success','Ecom-Setting has been updated successfully');
    }
}
