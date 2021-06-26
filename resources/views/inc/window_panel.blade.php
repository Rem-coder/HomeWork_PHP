@section('window_panel_add')
    <div class="window_panel">
        <form class="window_form_add" action="{{route('mess_add-form')}}" method="post">
            @csrf
            <textarea class="win_panel_input" placeholder="Введите своё сообщение" name="text" id="text"></textarea>
            <button class="win_panel_button">Отправить сообщение</button>
        </form>
        <form class="window_form_deleted" action="{{route('delete-message')}}" method="post">
            @csrf
            <textarea class="win_panel_input" placeholder="id сообщения" name="id" id="id"></textarea>
            <button class="win_panel_button">Удалить сообщение</button>
        </form>
    </div>
