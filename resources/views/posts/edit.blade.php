@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <a href="{{route('post.index')}}" class="btn btn-secondary mb-2">Back</a>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Edit post') }}</div>

                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form method="POST" action="{{route('post.update', $post->id)}}">
                        @method('PATCH')
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <input type="text" class="form-control" id="message" name="message" value="{{$post->message}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection