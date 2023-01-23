<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\book;
use App\Author;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = book::get();
        // return view('booksfol.index',compact('data'));

         $data = book::with('authorId')->get();
         
         return view('booksfol.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Author::get();
       return view('booksfol.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $data = new book;
         

         $validatedData = $request->validate([
         'book_name' => 'required',
         'book_price' => 'required',
         'book_titel' => 'required',
         'book_description' => 'required',
         'author_id' => 'required',
         'book_logo' => 'required',
         'book_image' => 'required',
 
        ]);
         

         $data->book_name = $request->input('book_name');
         $data->book_price = $request->input('book_price');
         $data->book_titel = $request->input('book_titel');
         $data->book_description = $request->input('book_description');
         $data->author_id = $request->input('author_id');
         
// book_logo uplode // 

        if($request->file('book_logo'))
        {
        $file = $request->file('book_logo');
        $extention = $file->getClientOriginalExtension();
        $filename = time().'.'.$extention;
        $file->move('photos', $filename);
        $data->book_logo=$filename;
        }

// imageuplode

        if($request->file('book_image'))
        {
        $file = $request->file('book_image');
        $extention = $file->getClientOriginalExtension();
        $filename = time().'.'.$extention;
        $file->move('images', $filename);
        $data->book_image=$filename;
     
    }

        $data->save();

        return redirect()->back()->with('message', 'Books created successfully!');
 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = book::with('authorId')->where('id',$id)->first();

         $auth = Author::get();

       return view('booksfol.show',compact('data','auth'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $data = book::with('authorId')->where('id',$id)->first();

         $auth = Author::get();

       return view('booksfol.edit',compact('data','auth'));
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
        $data = book::find($id);
         

         $validatedData = $request->validate([
         'book_name' => 'required',
         'book_price' => 'required',
         'book_titel' => 'required',
         'book_description' => 'required',
         'author_id' => 'required',
         'book_logo' => 'required',
         'book_image' => 'required',
 
        ]);


         $data->book_name = $request->input('book_name');
         $data->book_price = $request->input('book_price');
         $data->book_titel = $request->input('book_titel');
         $data->book_description = $request->input('book_description');
         $data->author_id = $request->input('author_id');

// book_logo uplode // 

        if($request->file('book_logo'))
        {
        $file = $request->file('book_logo');
        $extention = $file->getClientOriginalExtension();
        $filename = time().'.'.$extention;
        $file->move('photos', $filename);
        $data->book_logo=$filename;
        }

// imageuplode //
        
        if($request->file('book_image'))
        {
        $file = $request->file('book_image');
        $extention = $file->getClientOriginalExtension();
        $filename = time().'.'.$extention;
        $file->move('images', $filename);
        $data->book_image=$filename;
    }
 
        $data->save();

        return redirect()->back()->with('message', 'Books created successfully!');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data =  book::find($id);

        $data->delete();

     return redirect()->back();

        
    }
}
