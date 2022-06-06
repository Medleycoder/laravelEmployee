@include('employee.includes.header')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-lg-6"><h1>Update User</h1></div>
                        <div class="col-lg-6 "><button class="btn btn-primary float-end">Back to table</button></div>
                    </div>

                    @foreach ($employee as $employees )
                    <div class="card-body">
                      <form action="{{ url('updateUser',$employees->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                            <input type="hidden" value="{{ $employees->id }}">                         
                          <div class="form-group">
                              <label for="name" class="form-label">Username</label>
                              <input type="text" class="form-control" value="{{ $employees->username }}" name="username">
                          </div>
                          <div class="form-group">
                              <label for="email" class="form-label">Email</label>
                              <input type="text" class="form-control" value="{{ $employees->email }}" name="email">
                          </div>
                          <div class="form-group">
                              <label for="phone" class="form-label">Phone</label>
                              <input type="number" class="form-control"  value="{{ $employees->phone }}" name="phone">
                          </div>
                          <div class="form-group">
                              <label for="gender" class="form-label">Gender</label>
                             <select name="gender" class="form-select" id="">{{ $employees->gender }}
                                  <option value="Male">Male</option>
                                  <option value="FeMale">FeMale</option>
                                  <option value="Dont prefer to say">Dont prefer to say</option>
                              </select>
                          </div>
                          <div class="form-group my-3">
                              <button type="submit" name="submit" class="w-100 btn btn-primary zoomIn">Update </button>
                          </div>
                        </form>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>


@include('employee.includes.footer')