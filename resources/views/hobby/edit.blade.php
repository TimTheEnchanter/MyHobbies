@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit Hobby</div>
                    <div class="card-body">
                        <form action="/hobby/{{ $hobby->id }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Hobby</label>
                                <input type="text" class="form-control {{ $errors->has('Hobby') ? 'border-danger' : '' }}" id="Hobby" name="Hobby" value="{{ $hobby->Hobby ?? old('Hobby')}}">
                                <small class="form-text text-danger">{!! $errors->first('Hobby') !!}</small>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control {{ $errors->has('Description') ? 'border-danger' : '' }}" id="Description" name="Description" rows="5">{{ $hobby->Description ?? old('Description')}}</textarea>
                                <small class="form-text text-danger">{!! $errors->first('Description') !!}</small>
                            </div>
                            <input class="btn btn-primary mt-4" type="submit" value="Update Hobby">
                        </form>
                        <a class="btn btn-primary float-right" href="/hobby"><i class="fas fa-arrow-circle-up"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
