@extends('admin.layouts.app')
@section('content')
<div class="container">
      @if(Session::get('success'))
                <div class="alert alert-success">
                    {{session::get('success')}}
                </div>
        @endif      
        <div class="row">
          <div class="col-md-12">
            <!-- datatables -->
            <div class="card my-3 border-top-thick">
              <div class="card-header d-flex align-items-center bg-white">
                <div class="fw-bold">Users</div>
                <button class="btn btn-outline-violet ms-auto">
                  <i class="las la-plus"></i>
                  Add User
                </button>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table
                    id="example"
                    class="table table-striped makeDatatable"
                    style="width: 100%"
                  >
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Mobile</th>
                        <th>Country</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>
                          <img
                            src="./images/top-nav-pic.jpg"
                            width="40px"
                            alt=""
                          />
                        </td>
                        <td>Demo Example</td>
                        <td>demo@example.com</td>
                        <td>User</td>
                        <td>1234567890</td>
                        <td>New York</td>
                        <td>
                          <span class="badge bg-success">Active</span>
                        </td>
                        <td>
                          <button class="btn btn-success">
                            <i class="las la-pencil-alt"></i>
                          </button>
                        </td>
                        <td>
                          <button class="btn btn-danger">
                            <i class="las la-trash-alt"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>
                          <img
                            src="./images/top-nav-pic.jpg"
                            width="40px"
                            alt=""
                          />
                        </td>
                        <td>Demo Example</td>
                        <td>demo@example.com</td>
                        <td>User</td>
                        <td>1234567890</td>
                        <td>New York</td>
                        <td>
                          <span class="badge bg-success">Active</span>
                        </td>
                        <td>
                          <button class="btn btn-success">
                            <i class="las la-pencil-alt"></i>
                          </button>
                        </td>
                        <td>
                          <button class="btn btn-danger">
                            <i class="las la-trash-alt"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>
                          <img
                            src="./images/top-nav-pic.jpg"
                            width="40px"
                            alt=""
                          />
                        </td>
                        <td>Demo Example</td>
                        <td>demo@example.com</td>
                        <td>User</td>
                        <td>1234567890</td>
                        <td>New York</td>
                        <td>
                          <span class="badge bg-success">Active</span>
                        </td>
                        <td>
                          <button class="btn btn-success">
                            <i class="las la-pencil-alt"></i>
                          </button>
                        </td>
                        <td>
                          <button class="btn btn-danger">
                            <i class="las la-trash-alt"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>
                          <img
                            src="./images/top-nav-pic.jpg"
                            width="40px"
                            alt=""
                          />
                        </td>
                        <td>Demo Example</td>
                        <td>demo@example.com</td>
                        <td>User</td>
                        <td>1234567890</td>
                        <td>New York</td>
                        <td>
                          <span class="badge bg-success">Active</span>
                        </td>
                        <td>
                          <button class="btn btn-success">
                            <i class="las la-pencil-alt"></i>
                          </button>
                        </td>
                        <td>
                          <button class="btn btn-danger">
                            <i class="las la-trash-alt"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>
                          <img
                            src="./images/top-nav-pic.jpg"
                            width="40px"
                            alt=""
                          />
                        </td>
                        <td>Demo Example</td>
                        <td>demo@example.com</td>
                        <td>User</td>
                        <td>1234567890</td>
                        <td>New York</td>
                        <td>
                          <span class="badge bg-success">Active</span>
                        </td>
                        <td>
                          <button class="btn btn-success">
                            <i class="las la-pencil-alt"></i>
                          </button>
                        </td>
                        <td>
                          <button class="btn btn-danger">
                            <i class="las la-trash-alt"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>
                          <img
                            src="./images/top-nav-pic.jpg"
                            width="40px"
                            alt=""
                          />
                        </td>
                        <td>Demo Example</td>
                        <td>demo@example.com</td>
                        <td>User</td>
                        <td>1234567890</td>
                        <td>New York</td>
                        <td>
                          <span class="badge bg-success">Active</span>
                        </td>
                        <td>
                          <button class="btn btn-success">
                            <i class="las la-pencil-alt"></i>
                          </button>
                        </td>
                        <td>
                          <button class="btn btn-danger">
                            <i class="las la-trash-alt"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>
                          <img
                            src="./images/top-nav-pic.jpg"
                            width="40px"
                            alt=""
                          />
                        </td>
                        <td>Demo Example</td>
                        <td>demo@example.com</td>
                        <td>User</td>
                        <td>1234567890</td>
                        <td>New York</td>
                        <td>
                          <span class="badge bg-success">Active</span>
                        </td>
                        <td>
                          <button class="btn btn-success">
                            <i class="las la-pencil-alt"></i>
                          </button>
                        </td>
                        <td>
                          <button class="btn btn-danger">
                            <i class="las la-trash-alt"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>
                          <img
                            src="./images/top-nav-pic.jpg"
                            width="40px"
                            alt=""
                          />
                        </td>
                        <td>Demo Example</td>
                        <td>demo@example.com</td>
                        <td>User</td>
                        <td>1234567890</td>
                        <td>New York</td>
                        <td>
                          <span class="badge bg-success">Active</span>
                        </td>
                        <td>
                          <button class="btn btn-success">
                            <i class="las la-pencil-alt"></i>
                          </button>
                        </td>
                        <td>
                          <button class="btn btn-danger">
                            <i class="las la-trash-alt"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>
                          <img
                            src="./images/top-nav-pic.jpg"
                            width="40px"
                            alt=""
                          />
                        </td>
                        <td>Demo Example</td>
                        <td>demo@example.com</td>
                        <td>User</td>
                        <td>1234567890</td>
                        <td>New York</td>
                        <td>
                          <span class="badge bg-success">Active</span>
                        </td>
                        <td>
                          <button class="btn btn-success">
                            <i class="las la-pencil-alt"></i>
                          </button>
                        </td>
                        <td>
                          <button class="btn btn-danger">
                            <i class="las la-trash-alt"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>
                          <img
                            src="./images/top-nav-pic.jpg"
                            width="40px"
                            alt=""
                          />
                        </td>
                        <td>Demo Example</td>
                        <td>demo@example.com</td>
                        <td>User</td>
                        <td>1234567890</td>
                        <td>New York</td>
                        <td>
                          <span class="badge bg-success">Active</span>
                        </td>
                        <td>
                          <button class="btn btn-success">
                            <i class="las la-pencil-alt"></i>
                          </button>
                        </td>
                        <td>
                          <button class="btn btn-danger">
                            <i class="las la-trash-alt"></i>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- data tables -->
          </div>
        </div>
      </div>
@endsection