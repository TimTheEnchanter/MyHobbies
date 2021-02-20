@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">All Hobbies</div>

                    <div class="card-body">
                        <ul class="list-group">
                            @foreach($hobbies as $hobby)
                                <li class="list-group-item">
                                    <a title="Show Details" href="/hobby/{{ $hobby->id }}">{{ $hobby->Hobby }}</a>
                                    @auth
                                    <a class="btn btn-sm btn-light ml-3" href="/hobby/{{ $hobby->id }}/edit/"><i class="fas fa-edit"></i> Edit Hobby</a>
                                    <form class="float-right" action="/hobby/{{ $hobby->id }}" style="display: inline;" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input class="btn btn-sm btn-outline-danger" type="submit" value="Delete">
                                    </form>
                                    @endauth
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="mt-3">
                    {{$hobbies->links()}}
                </div>

                @auth
                <div class="mt-2">
                    <a class="btn btn-success btn-sm" href="/hobby/create"><i class="fas fa-plus-circle"></i> Create New Hobby</a>
                </div>
                @endauth

            </div>
        </div>
    </div>
@endsection
