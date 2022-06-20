@props(['comment'])

<article class="col-dt-4 col-mb-10 p-1 comment">
    <h4 class="comment-title">{{$comment->title}}</h4>
    <span class="author">Autor: {{$comment->author->name}}</span>
    <time>{{$comment->created_at->format('F j, Y, H:i')}}</time>
    <p>
        {{$comment->body}}
    </p>
</article>