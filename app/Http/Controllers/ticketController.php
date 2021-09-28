<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ticket;
use App\Models\estado;

class ticketController extends Controller
{
    public function index()
    {

        //$tickets = ticket::paginate(20);
        $pendentes = ticket::where('estado_id', 1)->get();

        return view('site.index', ['pendentes' => $pendentes]);
    }
    public function all()
    {
        $tickets = ticket::paginate(20);
        $estados = estado::all();
        return view('app.index', ['tickets' => $tickets], ['estados' => $estados]);
    }
    public function remover($id)
    {
        ticket::find($id)->delete();

        return redirect()->route('app.tickets');
    }
    public function editar($id)
    {

        $ticket = ticket::find($id);

        //return redirect()->route('app.tickets');
        return view('app.editar', ['ticket' => $ticket]);
    }

    public function update($id, Request $request)
    {

        $ticket = ticket::find($id);

        //dd($request);

        $ticket->nome = $request->nome;
        $ticket->pais = $request->pais;
        $ticket->email = $request->email;

        $ticket->save();

        return redirect()->route('app.tickets');
        //return view('app.ticket.editar',['ticket'=>$ticket]);

    }
}
