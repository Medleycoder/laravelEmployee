@include('employee.includes.header')


<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-lg-6"><h1>Add New User</h1></div>
                        <div class="col-lg-6 "><a href="{{ url('/') }}" class="btn btn-primary float-end">Back to table</a></div>
                    </div>

                    <div class="card-body">
                      <form action="{{ url('addUser') }}" method="POST">
                        @csrf
                          <div class="form-group">
                              <label for="name" class="form-label">Username</label>
                              <input type="text" class="form-control" placeholder="Enter UserName" name="username">
                          </div>
                          <div class="form-group">
                              <label for="email" class="form-label">Email</label>
                              <input type="text" class="form-control" placeholder="Enter Email" name="email">
                          </div>
                          <div class="form-group">
                              <label for="phone" class="form-label">Phone</label>
                              <input type="number" class="form-control" placeholder="Enter Number" name="phone">
                          </div>
                          <div class="form-group">
                              <label for="gender" class="form-label">Gender</label>
                              <select class="form-select custom-select" name="gender" id="">
                                  <option value="">--Select--Gender--</option>
                                  <option value="Male">Male</option>
                                  <option value="FeMale">Female</option>
                                  <option value="Not prefer to say">Dont prefer to say</option>
                              </select>
                          </div>
                          <div class="form-group my-3">
                              <button type="submit" name="submit" class="w-100 btn btn-success zoomIn">Submit </button>
                          </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@include('employee.includes.footer')