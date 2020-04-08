<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{

    public function contact()
    {
    return view('pages.contact');
    }

    public function writePost()
    {
    return view('post.writepost');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function AddCategory()
    {
        return view('post.add_category');
    }

    


    public function StoreCategory(Request $myrequest)
    {   $validatedData = $myrequest->validate([
        // 'name' => 'required|unique:categories|max:25|min:4',
        // 'slug' => 'required|unique:categories|max:25|min:4',
        ]);

        $data = array();
        $data['name']= $myrequest->category;
        $data['slug']= $myrequest->slugx;
        $x = DB::table('categories')->insert($data);
        return Redirect()->back();

        // for cheking whether data is entering or not. 
        // return response()->json($data);
        // or
        // echo"<pre>";
        // print_r($data);
        // if($x) {
        //     $notification = array(
        //         'message'=>'Successffully Category Inserted',
        //         'alert-type'->'success'
        //     );
        //     return Redirect()->back()->with($notification);
        // }
        // else{
        //     $notification = array(
        //         'messege'=>'Wrong',
        //         'alert-type'->'error'
        //     );
        //     return Redirect()->back()->with($notification); 

        // }

    }

    public function AllCategory()
    {
        $x = DB::table('categories')->get();
        return view('post.all_category',compact('x'));
    }

    public function ViewCategory($id)
    {
         $x=DB::table('categories')->where('id',$id)->first();
         return view('post.categoryview')->with('cat',$x);
        
    }

    public function DeleteCategory($id)
    {
        $del=DB::table('categories')->where('id',$id)->delete();
         return Redirect()->back();
    }
}
