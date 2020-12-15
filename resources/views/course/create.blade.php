@extends('layout.admin.app')

@section('content')
<div class="row">

    <div class="col-xl-8 order-xl-1">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Add A Course</h3>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @if(session('error'))
                <div class="alert alert-danger" role='alert'>
                    <i data-feather="alert-triangle" class="w-6 h-6 mr-2"></i>
                    <span><strong>Error!</strong> {{ session('error') }}!</span>
                    <i data-feather="x" class="w-4 h-4 ml-auto"></i>
                </div>
                @endif

                @if(session('success'))
                <div class="alert alert-success" role='alert'>
                    <i data-feather="alert-triangle" class="w-6 h-6 mr-2"></i>
                    <strong>Success!</strong> {{ session('success') }}
                    <i data-feather="x" class="w-4 h-4 ml-auto"></i>
                </div>
                @endif

                @if($errors->any())
                <div class="alert alert-danger" role='alert'>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="material-icons">close</i>
                    </button>
                    <span>
                        <div class="mt-3">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </span>
                </div>
                @endif
                <form action='{{route('course.store')}}' enctype='multipart/form-data' method='POST'>
                    @csrf
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-username">Title Of Course</label>
                                    <input type="text" name="name" class="form-control" placeholder="Message Title">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email"> Select Tutor</label>
                                    <select class="form-control" name='tutor'>
                                        @foreach($tutors as $tutor)
                                            <option value={{$tutor->id}}>{{$tutor->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Body</label>
                                    <textarea rows="4" class="form-control" name='body' placeholder="Your Article content goes here..." id='article-ckeditor'></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Select Cover Photo</label>
                                    <input type="file" name='photo' class="form-control">
                                </div>
                            </div>
                        </div>

                    </div>
                    <hr class="my-4" />
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
