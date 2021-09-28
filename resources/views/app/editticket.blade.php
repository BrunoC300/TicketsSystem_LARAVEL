<h1>Tickets</h1>
<hr>
<form action="{{ route('tickets/update', $ticket->id) }}" method="post">
    @csrf
    <input name="descricao" value="{{ $ticket->descricao }}" type="text">
    <br>
    <input name="valorPrevisto" value="{{ $ticket->valorPrevisto }}" type="text">
    <br>
    <input name="estado_id" value="{{ $ticket->estado_id }}" type="text">
    <br>
    <input name="emailResponsavel" value="{{ $ticket->emailResponsavel }}" type="text">
    <br>
    <button type="submit">ATUALIZAR</button>
</form>
