@section('window')
    <form class="window" action="{{route('registration-form')}}" method="post">
        <h1>{{session()->all()['user']}}</h1>
        <table>
            <tr>
                <th>id message</th>
                <th>user</th>
                <th>message</th>
            </tr>
            <tr><td>15</td><td>Andrey:</td><td>Привет, ух ты блять</td></tr>
            <tr><td>16</td><td>Lev:</td><td>Нигеры-зло</td></tr>
        </table>
    </form>

