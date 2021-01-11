<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\CaseCategory;
use App\Models\CaseType;
use Illuminate\Http\Request;

class CaseCategoryController extends Controller
{
    public function index()
    {
        $caseCategories  = CaseCategory::all();

        return view('admin.modules.case_categories.index',compact('caseCategories'));
    }

    public function create()
    {
        $caseTypes = CaseType::all();

        return view('admin.modules.case_categories.create',compact('caseTypes'));
    }

    public function store(Request $request)
    {
        CaseCategory::create([
            'case_type_id'=>$request['case_type_id'],
            'case_category'=>$request['case_category']
        ]);

        return redirect(route('case-categories.index'))->with('success','case category has been created successfully');
    }

    public function edit(CaseCategory $caseCategory)
    {
        $caseTypes = CaseType::all();

        return view('admin.modules.case_categories.edit',compact('caseCategory','caseTypes'));
    }

    public function update(Request $request ,caseCategory $caseCategory)
    {

        $caseCategory->update([
            'case_type_id'=>$request['case_type_id'],
            'case_category'=>$request['case_category']
        ]);

        return redirect(route('case-categories.index'))->with('success','case category has been updated successfully');
    }

    public function destroy(caseCategory $caseCategory)
    {

        $caseCategory->delete();

        return redirect(route('case-categories.index'))->with('success','case category has been deleted successfully');
    }
}
