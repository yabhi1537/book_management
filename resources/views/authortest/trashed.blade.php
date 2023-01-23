@extends('layouts.main')

@section('content')

                                        
                    <!-- DataTales Example -->
<a href="{{ route('book-author.index') }}" class="btn btn-primary btn-sm">
       BACK </a>
       <!-- <a href="{{ route('trashedData')}}" class="btn btn-danger btn-sm">
       Trashed Author </a> -->

                    <div class="card shadow ">
                        <div class="card-header">
                            <h6 class="m-0 font-weight-bold text-primary">Books Detaills</h6>
                        </div>


                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Aid</th>
                                            <th>Author Name</th>
                                            <th>Show</th>
                                            <th>Edit</th>
                                            <th>Parmanetly Delete</th>
                                            
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
                                                <a href="{{ route('restoreData',$name->id) }}" class="btn btn-primary btn-sm">Restore</a>
                                         </td>


                                    <td>
                                        
                                       <form action="{{ route('deleteParmanet',$name->id) }}" method="POST">
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
