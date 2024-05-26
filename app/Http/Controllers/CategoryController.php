<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {

        $categoryModel = new Category();
        $categories = $categoryModel->getParentCategories();
        $allCategories = $categoryModel->getAllCategories();

        return view('admin.manage-category', compact('categories'));
    }
    public function pageAddCategory()
    {
        return view('admin.add-category');
    }



    public function addCategory(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->parent_id = 0;
        $category->save();
        $request->session()->flash('add-success', 'Add category successfully!');

        return redirect()->route('admin.manage-category');
    }
    public function index_edit($id)
    {
        $category = Category::find($id);
        return view('admin.edit-category', ['category' => $category]);

    }

    public function editCategory(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category = Category::find($id);
        $category->name = $request->name;
        $category->save();

        $request->session()->flash('update-success', 'Update category successfully!');

        return redirect()->route('admin.manage-category');

    }

    public function deleteCategory(Request $request, $id)
    {
        $category = Category::find($id);

        // Kiểm tra xem danh mục có sản phẩm nào không
        if ($category->products()->count() > 0) {
            // Nếu có, trả về thông báo lỗi
            $request->session()->flash('delete-failure', 'Cannot delete category that has products.');
            return redirect()->back();
        }

        // Nếu không, xóa danh mục
        $category->delete();

        $request->session()->flash('delete-success', 'Category deleted successfully!');
        return redirect()->route('admin.manage-category');
    }



}
