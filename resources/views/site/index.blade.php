<h1>Tickets</h1>
<hr>
<table>
    <tr>
        <th>Descricao</th>
        <th>ValorPrevisto</th>
        <th>EmailResponsavel</th>
    </tr>
    @foreach ($pendentes as $pendente)
        <tr>
            <td>{{ $pendente->descricao }}</td>
            <td>{{ $pendente->valorPrevisto }}€</td>
            <td>{{ $pendente->emailResponsavel }}</td>
        </tr>
    @endforeach
</table>
<h3><a> Adicionar outro ticket</a></h3>
{{-- {{ $tickets->links() }} --}}

<hr>

{{-- <p><a href="{{ route('app.sair') }}">LOGOUT</a></p> --}}
