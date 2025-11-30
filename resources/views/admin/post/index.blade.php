@extends('layouts/admin')


@section('content')
    <div>
        <div>
            <div class="d-flex align-items-center">
                <a href="{{ route('admin.post.create') }}" type="button" class="btn btn-primary mb-4 mt-4">Добавить</a>
            </div>

            <table class="table table-striped table-grey">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Заголовок</th>
                    <th scope="col">Изображение</th>
                    <th scope="col">Категория</th>
                    <th scope="col">Создан</th>
                </tr>
                </thead>
                <tbody id="posts-container">

                @include('admin.post.filtered-posts', ['posts' => $posts])



                </tbody>
            </table>

            <div class="mt-3">{{ $posts->links("pagination::bootstrap-4") }}</div>

        </div>
    </div>
@endsection()
