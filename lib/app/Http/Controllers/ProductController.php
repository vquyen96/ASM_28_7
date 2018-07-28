<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cate;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['items'] = Product::paginate(10);

        return view('admin.product.product', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $data['cates'] = Cate::all();
        return view('admin.product.product_add', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new Product;
        $item->pro_name = $request->name;
        $item->pro_detail = $request->detail;
        $item->pro_cate_id = $request->cate;
        $item->pro_status = 1;
        if ($request->hasFile('img')) {
            $img = $request->img->getClientOriginalName();
            $item->pro_img = $img;
            $request->img->storeAs('product',$img);
        }
        $item->save();
        return redirect('product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['item'] = Product::find($id);
        return view('admin.product.product_detail', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['cates'] = Cate::all();
        $data['item'] = Product::find($id);
        return view('admin.product.product_add', $data);
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
        $item = Product::find($id);
        $item->pro_name = $request->name;
        $item->pro_detail = $request->detail;
        $item->pro_cate_id = $request->cate;
        $item->pro_status = 1;
        if ($request->hasFile('img')) {
            $img = $request->img->getClientOriginalName();
            $item->pro_img = $img;
            $request->img->storeAs('product',$img);
        }
        $item->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Product::destroy($id);
        return back();
    }
}
