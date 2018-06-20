<a href="{{route('evenement',$notification->data['even']['subject'])}}">

    {{$notification->data['user']['name']}} a ajouté une nouvelle evenement <strong>{{$notification->data['even']['subject']}}</strong>

</a>