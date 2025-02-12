<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use Barryvdh\DomPDF\Facade\Pdf;

class AdminController extends Controller
{
    // For Category AZM Start
    public function view_category()
    {
        $data = Category::all();
        return view('admin.categorys.category', compact('data'));
    }
    public function add_category(Request $request)
    {
        $category = new Category;
        $category->category_name = $request->category;
        $category->save();
        toastr()->closeButton()->timeOut(5000)->addSuccess('Category Added Successfully');
        return redirect()->back();
    }
    public function edit_category($id)
    {
        $data = Category::find($id);
        return view('admin.categorys.edit_category', compact('data'));
    }
    public function update_category(Request $request, $id)
    {
        $category = Category::find($id);
        $category->category_name = $request->category;
        $category->save();
        toastr()->closeButton()->timeOut(5000)->addSuccess('Category Updated Successfully');
        return redirect('/view_category');
    }
    public function delete_category($id)
    {
        $data = Category::find($id);
        $data->delete();
        toastr()->closeButton()->timeOut(5000)->addSuccess('Category Deleted Successfully');
        return redirect()->back();
    }
    // For Category AZM End

    // For Product AZM Start
    public function add_product()
    {
        $category = Category::all();
        return view('admin.products.add_product', compact('category'));
    }
    public function upload_product(Request $request)
    {
        $data = new Product;
        $data->title = request('title');
        $data->description = request('description');
        $data->price = request('price');
        $data->qty = request('qty');
        $data->category = request('category');
        $image = request('image');
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $image->move('productimage', $imagename);
            $data['image'] = $imagename;
        }
        $data->save();
        toastr()->closeButton()->timeOut(5000)->addSuccess('Product Added Successfully');
        return redirect('admin.products.view_product');
    }
    public function view_product()
    {
        $product = Product::paginate(5);  // Paginate by 5 products per page
        return view('admin.products.view_product', compact('product'));
    }
    public function update_product($id)
    {
        $data = Product::find($id);
        $category = Category::all();
        return view('admin.products.update_page', compact('data', 'category'));
    }
    public function edit_product(Request $request, $id)
    {
        $data = Product::find($id);
        $data->title = request('title');
        $data->description = request('description');
        $data->price = request('price');
        $data->qty = request('qty');
        $data->category = request('category');
        $image = request('image');
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $image->move('productimage', $imagename);
            $data['image'] = $imagename;
        }
        $data->save();
        toastr()->closeButton()->timeOut(5000)->addSuccess('Product Added Successfully');
        return redirect('/view_product');
    }
    public function delete_product($id)
    {
        $data = Product::find($id);
        $image_path = public_path('productimage/' . $data->image);
        if (file_exists($image_path)) {
            unlink($image_path);
        }
        $data->delete();
        toastr()->closeButton()->timeOut(5000)->addSuccess('Product Deleted Successfully');
        return redirect()->back();
    }
    public function product_search(Request $request)
    {
        $search = $request->search;
        $product = Product::where('title', 'LIKE', '%' . $search . '%')->orWhere('category', 'LIKE', '%' . $search . '%')->paginate(2);
        return view('admin.products.view_product', compact('product'));
    }
    public function view_order(Request $request)
    {
        $data = Order::all();
        // $data = Order::with('product')->get();
        return view('admin.orders.order', compact('data'));
    }
    public function on_way($id)
    {
        $data = Order::find($id);
        $data->status = 'On the Way';
        $data->save();
        return redirect('/view_order');
    }
    public function delivered($id)
    {
        $data = Order::find($id);
        $data->status = 'delivered';
        $data->save();
        return redirect('/view_order');
    }
    public function print_pdf($id)
    {
        $data = Order::find($id);
        $pdf = Pdf::loadView('admin.orders.invoice', compact('data'));
        return $pdf->download('invoice.pdf');
    }
    // For Product AZM End
}
