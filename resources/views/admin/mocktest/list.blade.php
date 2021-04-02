@extends('admin.layouts.app')
@section('content')
<div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- datatables -->
            <div class="card my-3 border-top-thick">
              <div class="card-header d-flex align-items-center bg-white">
                <div class="fw-bold">{{$heading}}</div>
                <a href="{{route('admin.mock-test.add')}}" class="btn btn-outline-violet ms-auto">
                  <i class="las la-plus"></i>
                  Add Mock Test
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
                        <th>Exam</th>
                        <th>Date</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($all_data as $data)
                      <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->exam_id}}</td>
                        <td>{{$data->date}}</td>
                        <td>{{$data->start_time}}</td>
                        <td>{{$data->end_time}}</td>
                        <td>
                            @if($data->status == 1)
                              <span class="badge bg-success">Active</span>
                            @else
                              <span class="badge bg-danger">InActive</span>
                            @endif
                          </td>
                        <td>
                            <a href="/admin/mock-test/{{$data->id}}" class="btn btn-success">
                              <i class="las la-pencil-alt"></i>
                            </a>
                          </td>
                          <td>
                            <a href="/admin/mock-test/{{$data->id}}/delete" class="btn btn-danger">
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