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
                <form method="POST" enctype="multipart/form-data" action="{{route('admin.previous-question-paper.addPost')}}">
                    @csrf
                  <input type="hidden" name="form_id" value="{{$id ? $id : ''}}"/>
                  <div class="mb-3 input-group-decoration">
                    <label for="name" class="form-label">Exam Name</label>
                    <div class="input-group mb-3">
                      <input
                        type="text"
                        placeholder="Name"
                        class="form-control input"
                        id="name"
                        value="@isset($form_data['name']) {{$form_data['name']}}  @endisset"
                        name="name"
                      />
                    </div>
                    <label for="name" class="form-label">Category</label>
                        <div class="input-group mb-3">
                        <select name="category_id"  class="form-control">
                            <option></option>
                            @foreach($categories as $category)
                                <option @isset($form_data) {{$form_data['category_id'] && $form_data['category_id'] == $category->id ? 'selected' : ''}} @endisset  value="{{$category->id}}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <input type="hidden" name="previousQuestionLink" value="@isset($form_data){{ $form_data['link'] }}@endisset"/>

                    <label for="name" class="form-label">Year</label>
                        <div class="input-group mb-3">
                        <select name="year" class="form-control">
                            <option></option>
                            <?php 
                                $i=0;
                                  while($loopyear = date('Y', strtotime('+'.$i.' year')) != 2009){
                                    $loopyear = date('Y', strtotime('+'.$i.' year'));
                                    ?>
                                      <option @isset($form_data) {{$form_data['year'] == $loopyear ? 'selected' : ''}} @endisset value="{{ $loopyear }}">{{$loopyear}}</option>
                                    <?php
                                  $i--;  
                                }
                              ?>
                        </select>
                    </div>

                   
                    @isset($form_data)<a target="_blank" href="{{$form_data['link'] ? $form_data['link'] : ''}}">Download</a>@endisset
                    <label for="name" class="form-label">Attachment</label>
                    <div class="input-group mb-3">
                      <input
                        type="file"
                        placeholder="Exam Date"
                        class="form-control input"
                        id="attachment"
                        name="attachment"
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