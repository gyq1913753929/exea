<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
//use App\Custorm;
class CustormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $custorm = DB::table('custorm')->get();
        //$custorm = Custorm::orderBy('c_id','desc')->pageinate(3);
        return view('admin.custorm.index',['custorm'=>$custorm]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.custorm.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = request()->except(['_token']);
        $post['c_time'] = time();
        $post['cc_time'] = time();
        // $c_name = $request->c_name;
        //dd($post);
        $res = DB::table('custorm')->insert($post);
        if($res){
            return redirect('/custorm');
        }
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
        $custorm = DB::table('custorm')->where('c_id',$id)->first();
        return view('admin.custorm.edit',['custorm'=>$custorm]);
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
        $post = $request->except('_token');
        $res = DB::table('custorm')->where('c_id',$id)->update($post);
        if($res!==false){
            return redirect('/custorm');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res = DB::table('custorm')->where('c_id',$id)->delete();
        if($res){
            return redirect('/custorm');
        }
    }
}
