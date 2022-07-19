show

@foreach($users as $user)
   <div>{{$user->name}}</div>
   <hr>
<?php ?>
   @foreach($user->posts as $post)
       =><div>{{$post->title}}</div>
   @endforeach
@endforeach
<?php

