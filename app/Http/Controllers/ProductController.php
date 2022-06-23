<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = 'Bảng sản phẩm';
        $data['categories'] = Category::all();
        $data['txt_search'] = $request->get('txt_search');
        $data['category_id'] = $request->get('category_id');

        $query = Product::join('categories', 'categories.id', '=', 'products.category_id')
                        ->select('products.*', 'categories.name as category_name')
                        ->where('products.name', 'like', '%' . $data['txt_search'] . '%');

        if($data['category_id']){
            $query->where('categories.id', $data['category_id']);
        }

        $data['products'] = $query->paginate(6)->withQueryString();
        
        return view('admin.product.index', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Thêm sản phẩm';
        $data['categories'] = Category::all();

        return view('admin.product.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'image' => 'required',
            'category_id' => 'required',
            'quantity' => 'required',
        ]);

        $product = new Product($request->all());

        $file = $_FILES['image']['tmp_name'];
        $path = "images/" . $_FILES['image']['name'];
        move_uploaded_file($file, $path);

        $product->image = $_FILES['image']['name'];

        if($request->discount == null){
            $product->discount = 0;
        }

        $product->save();

        return redirect('/admin/product')->with('success', 'Thêm sản phẩm thành công');
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
        $data['title'] = 'Sửa sản phẩm';
        $data['product'] = Product::find($id);
        $data['categories'] = Category::all();

        return view('admin.product.edit', $data);
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

        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'quantity' => 'required',
        ]);

        $product = Product::find($id);

        $product->name = $request->name;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->quantity = $request->quantity;
        $product->outstanding = $request->outstanding;
        $product->description = $request->description;
        $product->discount = $request->discount;

        if($request->discount == null){
            $product->discount = 0;
        }

        if($request->hasFile('image')) {
            $file = $_FILES['image']['tmp_name'];
            $path = "images/" . $_FILES['image']['name'];
            move_uploaded_file($file, $path);
            $product->image = $_FILES['image']['name'];
        }

        $product->save();

        return redirect('/admin/product')->with('success', 'Cập nhật sản phẩm thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect('/admin/product')->with('success', 'Xóa sản phẩm thành công');
    }
}
