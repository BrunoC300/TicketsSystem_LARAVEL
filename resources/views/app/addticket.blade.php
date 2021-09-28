<h1>Adicionar Ticket</h1>
<hr>
<form action="{{ route('tickets/adicionar', $ticket->id) }}" method="post">
    @csrf
    <input name="descricao" type="text">
    <br>
    <input name="valorPrevisto" type="text">
    <br>
    <input name="estado_id" type="text">
    <br>
    <input name="emailResponsavel" type="text">
    <br>
    <button type="submit">Adicionar</button>
</form>
