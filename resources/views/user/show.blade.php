@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div style="font-size: 150%;" class="card-header">{{ $user->name }}</div>

                    <div class="card-body">
                        <b>My Motto: <br/>{{$user->motto}}</b>
                        <p class="mt-2"><b>About Me:</b> <br/>{{$user->about_me}}</p>

                        <h5>Hobbies of {{$user->name}}</h5>
                        <ul class="list-group">
                            @if($user->hobbies->count() > 0)
                                @foreach($user->hobbies as $hobby)
                                    <li class="list-group-item">
                                        <a title="Show Details" href="/hobby/{{ $hobby->id }}">{{ $hobby->Hobby }}</a>


                                        <span class="float-right mx-2">{{ $hobby->created_at->diffForHumans() }}</span>
                                        <br/>
                                        @foreach($hobby->tags as $tag)
                                            <a href="/hobby/tag/{{ $tag->id }}"><span class="badge badge-{{$tag->style}}">{{$tag->name}}</span></a>
                                        @endforeach
                                    </li>
                                @endforeach
                        </ul>
                        @else
                            <p>{{$user->name}} has not created any hobbies.</p>
                        @endif

                    </div>




                </div>

                <div class="mt-4">
                    <a class="btn btn-primary btn-sm" href="{{URL::previous()}}"><i class="fas fa-arrow-circle-up"></i> Back to Overview</a>
                </div>

            </div>
        </div>
    </div>
@endsection
