<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\User;
use Image;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.home.index');
    }
    
    public function addCategory(){
        return view('admin.categories.add-category');
    }
    
    public function newCategory(Request $request){
        $category = new Category();
        $categoryImage = $request->file('image');
        
        $rand1 = rand(1000,9999);
        $rand2 = rand(1000,9999);
        
        $fileType  = $categoryImage->getClientOriginalExtension();
        $imageName = $rand1.$rand2 . '.' . $fileType;
        $directory = 'category-images/';
        $img       = Image::make($categoryImage)->resize(65, 65)->save($directory . $imageName);
        
        $category->name     = $request->name;
        $category->title     = $request->title;
        $category->image     = $directory.$imageName;
        $category->status   = $request->status;
        $category->save();
        return back()->with('message','Category created successfully!!');
    }
    
    
    public function manageCategory(){
        
        return view('admin.categories.manage-category',[
            'categories' => Category::where('parent_id',0)->get()
        ]);
        
    }
    
    public function editCategory($id){
        
        return view('admin.categories.edit-category',[
            'category' => Category::find($id)
        ]);
    }
    
    public function updateCategory(Request $request){
        
        $categoryImage = $request->file('image');
        
        if ($categoryImage) {
            // code...
            $rand1 = rand(1000,9999);
            $rand2 = rand(1000,9999);
            
            $fileType  = $categoryImage->getClientOriginalExtension();
            $imageName = $rand1.$rand2 . '.' . $fileType;
            $directory = 'category-images/';
            $img       = Image::make($categoryImage)->resize(65, 65)->save($directory . $imageName);
            
            $category = Category::find($request->id);
            $category->name        = $request->name;
            $category->title        = $request->title;
            $category->image     = $directory.$imageName;
            $category->status   = $request->status;
            $category->save();
        }
        
        else{
            $category = Category::find($request->id);
            $category->name        = $request->name;
            $category->title        = $request->title;
            $category->status   = $request->status;
            $category->save(); 
        }
        
        
        
        return redirect('/admin/manage-category/')->with('message','Category updated successfully!!');
        
    }
    
    public function deleteCategory(Request $request){
        
        
        
        $category = Category::find($request->id);
        $category->delete();
        return redirect('/admin/manage-category/')->with('message','Category deleted successfully!!');
        
        
        
    }
    
    public function addSubCategory($id){
        $parent_id = $id;
        return view('admin.subcategories.add-subcategory',compact('parent_id'));
    }
    
    public function newSubCategory(Request $request){
        $category = new Category();
        $category->name     = $request->name;
        $category->title     = $request->title;
        $category->status   = $request->status;
        $category->parent_id   = $request->parent_id;
        $category->save();
        return redirect('/admin/manage-category/')->with('message','Sub Category created successfully!!');
    }
    
    
    public function manageSubCategory($id){
        
        $parent_id = $id;
        $categories = Category::where('parent_id',$id)->get();
        return view('admin.subcategories.manage-subcategory',compact('categories','parent_id'));
        
    }
    
    public function editSubCategory($id){
        
        return view('admin.subcategories.edit-subcategory',[
            'category' => Category::find($id)
        ]);
    }
    
    public function updateSubCategory(Request $request){
        
        $category = Category::find($request->id);
        $category->name        = $request->name;
        $category->title        = $request->title;
        $category->status   = $request->status;
        $category->save();
        
        return redirect('/admin/manage-category/')->with('message','Category updated successfully!!');
        
    }
    
    public function deleteSubCategory(Request $request){
        
        $category = Category::find($request->id);
        $category->delete();
        return redirect('/admin/manage-category/')->with('message','Category deleted successfully!!');
    }

    public function manageUsers(){
        return view('admin.users.manage-users',[
            'users' => User::all()
        ]);   
    }

    public function changeUserStatus($id){
        $user = User::find($id);
        //return $user;
        if($user->status == 1){
            $user->status = '0';
        }
        else{
            $user->status = '1';
        }
        $user->save();
        return redirect()->back();
    }
}
