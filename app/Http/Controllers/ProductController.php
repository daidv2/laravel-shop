<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input, File;
use App\Cate;
use App\Product;
use App\ProductImage;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::select('id', 'name', 'price', 'created_at')->orderBy('id', 'DESC')->get();
        return view('admin.product.product_list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parent = Cate::select('id', 'name', 'parent_id')->get();
        return view('admin.product.product_add', compact('parent'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\ProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $product = new Product();
        $product->name = $request->txtName;
        $product->alias = \Common::convert_vi_to_en($request->txtName);
        $product->price = $request->txtPrice;
        $product->intro = $request->txtIntro;
        $product->content = $request->txtContent;
        $product->keywords = $request->txtKeywords;
        $product->description = $request->txtDescription;
        $product->user_id = 1;
        $product->cate_id = $request->sltParent;
        $file_name = $request->file('fImage')->store('upload');
        $product->image = $file_name;
        $product->save();
        $product_id = $product->id;
        if(Input::hasFile('fProductDetail')){
            foreach (Input::file('fProductDetail') as $file){
                $product_img = new ProductImage();
                if(isset($file)){
                    $file_name_img = $file->store('upload/detail');
                    $product_img->product_id = $product_id;
                    $product_img->image = $file_name_img;
                    $product_img->save();
                }
            }
        }
        return redirect()->route('products.index')->with([
          'flash_level' => 'success',
          'flash_message' => \Message::INSERT_SUCCESS
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Product::findOrFail($id);
        $parent = Cate::select('id', 'name', 'parent_id')->get();
        return view('admin.product.product_edit', compact('data', 'parent'));
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
        $product = Product::findOrFail($id);
        $product->name = $request->txtName;
        $product->alias = \Common::convert_vi_to_en($request->txtName);
        $product->price = $request->txtPrice;
        $product->intro = $request->txtIntro;
        $product->content = $request->txtContent;
        $product->keywords = $request->txtKeywords;
        $product->description = $request->txtDescription;
        $product->user_id = 1;
        $product->cate_id = $request->sltParent;
        if($request->hasFile('fImage')){
            if(File::exists($product->image)){
                File::delete($product->image);
            }
            $file_name = $request->file('fImage')->store('upload');
            $product->image = $file_name;
        }
        $product->save();
        //product detail
        if($request->hasFile('fProductDetail')){
            foreach ($request->file('fProductDetail') as $file){
                $product_img = new ProductImage();
                if(isset($file)){
                    $file_name_img = $file->store('upload/detail');
                    $product_img->product_id = $id;
                    $product_img->image = $file_name_img;
                    $product_img->save();
                }
            }
        }
        return redirect()->route('products.index')->with([
            'flash_level' => 'success',
            'flash_message' => \Message::UPDATE_SUCCESS
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product_detail = $product->product_images;
        foreach ($product_detail as $item){
            File::delete('upload/detail/' . $item->image);
        }
        File::delete('upload/'. $product->image);
        $product->delete();
        return redirect()->route('products.index')->with([
            'flash_level' => 'success',
            'flash_message' => \Message::DELETE_SUCCESS
        ]);
    }

    /**
     * Remove product detail.
     *
     * @return boolean
     */
    public function delete(Request $request)
    {
        if($request->ajax()){
            $id = (int)$request->input('id');
            $image_detail = ProductImage::find($id);
            if(!empty($image_detail)){
                if(File::exists($image_detail->image)){
                    File::delete($image_detail->image);
                }
                $image_detail->delete();
                return [
                    'status' => true,
                    'message' => \Message::DELETE_SUCCESS
                ];
            }
            return [
                'status' => false,
                'message' => \Message::DELETE_WARNING
            ];
        }
        return [
            'status' => false,
            'message' => \Message::DELETE_WARNING
        ];
    }
}
