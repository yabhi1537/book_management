@extends('layouts.main')

@section('content')

        <div class="container">
            <a href="{{ route('book-author.index') }}" class="btn btn-primary btn-sm">BACK</a>


            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                        <div class="col-lg-7">
                            <div class="p-5">
                                
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Edit Now!</h1>
                                </div>


                        <form class="user" action="{{ route('book-author.update',$data->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                        <div class="col-sm-6 mb-3 mb-sm-0">

                                     <input type="text" name="author_name" value="{{$data->author_name}}" class="form-control form-control-user" id="exampleFirstName"
                                                >
                                     @error('author_name')
                                        <span class=" text-danger">{{ $message }}</span>
                                     @enderror

                                        </div>
                                        
                                    <button type="submit"  class="btn btn-primary btn-user">
                                        Update data
                                    </button>
                                    

                                </form>
                               
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


@endsection
