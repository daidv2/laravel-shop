<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cate;
use App\Http\Requests\CateRequest;

class CateController extends Controller
{
    public function getList(){
        $data = Cate::select('id', 'name', 'parent_id')->orderBy('id', 'DESC')->get();
        return view('admin.cate.cate_list', compact('data'));
    }

    public function getAdd(){
        $parent = Cate::select('id', 'name', 'parent_id')->get();
        return view('admin.cate.cate_add', compact('parent'));
    }

    public function postAdd(CateRequest $request){
        $cate = new Cate();
        $cate->name = $request->txtCateName;
        $cate->alias = \Common::convert_vi_to_en($request->txtCateName);
        $cate->order = $request->txtOrder;
        $cate->parent_id = $request->sltParent;
        $cate->keywords = $request->txtKeywords;
        $cate->description = $request->txtDescription;
        $cate->save();
        return redirect()->route('admin.cates.getList')->with([
            'flash_level' => 'success',
            'flash_message' => \Message::INSERT_SUCCESS
        ]);
    }

    public function getEdit($id){
        $data = Cate::findOrFail($id);
        $parent = Cate::select('id', 'name', 'parent_id')->get();
        return view('admin.cate.cate_edit', compact('data', 'parent'));
    }

    public function postEdit(Request $request, $id){
        $this->validate(
            $request,
            [
                'txtCateName' => 'required',
                'txtOrder' => 'required',
                'txtKeywords' => 'required',
                'txtDescription' => 'required'
            ],
            [
                'txtCateName.required' => 'Category Name is required',
                'txtOrder.required' => 'Category Order is required',
                'txtKeywords.required' => 'Category Keywords is required',
                'txtDescription.required' => 'Category Description is required'
            ]
        );
        $cate = Cate::find($id);
        $cate->name = $request->txtCateName;
        $cate->alias = \Common::convert_vi_to_en($request->txtCateName);
        $cate->order = $request->txtOrder;
        $cate->parent_id = $request->sltParent;
        $cate->keywords = $request->txtKeywords;
        $cate->description = $request->txtDescription;
        $cate->save();
        return redirect()->route('admin.cates.getList')->with([
          'flash_level' => 'success',
          'flash_message' => \Message::UPDATE_SUCCESS
        ]);
    }

    public function getDelete($id){
        $parent = Cate::where('parent_id', $id)->count();
        if($parent == 0){
            Cate::find($id)->delete();
            return redirect()->route('admin.cates.getList')->with([
              'flash_level' => 'success',
              'flash_message' => \Message::DELETE_SUCCESS
            ]);
        }else{
            return redirect()->route('admin.cates.getList')->with([
              'flash_level' => 'warning',
              'flash_message' => \Message::DELETE_WARNING
            ]);
        }
    }
}
