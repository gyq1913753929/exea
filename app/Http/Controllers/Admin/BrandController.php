<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Brand;
use DB;
class BrandController extends Controller
{
	//添加页面
    public function create(){
    	return view('brand/create');
    }

    //添加方法
    public function store(Request $request){
    	$post = $request->except('_token');
    	$brand = new Brand;
    	$brand->brand_name =$post['brand_name'];
    	$brand->brand_gred = $post['brand_gred'];
    	$brand->brand_source  =$post['brand_source'];
    	$brand->brand_cell = $post['brand_cell'];
    	 $brand->cart_id = $post['cart_id'];

    	
    	$res = $brand->save();
    	if($res){
    		return redirect('brand/index');
    	}
    }

    //展示页面
    public function index(){
    	$brand = new Brand;
    	$brand = $brand->all();
    	return view('brand/index',['brand'=>$brand]);
    }

    //删除
    public function destroy($id){
    	$res = DB::table('brand')->where('brand_id',$id)->delete();
    	if($res){
    		return redirect('/brand/index');
    	}

	}

	//修改页面
	 public function update($id){
	 	$brand = DB::table('brand')->where('brand_id',$id)->first();
    	return view('brand/update',['brand'=>$brand]);
    }

    //修改方法
    public function edit(Request $request,$brand_id){
    	$post = $request->except('_token');
    	$brand = new Brand;
    	$brand->brand_name =$post['brand_name'];
    	$brand->brand_gred = $post['brand_gred'];
    	$brand->brand_source  =$post['brand_source'];
    	$brand->brand_cell = $post['brand_cell'];
    	$brand->cart_id = $post['cart_id'];

    	
    	$res = $brand->save();
    	if($res){
    		return redirect('brand/index');
    	}
    	if($res!==false){
    		return redirect('brand/index');
    	}
    }

}
