@foreach($posts as $post)
    <tr>
        @method('delete')
        <th scope="row"><a class="link-dark" href="">{{ $post->id }}</a></th>
        <td><span class="link-dark" href="">{{ $post->title }}</span></td>
        <td><span class="link-dark" href=""><img src="{{ asset('storage/images/'.$post->image) }}" style="width: 140px; height: 80px;" alt=""/></span></td>
        <td><span class="link-dark" href="">{{ $post->category->name }}</span></td>
        <td><span class="link-dark" href="">{{ $post->created_at }}</span></td>
        <td>
            <div class="btn-group ">
                <a type="button" class="btn btn-primary mr-2 link-dark" href="{{ route('admin.post.edit', $post->id) }}">Изменить</a>
                <form action="{{ route('admin.post.delete', $post->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger link-dark">Удалить</button>
                </form>

            </div>
        </td>


    </tr>
@endforeach
