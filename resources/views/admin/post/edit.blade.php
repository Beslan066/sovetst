@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <h2 class="mb-3">Создать статью</h2>

        <div class="row">
            <div class="col-12">
                <form action="{{ route('admin.post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-2 w-50">
                        <input
                            class="form-control col-2"
                            type="text"
                            name="title"
                            placeholder="Заголовок"
                            value="{{ $post->title }}">
                        @error('title')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group w-50 mb-2">
                        <h4>Лид новости</h4>
                        <textarea class="form-control" rows="3" name="lead" placeholder="Введите краткое описание">{{ $post->lead }}</textarea>
                        @error('lead')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group w-50 mb-2">
                        <textarea class="form-control summernote" id="content" name="content">{{ $post->content }}</textarea>
                        @error('content')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group w-50 mb-2">
                        <label for="exampleInputFile">Изображение</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label" for="image">
                                    @if(old('image'))
                                        {{ old('image') }}
                                    @else
                                        Выберите файл
                                    @endif
                                </label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Загрузить</span>
                            </div>
                        </div>
                        @error('image')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group w-50 mb-2">
                        <label>Выберите категорию</label>
                        <select class="form-control" name="category_id">
                            <option value="">-- Выберите категорию --</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('category_id')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <input class="btn btn-primary" type="submit" value="Создать">
                    <a href="{{ route('admin.post.index') }}" class="btn btn-default">Отмена</a>
                </form>
            </div>
        </div>
    </div>
@endsection

<script>
    document.getElementById('image').addEventListener('change', function(e) {
        var fileName = e.target.files[0]?.name || 'Выберите файл';
        e.target.nextElementSibling.innerText = fileName;
    });
</script>
