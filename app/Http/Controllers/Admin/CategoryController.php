<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
//    首页
    public function index()
    {
        $categories = Category::paginate(2);//分页
//        $categories = Category::all ();//获取categories表所有数据
//        dd ($categories->all ());
//        加载静态模版，加载的时候给模版传过去一个值
        return view ('admin.category.index',compact ('categories'));
    }

//    添加
    public function create()
    {

        return view ('admin.category.create');
    }

//    储存
    public function store(CategoryRequest $request)
    {
//        $request  拿到用户添加栏目的所有数据
//        dd ($request->all ());
//        Category 模型
//        调用模型里面的方法   这个方法是框架内定 帮助我们处理拿过来的用户数据
        Category::create($request->all ());
//        框架内定的方法已经帮助我们处理完用户数据
//        所以我们之间返回操作成功就好
        return redirect()->route('admin.category.index')->with('success','操作成功');
    }


//     编辑
    public function edit(Category $category)
    {
        //dd ($category->all ());
        return view ('admin.category.edit',compact ('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
//    接收编辑数据
    public function update(CategoryRequest $request, Category $category)
    {
//        dd ($category);
        $category->update ($request->all ());
       return redirect ()->route ('admin.category.index')->with ('success','成功');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
//        dd ($category);
       $category->delete ();

        return redirect ()->route ('admin.category.index')->with ('success','成功');
    }
}
