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
                <form method="POST" action="{{route('admin.category.addPost')}}">
                    @csrf
                  <input type="hidden" name="form_id" value="{{$id ? $id : ''}}"/>
                  <div class="mb-3 input-group-decoration">
                    <label for="name" class="form-label">Category Name</label>
                    <div class="input-group mb-3">
                      <input
                        type="text"
                        placeholder="Category Name"
                        class="form-control input"
                        id="category_name"
                        value="@isset($form_data['name']) {{$form_data['name']}}  @endisset"
                        name="category_name"
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