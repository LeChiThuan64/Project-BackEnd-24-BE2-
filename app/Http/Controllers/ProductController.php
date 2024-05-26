<?php

namespace App\Http\Controllers;

use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Image;

class ProductController extends Controller
{
    public function showComparisonPage()
    {
        $compare = session('compare', []);  // Lấy mảng so sánh từ session, mặc định là một mảng rỗng
        return view('productComparison', ['compare' => $compare]);
    }

    // public function showComparisonPage()
    // {
    //     return view('productComparison');
    // }

    //soánh
    public function removeFromCompare($id)
    {
        $compare = session()->get('compare', []);
        if (array_key_exists($id, $compare)) {
            unset($compare[$id]); // Xóa sản phẩm khỏi mảng so sánh
            session()->put('compare', $compare); // Cập nhật lại session
        }
        return redirect()->back(); // Quay lại trang hiện tại
    }

    public function addToCompare(Request $request, $id)
    {
        $product = Product::find($id);
        $compare = session()->get('compare', []);

        // Kiểm tra xem sản phẩm đã có trong danh sách so sánh chưa
        if (!array_key_exists($id, $compare)) {
            $compare[$id] = [
                "name" => $product->name,
                "price" => $product->price,
                "image" => getImage($id),
                "description" => $product->description  // Thêm trường description
            ];
            session()->put('compare', $compare);
        }

        return redirect()->route('productComparison');
    }


    // Function lấy toàn bộ sản phẩm
    public function index()
    {
        $productModel = new Product();
        $products = $productModel->getAllProducts()->paginate(10); // Số sản phẩm trên mỗi trang
        return view('admin.manage-product', compact('products'));
    }
    

    // Hàm thêm sản phẩm
    public function add(Request $request)
    {
        $name = $request->input('name');
        $description = $request->input('description');
        $price = $request->input('price');
        $quantity = $request->input('quantity');
        $status = $request->input('status');
        $size = $request->input('size');
        $feature = $request->input('feature');
        $discount = $request->input('discount');
        $category_ids = $request->input('category_ids'); // Mảng ID của các danh mục

        // Sử dụng hàm store trong model để tạo sản phẩm mới
        $product = Product::store($name, $description, $price, $quantity, $status, $size, $feature, $discount);


        // Xử lý tệp hình ảnh được tải lên
        if ($request->hasFile('fileUpload')) {
            $file = $request->file('fileUpload');
            $filename = $name . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('app\images\products'), $filename);

            // Tạo một bản ghi hình ảnh mới
            $image = new Image;
            $image->name = $filename;
            $image->product_id = $product->id;
            $image->save();
        }


        // Tạo liên kết giữa sản phẩm và các danh mục
        $product->categories()->sync($category_ids);

        // Thêm thông báo flash
        $request->session()->flash('add-success', 'Add product successfully!');

        return redirect()->route('manage-product');
    }


    // Hiển thị form edit-product
    public function showEditProduct($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return redirect()->back()->with('error', 'Product not found');
        }

        // Lấy danh sách các danh mục để hiển thị trong form
        $categories = Category::all();

        return view('admin.form-edit-product', ['product' => $product, 'categories' => $categories]);
    }

    public function showAddProduct()
    {
        return view('admin.add-product');
    }

    // Sửa sản phẩm
    public function modify(Request $request, $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        $name = $request->input('name');
        $description = $request->input('description');
        $price = $request->input('price');
        $category_ids = $request->input('category_ids'); // Mảng ID của các danh mục

        // Xử lý tệp hình ảnh được tải lên
        if ($request->hasFile('fileUpload')) {
            $file = $request->file('fileUpload');
            // $filename = time() . '.' . $file->getClientOriginalExtension();
            $filename = $name . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('app\images\products'), $filename);

            // Tìm bản ghi hình ảnh hiện tại và cập nhật tên của nó
            $image = Image::where('product_id', $product->id)->first();
            if ($image) {
                $image->name = $filename;
                $image->save();
            }
        }

        $product->name = $name;
        $product->description = $description;
        $product->price = $price;
        $product->save();

        // Cập nhật liên kết giữa sản phẩm và các danh mục
        $product->categories()->sync($category_ids);

        // Thêm thông báo flash
        $request->session()->flash('update-success', 'Update product successfully!');

        return redirect()->route('manage-product');
    }


    // Hàm xoá sản phẩm
    // public function delete($id)
    // {
    //     $product = Product::find($id);

    //     if (!$product) {
    //         return response()->json(['message' => 'Product not found'], 404);
    //     }

    //     // Xoá tất cả hình ảnh liên quan
    //     foreach ($product->images as $image) {
    //         $image->delete();
    //     }

    //     // Xoá liên kết giữa sản phẩm và các danh mục
    //     $product->categories()->detach();

    //     // Xoá sản phẩm
    //     $product->delete();

    //     return redirect()->route('manage-product');
    // }

    // Xoá hình ảnh khỏi thư mục
    public function delete($id)
    {
        // Tìm sản phẩm theo ID
        $product = Product::find($id);

        // Xóa hình ảnh từ thư mục 'images'
        foreach ($product->images as $image) {
            $imagePath = public_path('app\images\products\\' . $image->name);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        // Xóa sản phẩm từ cơ sở dữ liệu
        $product->delete();

        return redirect()->route('manage-product');
    }

    public function filterProducts(Request $request)
    {
        $minPrice = $request->input('minPrice');
        $maxPrice = $request->input('maxPrice');

        $products = Product::whereBetween('price', [$minPrice, $maxPrice])->get();

        return view('category', compact('products'))->render();
    }

    // Sort
    public function sortProducts(Request $request)
    {
        $sortType = $request->input('sort');

        switch ($sortType) {
            case 'price_asc':
                $products = Product::orderBy('price', 'asc')->get();
                break;
            case 'price_desc':
                $products = Product::orderBy('price', 'desc')->get();
                break;
            case 'name_asc':
                $products = Product::orderBy('name', 'asc')->get();
                break;
            default:
                $products = Product::all();
                break;
        }

        return view('category', compact('products'));
    }
}
function getImage($id)
{
    $productM = new Product();
    $product = $productM->getProductDetails($id);
    foreach ($product->images as $image) {
        return $image->name;
    }
}
