@extends("layouts.app");
@section("content")

<div class="container">
    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif --}}
    @if (session('info'))
    <div class="alert alert-success">
        {{session('info')}}
    </div>

    @endif
    {{$articles->links()}}

    @foreach ($articles as $article)

    <div class="card mb-2">
        <div class="card-body">
            <h5 class="card-title">
                {{$article->title}}
            </h5>
            <div class="card-subtitle mb-2 text-muted small">
                {{$article->created_at->diffForHumans()}}
            </div>
            <p class="card-text">{{$article->body}}</p>
            <a href="{{url("/articles/detail/$article->id")}}" class="card-link">
            View Detail &raquo</a>
        </div>
    </div>

    @endforeach
</div>
@endsection
