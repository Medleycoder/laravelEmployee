@include('employee.includes.header');

@if (session()->has('message'))

<div class="alert alert-success alert-dismissible" role="alert">
    {{ session()->get('message') }}
    <button type="button" class="close float-end" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div>
    
@endif
    
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-6"><h1>Employee's Table</h1></div>
                            <div class="col-lg-6 "><a href="{{ url('/formUser') }}" class="btn btn-primary float-end">Add Employee</a></div>
                        </div>

                        <div class="card-body">
                            <table class="table">
                                <thead class="table-dark">
                                    <tr>
                                        <td>#</td>
                                        <td>Username</td>
                                        <td>Email</td>
                                        <td>Phone</td>
                                        <td>Gender</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($post as $posts )
                                
                                    <tr>
                                        <td>{{ $posts->id }}</td>
                                        <td>{{ $posts->username }}</td>
                                        <td>{{ $posts->email }}</td>
                                        <td>{{ $posts->phone }}</td>
                                        <td>{{ $posts->gender }}</td>
                                        <td>
                                         <span>
                                            <a href="{{ url('update_employee',$posts->id) }}"><i class="fa-solid fa-pen text-dark fa-2x"></i></a>
                                         </span>
                                         <span>
                                            <a href="{{ url('delete_employee',$posts->id) }}"  onclick="return confirm('Are you sure!!')" ><i class="fa-solid fa-trash-can text-dark fa-2x"></i></a>
                                             {{-- <form action="/delete_employee/{{ $employees->id }}">
                                            @csrf
                                            @method('delete')
                                            <a href="{{ url('delete_employee',$posts->id) }}"  onclick="return confirm('Are you sure!!')" ><i class="fa-solid fa-trash-can text-dark fa-2x"></i></a>
                                        </form> --}}
                                        </span>
                                        </td>
                                        
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $post->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    @include('employee.includes.footer');