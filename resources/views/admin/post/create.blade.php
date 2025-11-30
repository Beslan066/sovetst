@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Создание новости</h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <form action="{{ route('admin.post.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group mb-2">
                                        <input type="text" class="form-control" id="title" name="title" placeholder="Введите заголовок" value="{{ old('title') }}">
                                    </div>

                                    <div class="form-group mb-2">
                                        <textarea class="form-control" id="lead" name="lead" rows="3" placeholder="Введите краткое описание">{{ old('lead') }}</textarea>
                                    </div>

                                    <div class="form-group mb-2">
                                        <textarea class="form-control summernote" id="content" name="content">{{ old('content') }}</textarea>
                                    </div>

                                    <div class="form-group mb-2">
                                        <select class="form-control" id="category_id" name="category_id">
                                            <option value="">-- Выберите категорию --</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group mb-2">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="image" name="image">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Создать</button>
                                    <a href="{{ route('admin.post.index') }}" class="btn btn-default float-right">Отмена</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
