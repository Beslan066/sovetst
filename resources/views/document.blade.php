@extends('layouts.app')

@section('content')
    <section class="main-content mt-3">
        <div class="container-xl">
            <h2 class="title">Документы</h2>
            <div class="d-flex flex-column">
                <ul class="document-list">
                    <li><a href="{{asset('documents/25.01.2023_225_28_Калиматов_М.М._Сластенин_В.В..pdf')}}"
                           target="_blank">25.01.2023_225_28_Калиматов_М.М._Сластенин_В.В.</a>
                    </li>
                    <li><a href="{{asset('documents/12.11.2024_4302_28_Калиматов_М.М._Сластенин_В.В. (1).pdf')}}"
                           target="_blank">12.11.2024_4302_28_Калиматов_М.М._Сластенин_В.В. (1).pdf</a>
                    </li>
                    <li><a href="{{asset('documents/Состав СС 12.11.2024_4303_28_Калиматов_М.М._Мархиев_А.З..pdf')}}"
                           target="_blank">Состав СС 12.11.2024_4303_28_Калиматов_М.М._Мархиев_А.З..pdf</a>
                    </li>
                    <li><a href="{{asset('documents/09.04.2025_1454_28_Калиматов_М.М._Мархиев_А.З..pdf')}}"
                           target="_blank">09.04.2025_1454_28_Калиматов_М.М._Мархиев_А.З..pdf</a>
                    </li>
                    <li><a href="{{asset('documents/28.08.2025_3248_28_Калиматов_М.М._Мальсагов_М.Х..pdf')}}"
                           target="_blank">28.08.2025_3248_28_Калиматов_М.М._Мальсагов_М.Х..pdf</a>
                    </li>
                    <li><a href="{{asset('documents/17.10.2025_3934_28_Калиматов_М.М._Сластенин_В.В..pdf')}}"
                           target="_blank">17.10.2025_3934_28_Калиматов_М.М._Сластенин_В.В..pdf</a>
                    </li>
                    <li><a href="{{asset('documents/указ Исключение Гандалоева.pdf')}}" target="_blank">указ Исключение
                            Гандалоева.pdf</a>
                    </li>

                </ul>
            </div>
        </div>
    </section>
@endsection
