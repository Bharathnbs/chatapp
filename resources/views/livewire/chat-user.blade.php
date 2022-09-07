<div>
    @foreach($users as $user)
         <a href="{{route('user.chat', $user->id)}}">{{$user->name}}</a><br>
    @endforeach
</div>
