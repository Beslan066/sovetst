@extends('layouts/admin')

@section('content')
    <div class="app-content ">
        <div class="container-fluid p-2">

            <h2 class="mb-3">Создать категорию</h2>

            <div class="row">
                <div class="col-12">
                    <form action="{{ route('admin.categories.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input class="form-control w-100" type="text" name="name" placeholder="Название категории">
                            @error('name')
                            <div class="text-danger">Это поле должно быть заполнено</div>
                            @enderror
                        </div>

                        <input class="btn btn-primary" type="submit" value="Добавить">
                    </form>
                </div>


            </div>


        </div>
    </div>
@endsection
