@extends('layouts.main')

@section('content')

                    <!-- DataTales Example -->
                   

                    <div class="card shadow ">
                        <div class="card-header">
                             <a href="{{ route('allbooks-type.create') }}" class="btn btn-success btn-sm">Add Books Now</a>
                            <h6 class="m-0 font-weight-bold text-primary">Books Detaills</h6>

                        </div>



                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    
                                    <thead>
                                        <tr>
                                            <th>Books No.</th>
                                            <th>Books Name</th>
                                            <th>Books Price</th>

                                            <th>Books Titil</th>
                                            <th>Books Description</th>
                                            <th>Books Image</th>
                                            <th>Books Logo</th>
                                            <th>Author Name</th>
                                            <th>Show</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $count = 1; @endphp
                                         @foreach($data as $books)

                                        <tr>
                                            
                                            <td>{{ $count++ }}</td>
                                            <td>{{ $books->book_name }}</td>
                                            <td>{{ $books->book_price }}</td>
                                            <td>{{ $books->book_titel }}</td>
                                            <td>{{ $books->book_description }}</td>
                                            <!-- <td>{{ $books->book_image }}</td> -->
                                            <td>

                                               <img src="{{ asset('images/'.$books->book_image) }}" width="100px" height="80px">

                                            </td>
                                            <!-- <td>{{ $books->book_logo }}</td> -->
                                            <td>

                                               <img src="{{ asset('photos/'.$books->book_logo) }}" width="100px" height="80px">

                                            </td>

                                            <td>
                                                {{ $books->authorId ? $books->authorId->author_name : '' }}

                                            </td>
                                            <td>
                                                <a class="btn btn-success btn-sm" href="{{ route('allbooks-type.show',$books->id)}}">Show</a>

                                            </td>
                                            <td>
                                                <a class="btn btn-primary btn-sm" href="{{ route('allbooks-type.edit',$books->id) }}">Edit</a>
                                            </td>
                                             <td>
                                            <form action="{{ route('allbooks-type.destroy',$books->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf

                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>  

                                            </form>
                                                
                                            </td>
                                         
                                        </tr>
                                     
                                      
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>

                

@endsection
