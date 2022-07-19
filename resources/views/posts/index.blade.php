hello

@foreach($posts as $post)
    <div>{{$post->title}}</div>
    <div>{{$post->descr}}</div>
    <div><img src="{{$post->img ?? URL::asset('images/blank.jpg')}}" alt="" width="" height=""></div>
    <hr>
@endforeach
<div>{{$posts->links('pagination::bootstrap-4')}}</div>
{{--$posts->links() - is too big--}}
<?php
//phpinfo();

