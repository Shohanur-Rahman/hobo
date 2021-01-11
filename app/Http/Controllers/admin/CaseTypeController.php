<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\CaseType;
use Illuminate\Http\Request;

class CaseTypeController extends Controller
{
    public function index()
    {
        $caseTypes  = CaseType::all();

        return view('admin.modules.case_types.index',compact('caseTypes'));
    }

    public function create()
    {
        return view('admin.modules.case_types.create');
    }

    public function store(Request $request)
    {
        CaseType::create([
            'case_type'=>$request['case_type']
        ]);

        return redirect(route('case-types.index'))->with('success','case type has been created successfully');
    }

    public function edit(CaseType $caseType)
    {
        return view('admin.modules.case_types.edit',compact('caseType'));
    }

    public function update(Request $request ,caseType $caseType)
    {
        $caseType->update([
            'case_type'=>$request['case_type']
        ]);

        return redirect(route('case-types.index'))->with('success','case type has been updated successfully');
    }

    public function destroy(caseType $caseType)
    {
        $caseType->delete();
        return redirect(route('case-types.index'))->with('success','case type has been deleted successfully');
    }
}
