<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\DeliveryTime;
use Illuminate\Http\Request;

class DeliveryTimesController extends Controller
{

    public function index()
    {
        $deliveryTimes = DeliveryTime::orderBy('name', 'asc')->get();
        return view('admin.modules.delivery_times.index', compact('deliveryTimes'));
    }


    public function create()
    {
        return view('admin.modules.delivery_times.create');
    }

    public function store(Request $request)
    {
        DeliveryTime::create($this->validateRequest());
        return redirect(route('delivery.times.index'))->with('success','Your delivery timeline has been successfully added.');
    }

    public function show($id)
    {
        //
    }

    public function edit(DeliveryTime $deliveryTime)
    {

        return view('admin.modules.delivery_times.edit', compact('deliveryTime'));
    }

    public function update(Request $request, DeliveryTime $deliveryTime)
    {
        $deliveryTime->update($this->validateRequest());
        return redirect(route('delivery.times.index'))->with('success','Your delivery timeline has been successfully updated.');
    }

    public function destroy(DeliveryTime $deliveryTime)
    {
        $deliveryTime->delete();
        return redirect(route('delivery.times.index'))->with('success','Your delivery timeline has been successfully deleted.');
    }

    public function validateRequest()
    {
        return $data = request()->validate([
            'name' => 'required',
            'day' => 'required'
        ]);
    }
}
