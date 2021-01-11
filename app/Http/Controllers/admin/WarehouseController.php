<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ProductTags;
use App\Models\Warehouse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WarehouseController extends Controller
{
    public function index()
    {

        $userType = \Illuminate\Support\Facades\Auth::user()->user_type;

        if (strtolower($userType) == "vendor") {
            $warehouses = Warehouse::where('user_id', Auth::id())->get();

        }else{
           $warehouses = Warehouse::all();
        }

        return view('admin.modules.warehouses.index',compact('warehouses'));
    }

    public function create()
    {
        return view('admin.modules.warehouses.create');
    }

    public function store(Request $request)
    {
        Warehouse::create([
            'user_id'=> Auth::id(),
            'name'=> $request['name'],
            'location'=> $request['location'],
        ]);

        return redirect(route('warehouses.index'))->with('success','WareHouse Created Successfully');
    }

    public function edit(Warehouse $warehouse)
    {
        $this->authorize('access-settings',$warehouse);

        return view('admin.modules.warehouses.edit',compact('warehouse'));
    }

    public function update(Request $request, Warehouse $warehouse)
    {
        $this->authorize('access-settings',$warehouse);

        $warehouse->update([
            'user_id'=> Auth::id(),
            'name'=> $request['name'],
            'location'=> $request['location'],
        ]);

        return redirect(route('warehouses.index'))->with('success','WareHouse Updated Successfully');
    }

    public function destroy(Warehouse $warehouse)
    {
        $this->authorize('access-settings',$warehouse);

        $warehouse->delete();

        return redirect(route('warehouses.index'))->with('success','WareHouse Deleted Successfully');
    }


}
