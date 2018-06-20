<div class="col-md-3">
    <ul>
        @foreach($users as $user)
            @if($user->role.equalTo('entreprise'))
                <a class="list-group-item" href="{{route('conversation.show',$user->id)}}">{{$user->name}}</a>
            @endif
        @endforeach
    </ul>
</div>