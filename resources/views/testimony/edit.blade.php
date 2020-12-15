@extends('layout.admin.app')

@section('content')
<div class="row">

    <div class="col-xl-8 order-xl-1">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Add A Testimony</h3>
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
                <form action='{{route('testimony.update', $testimony->id)}}' enctype='multipart/form-data' method='POST'>
                    @csrf
                    @method('PUT')
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-username">Testifier</label>
                                    <input type="text" name="testifier" class="form-control" placeholder="Name of Testifier" value={{$testimony->testifier}}>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Testimony</label>
                                    <textarea rows="4" class="form-control" name='testimony' placeholder="Testimony goes here" id='article-ckeditor'>{{$testimony->testimony}}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Select Testifier Photo</label>
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
