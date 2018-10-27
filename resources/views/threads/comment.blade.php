<div id="{{"comment-{$comment->id}"}}" class="comment-list">
    <div class="single-comment justify-content-between d-flex">
        <div class="user justify-content-between d-flex">
            <div class="thumb">
                <img width="30" height="30" src="{{$comment->user->image()}}" alt="{{$comment->user->name}}">
            </div>
            <div class="desc">
                <h5><a href="{{route('profile', $comment->user->username)}}">{{$comment->user->username}}</a></h5>
                <p class="date">{{$comment->created_at}}</p>
                <p class="comment">
                    {{$comment->body}}
                </p>
            </div>
        </div>
    </div>

    <div class="float-right">
        <form style="display: inline;" method="POST" action="{{route('like.store', $comment->id)}}">
            @csrf
            <button type="submit" class="btn {{$comment->isLiked() ? 'btn-primary' : 'btn-default'}}">
                <i class="fa fa-thumbs-o-up"></i>
                ({{$comment->likes_count}})
            </button>
        </form>

        <form style="display: inline;" method="POST" action="{{route('comments.destroy', $comment->id)}}">
            @csrf
            {{method_field('DELETE')}}
            <button type="submit" class="btn btn-danger">
                <i class="fa fa-trash"></i>
            </button>
        </form>
    </div>

</div>


