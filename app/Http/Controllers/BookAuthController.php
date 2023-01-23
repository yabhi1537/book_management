<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;
use Session;

class BookAuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Author::get();

        return view('authortest.index',compact('data'));
    }


    public function trashed()
    {

       $data = Author::onlyTrashed()->get();

        return view('authortest.trashed',compact('data'));  
    }



    public function restore($id)
        {
           $restor = Author::withTrashed()->findOrFail($id);
           if (!empty($restor)) {
               $restor->restore();
           }

            return redirect()->back();  
        }

         public function deleteParmanet($id)
        {
           $restor = Author::withTrashed()->findOrFail($id);
           if (!empty($restor)) {
               $restor->forceDelete();
           }

            return redirect()->back();  
        }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('authortest.create');  

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    $data = new Author;

     $validatedData = $request->validate([
         'author_name' => 'required',
         
        ]);


    $data->author_name = $request->input('author_name');
    $data->save();

    return redirect()->back()->with('success', 'Your data has been add successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Author::find($id);
        return view('authortest.show',compact('data'));  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $data = Author::find($id);
       
        return view('authortest.edit',compact('data')); 
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
      $data =  Author::find($id);
      
      $validatedData = $request->validate([
         'author_name' => 'required',
         
        ]);

    $data->author_name = $request->input('author_name');
    $data->save();

    return redirect('book-author')->with('success', 'Your data has been updated successfully!');
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data =  Author::find($id);

        $data->delete();

     return redirect()->back()->with('success', 'Your data has been deleted successfully!'); 


    }
}
