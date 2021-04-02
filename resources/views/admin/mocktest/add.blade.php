@extends('admin.layouts.app')
@section('content')
<div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card my-3">
              <div class="card-header bg-transparent py-3">{{$heading}}</div>
              <div class="card-body">
              @if (count($errors) > 0)
                <div class = "alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="POST" enctype="multipart/form-data" action="{{route('admin.mock-test.addPost')}}">
                    @csrf
                  <input type="hidden" name="form_id" value="{{$id ? $id : ''}}"/>
                  <div class="mb-3 input-group-decoration">
                    <label for="name" class="form-label">Exam</label>
                        <div class="input-group mb-3">
                        <select name="exam_id"  class="form-control">
                            <option></option>
                            @foreach($exam as $e)
                                <option @isset($form_data) {{$form_data['exam_id'] && $form_data['exam_id'] == $e->id ? 'selected' : ''}} @endisset  value="{{$e->id}}">{{ $e->name }}</option>
                            @endforeach
                        </select>
                    </div>


                    <label for="name" class="form-label">Date</label>
                    <div class="input-group mb-3">
                      <input
                        type="date"
                        placeholder="Name"
                        class="form-control input"
                        id="date"
                        value="@isset($form_data['date']) {{$form_data['date']}}  @endisset"
                        name="date"
                      />
                    </div>

                    <label for="name" class="form-label">Start Time</label>
                    <div class="input-group mb-3">
                      <input
                        type="time"
                        placeholder="Name"
                        class="form-control input"
                        id="start_time"
                        value="@isset($form_data['start_time']) {{$form_data['start_time']}}  @endisset"
                        name="start_time"
                      />
                    </div>
                    <label for="name" class="form-label">Edn Time</label>
                    <div class="input-group mb-3">
                      <input
                        type="time"
                        placeholder="Name"
                        class="form-control input"
                        id="end_time"
                        value="@isset($form_data['end_time']) {{$form_data['end_time']}}  @endisset"
                        name="end_time"
                      />
                    </div>

                    <label for="name" class="form-label">Status</label>
                        <div class="input-group mb-3">
                        <select name="status"  class="form-control">
                            <option></option>
                            <option value="1" @isset($form_data) {{$form_data['status'] && $form_data['status'] == 1 ? 'selected' : ''}} @endisset >Active</option>
                            <option value="0" @isset($form_data) {{$form_data['status'] && $form_data['status'] == 0 ? 'selected' : ''}} @endisset >InActive</option>
                        </select>
                        </div>
                    </div>
                    <input
                      type="submit"
                      class="btn bg-violet px-4 py-2 text-white mt-3"
                      />
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection