@extends('layouts.main')

@section('content')

        <div class="container">

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
                                <form class="user" action="{{ route('allbooks-type.update',$data->id)}}" method="POST" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">

                                     <input type="text" name="book_name" value="{{ $data->book_name}}" class="form-control form-control-user text-center" id="exampleFirstName"
                                                placeholder="Book Name" disabled>

                                        </div>
                                        </div>
                                        <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">

                                     <input type="text" name="book_price" value="{{ $data->book_price}}" class="form-control form-control-user text-center" id="exampleFirstName"
                                                placeholder="Book Price" disabled>

                                        </div>
                                        </div>
                                        <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">

                                     <input type="text" name="book_titel" value="{{ $data->book_titel}}" class="form-control form-control-user text-center" id="exampleFirstName"
                                                placeholder="Book Titel" disabled>

                                        </div>
                                        </div>
                                        <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">

                                     <input type="text" name="book_description" value="{{ $data->book_description}}" class="form-control form-control-user text-center" id="exampleFirstName"
                                                placeholder="Book Description" disabled>

                                        </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">

                                     <input type="file" name="book_logo" value="{{ $data->book_logo}}" class="form-control form-control-user text-center" id="exampleFirstName"
                                                placeholder="Book Logo" disabled>

                                        </div>
                                        </div>
                                        <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">

                               
                                <select name="author_id" disabled >
                                        <option  >select auther</option>
                                         @foreach($auth as $author)
                                             <option value="{{ $author->id }}"
                                                {{ $author->id == $data->author_id ? 'selected' : '' }}>
                                                
                                                {{ $author->author_name }} 
                           
                                             </option>
                                        @endforeach
                                            </select>
                                               

                                        </div>
                                        </div>
                                        <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">

                                     <input type="file" name="book_image" value="{{ $data->book_image}}" class="form-control form-control-user text-center" id="exampleFirstName"
                                                placeholder="Book Image" disabled>

                                        </div>
                                        </div>
                                        
                                    


                                </form>
                               
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


@endsection
