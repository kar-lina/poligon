@extends('layouts.app')

@section('content')
<div class="container">
    @if(session('success'))
        <div class="row justify-content-center" >
            <div class="col-md-12">

            </div>
        </div>
    @endif
    <div class="row justify-content-center" >
        <div class="col-md-12">
            <nav class="navbar navbar-toggleable-md navbar-light bg-faded ">
                <a href="{{ route('blog.admin.posts.create') }}" class="btn btn-primary"> Написать</a>
            </nav>
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Автор</th>
                            <th scope="col">Категория</th>
                            <th scope="col">Заголовок</th>
                            <th scope="col">Дата публикации</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($paginator as $post)
                            @php
                            /** @var App\Models\BlogPost $post */
                            @endphp
                            <tr></tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
