<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\goodsarr;
use App\brandar;
use DB;
class GoodsController extends Controller
{
	//展示
    public function zhanshi(){
    	$goods_name=request()->goods_name;
    	$brandar_cid=request()->brandar_cid;
    	$where=[];
    	if($goods_name){
    		$where[]=['goods_name','like',"%$goods_name%"];
    	}
    	if($brandar_cid){
    		$where[]=['brandar_cid','=',$brandar_cid];
    	}

    	$goodsarr = goodsarr::all();
    	$brandar = brandar::all();
    	$pagesize = config('app.pagesize');
    	$goodsarr = goodsarr::orderBy('goodsarr_id','desc')->where($where)->paginate(2);
    	return view('/admin/goods/zhanshi',['goodsarr'=>$goodsarr,'brandar'=>$brandar,'goods_name'=>$goods_name]);
    }
    
    //添加页面
    public function tian(){
    	$brandar = brandar::all();
    	return view('/admin/goods/tian',['brandar'=>$brandar]);
    }

    //添加方法
    public function tianjia(Request $request){

  



    	$post = $request->except('_token');
    	if($request->hasFile('goods_file')){
    		$post['goods_file']=$this->upload('goods_file');
    	}

    	$res = goodsarr::create($post);
    	if($res){
    		return redirect('/goods/zhanshi');
    	}
    }

    //文件上传的方法
    public function upload($filename){
    	if(request()->file($filename)->isValid()){
    		$file = request()->$filename;
    		$path = $file->store('upload');
    		return $path;
    	}
    	exit('文件上传出错');
    }

    //修改页面
    public function xiu($id){
    	$goodsarr = DB::table('goodsarr')->where('goodsarr_id',$id)->first();
    	$brandar = brandar::all();
    	return view('/admin/goods/xiu',['brandar'=>$brandar,'goodsarr'=>$goodsarr]);
    }

    //修改方法
    public function xiugai(Request $request,$id){
    	$post = $request->except('_token');
    	if($request->hasFile('goods_file')){
    		$post['goods_file']=$this->upload('goods_file');
    	}
    	$goodsarr = goodsarr::find($id);
    	$res = DB::table('goodsarr')->where('goodsarr_id',$id)->update($post);
    	if($res){
    		return redirect('/goods/zhanshi');
    	}
    	if($res!==false){
    		return redirect('/goods/zhanshi');
    	}
    }

     //删除
    public function delete($id){
    	$res = DB::table('goodsarr')->where('goodsarr_id',$id)->delete();
    	if($res){
    		return redirect('/goods/zhanshi');
    	}
    }

}
