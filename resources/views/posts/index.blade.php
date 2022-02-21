@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <a href="{{route('post.create')}}" class="btn btn-primary mb-2">Create</a>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Post') }}</div>

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
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th></th>
                                <th>USER</th>
                                <th>TITLE</th>
                                <th>MESSAGE</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                            <tr>
                                <td>
                                    <!-- <a href="{{route('post.edit', $post->id)}}">
                                        {{ __('edit') }}
                                    </a> -->
                                    <form action="{{ route('post.destroy', $post->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf

                                        <a href="{{route('post.edit', $post->id)}}" class="btn btn-success btn-sm">{{ __('edit') }}</a>
                                        <button type="submit" class="btn btn-danger btn-sm">{{ __('delete') }}</button>
                                    </form>
                                </td>
                                <td>{{ $post->user->name }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->message }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection