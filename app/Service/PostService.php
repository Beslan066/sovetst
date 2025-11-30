<?php


namespace App\Service;


use App\Models\Post;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;

class PostService
{
    public function save($request, Post $post) {
        $data = $request->validated();

        // Обрабатываем изображение
        if ($request->hasFile('image')) {
            $imagePath = Storage::put('images', $data['image']);
            $data['image'] = str_replace('images/', '', $imagePath);
        }

        // Заполняем и сохраняем пост
        $post->fill($data);
        $post->save();

        return $post;
    }
}
