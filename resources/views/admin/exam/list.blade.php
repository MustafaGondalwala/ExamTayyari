@extends('admin.layouts.app')
@section('content')
<div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- datatables -->
            <div class="card my-3 border-top-thick">
              <div class="card-header d-flex align-items-center bg-white">
                <div class="fw-bold">Exam</div>
                <a href="{{route('admin.exam.add')}}" class="btn btn-outline-violet ms-auto">
                  <i class="las la-plus"></i>
                  Add Exam
                </a>
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
                        <th>Name</th>
                        <th>Category</th>
                        <th>Exam Date</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($all_data as $data)
                      <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->category_id}}</td>
                        <td>{{$data->date}}</td>
                        <td>
                            @if($data->status == 1)
                              <span class="badge bg-success">Active</span>
                            @else
                              <span class="badge bg-danger">InActive</span>
                            @endif
                          </td>
                        <td>
                            <a href="/admin/exam/{{$data->id}}" class="btn btn-success">
                              <i class="las la-pencil-alt"></i>
                            </a>
                          </td>
                          <td>
                            <a href="/admin/exam/{{$data->id}}/delete" class="btn btn-danger">
                              <i class="las la-trash-alt"></i>
                          </a>
                          </td>
                      </tr>

                      @endforeach
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