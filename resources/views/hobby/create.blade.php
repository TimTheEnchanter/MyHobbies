@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Create New Hobby</div>
                    <div class="card-body">
                        <form autocomplete="off" action="/hobby" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Hobby</label>
                                <input type="text" class="form-control {{ $errors->has('Hobby') ? 'border-danger' : '' }}" id="Hobby" name="Hobby" value="{{old('Hobby')}}">
                                <small class="form-text text-danger">{!! $errors->first('Hobby') !!}</small>
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control {{ $errors->has('image') ? 'border-danger' : '' }}" id="image" name="image" value="">
                                <small class="form-text text-danger">{!! $errors->first('image') !!}</small>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control {{ $errors->has('Description') ? 'border-danger' : '' }}" id="Description" name="Description" rows="5">{{old('Description')}}</textarea>
                                <small class="form-text text-danger">{!! $errors->first('Description') !!}</small>
                            </div>
                            <input class="btn btn-primary mt-4" type="submit" value="Save Hobby">
                        </form>
                        <a class="btn btn-primary float-right" href="/hobby"><i class="fas fa-arrow-circle-up"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
