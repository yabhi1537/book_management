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
                                    <h1 class="h4 text-gray-900 mb-4">Show Now!</h1>
                                </div>


                        <form class="user" action="{{ route('book-author.show',$data->id) }}" method="POST">
                                    
                                    

                                        <div class="col-sm-6 mb-3 mb-sm-0">

                                     <input type="text" name="author_name" value="{{$data->author_name}}" class="form-control form-control-user" id="exampleFirstName"
                                           disabled     >

                                        </div>
                                        
                                    
                                    

                                </form>
                               
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


@endsection
