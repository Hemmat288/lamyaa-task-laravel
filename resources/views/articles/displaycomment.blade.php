      <div class="card container" style="width: 50rem;">
      @foreach ($comments as $comment)
      <div class="display-comment" @if($comment ->parent_id != null)  style="margin-left:40px" @endif>
<p>Comment Body::{{$comment->body}}</p>
<a href="" id="reply"></a>
 <form action="{{route('comments.store')}}" method="POST">
@csrf
<div class="form-group">
<textarea class="form-control" name="body">
</textarea>
<input type="text" name="article_id" hidden value="{{$article_id}}">
<input type="text" name="parent_id" hidden value="{{$comment->id}}">
</div>

<input type="submit" class="btn btn-danger" value="add reply">
    </form>
      </div>
      @include('articles.displaycomment',
      ['comments'=>$comment->replies])

      @endforeach
      </div>
