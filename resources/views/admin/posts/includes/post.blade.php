<div class="container text-center d-flex justify-content-center">
    <div class="card" style="width: 30rem;">
        @if (filter_var($post->post_image, FILTER_VALIDATE_URL))
            <img src="{{ $post->post_image }}" class="card-img-top p-3" alt="image of post: {{ $post->title}}">
        @else
            <img src="{{ asset('/storage' . '/' . $post->post_image) }}" class="card-img-top p-3" alt="image of post: {{ $post->title}}">
        @endif
        <div class="card-body">
            <h5 class="card-title">{{ $post->title}}</h5>
            <p class="card-text">{{ $post->post_content }}</p>
        </div>
        <ul class="list-group list-group-flush">
            @if (isset($post->category))
                <li class="list-group-item">
                    <div class="badge badge-pill p-1 w-100" style="background-color: {{ $post->category->color }}">
                        {{ $post->category->name }}
                    </div>     
                </li>
            @endif
            <li class="list-group-item">
                @forelse ($post->tags as $tag)
                    {{"#" . $tag->name }} 
                @empty
                    No tags
                @endforelse
            </li>
            <li class="list-group-item">{{ $post->user->name }}</li>
            <li class="list-group-item">{{ $post->post_date }}</li>
        </ul>
        <div class="card-body d-flex justify-content-around">
            <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-primary">EDIT</a>
            <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                @csrf
                @method('DELETE')
            
                <input type="submit" value="DELETE" class="btn btn-danger">
            </form>
        </div>
    </div>
</div>