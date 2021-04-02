@extends('admin.layouts.app')
@section('content')
<div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- datatables -->
            <div class="card my-3 border-top-thick">
              <div class="card-header d-flex align-items-center bg-white">
                <div class="fw-bold">{{$heading}}</div>
                <a href="{{route('admin.previous-question-paper.add')}}" class="btn btn-outline-violet ms-auto">
                  <i class="las la-plus"></i>
                  Add Previous Questions Paper
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
                        <th>Year</th>
                        <th>Category</th>
                        <th>Download</th>
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
                        <td>{{$data->year}}</td>
                        <td>{{$data->category_id}}</td>
                        <td><a href="{{$data->link}}">Download</td>
                        <td>
                            @if($data->status == 1)
                              <span class="badge bg-success">Active</span>
                            @else
                              <span class="badge bg-danger">InActive</span>
                            @endif
                          </td>
                        <td>
                            <a href="/admin/previous-question-paper/{{$data->id}}" class="btn btn-success">
                              <i class="las la-pencil-alt"></i>
                            </a>
                          </td>
                          <td>
                            <a href="/admin/previous-question-paper/{{$data->id}}/delete" class="btn btn-danger">
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