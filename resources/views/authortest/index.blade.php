@extends('layouts.main')

@section('content')

                                        
                    <!-- DataTales Example -->

    <a href="{{ route('trashedData')}}" class="btn btn-danger btn-sm end">
                              Trashed Author </a>   

                    <div class="card shadow ">

                        <div class="card-header">
                            <div>
                               <a href="{{ route('book-author.create') }}" class="btn btn-primary btn-sm">
                                Add-Author </a>
                            </div>
                            <h6 class="m-0 font-weight-bold text-success">Books Detaills</h6>

                        </div>
                         @if (session('success'))
                                <div class="col-sm-12">
                                    <div class="alert  alert-success alert-dismissible fade show" role="alert">
                                        {{ session('success') }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                    </div>
                                </div>
                            @endif


                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Aid</th>
                                            <th>Author Name</th>
                                            <th>Show</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                            
                                        </tr>
                                    </thead>

                                    <tbody>
                                 @php $count=1; @endphp

                                        @foreach($data as $name)
                                        <tr>
                                            <td>{{ $count++ }}</td>
                                            <td>{{$name->author_name}}</td>
                                         <td>
                                            <a href="{{ route('book-author.show',$name->id) }}" class="btn btn-success btn-sm" desabled>Show</a>
                                        </td>

                                         <td>
                                                <a href="{{ route('book-author.edit',$name->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                         </td>


                                    <td>
                                        
                                       <form action="{{ route('book-author.destroy',$name->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf

                                        <button type="submit" class=" btn btn-sm btn-danger">Delete</button>

                                     </form>

                                     </td>
                                        </tr>
                                     
                                      @endforeach
                                    </tbody>
                                </table>


                            </div>
                        </div>
                    </div>

                

@endsection



    
