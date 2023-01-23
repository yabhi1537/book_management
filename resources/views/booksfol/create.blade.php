@extends('layouts.main')

@section('content')

        <div class="container">
<a href="{{ route('allbooks-type.index') }}" class="btn btn-success btn-sm">BACK</a>
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                        <div class="col-lg-7">
                            <div class="p-5">


                                <div class="">
                                    <h1 class="h4 text-gray-900 mb-4">Register Book Now!</h1>
                                </div>
                                <form class="user" action="{{ route('allbooks-type.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">

                                     <input type="text" name="book_name" class="form-control form-control-user text-center" id="exampleFirstName"
                                                placeholder="Book Name">
                                     @error('book_name')
                                        <span class=" text-danger">{{ $message }}</span>
                                     @enderror


                                        </div>
                                        </div>
                                        <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">

                                      <input type="text" name="book_price" class="form-control form-control-user text-center" id="exampleFirstName"
                                                placeholder="Book Price">
                                      @error('book_price')
                                        <span class=" text-danger">{{ $message }}</span>
                                      @enderror

                                        </div>
                                        </div>
                                        <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">

                                     <input type="text" name="book_titel" class="form-control form-control-user text-center" id="exampleFirstName"
                                                placeholder="Book Titel">
                                     @error('book_titel')
                                        <span class=" text-danger">{{ $message }}</span>
                                     @enderror

                                        </div>
                                        </div>
                                        <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">

                                     <input type="text" name="book_description" class="form-control form-control-user text-center" id="exampleFirstName"
                                                placeholder="Book Description">
                                     @error('book_description')
                                        <span class=" text-danger">{{ $message }}</span>
                                     @enderror

                                        </div>
                                        </div>
                                        
                                       
                                        <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">

                                  
                                     <select name="author_id"  >
                                        <option  >Author Name</option>

                                         @foreach($data as $author)

                                     <option value="{{ $author->id }}">{{ $author->author_name }} </option>

                                     @endforeach    
                                    </select>
                                
                                
                                @error('author_id')
                                     <span class=" text-danger">{{ $message }}</span>
                                @enderror

                                        </div>
                                        </div>
                                         <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <option>Logo uplode</option>
                                     <input type="file" name="book_logo" class="form-control form-control-user text-center" id="exampleFirstName"
                                                placeholder="Book Logo">
                                    @error('book_logo')
                                        <span class=" text-danger">{{ $message }}</span>
                                     @enderror

                                        </div>
                                        </div>
                                        <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <option>Image uplode</option>


                                     <input type="file" name="book_image" class="form-control form-control-user text-center" id="exampleFirstName"
                                                placeholder="Book Image">
                                    @error('book_image')
                                        <span class=" text-danger">{{ $message }}</span>
                                     @enderror

                                        </div>
                                        </div>
                                        
                                    <button type="submit"  class="btn btn-primary btn-user">
                                        Add Books
                                    </button>


                                </form>
                               
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


@endsection
