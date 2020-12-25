@section('window')
    <form class="window" action="{{route('get-data')}}" method="post">
        @foreach($data as $el)
            <h1>{{ $el->user }}</h1>
        @endforeach
    </form>

