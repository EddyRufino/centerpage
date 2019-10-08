<?php

namespace App\Http\Controllers;

use App\User;
use App\Message;
use App\Mail\EmailMessage;
use Illuminate\Http\Request;
use App\Events\MessageWasRecived;
use App\Http\Requests\MessageRequest;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('roles:admin', ['except' => ['index', 'show', 'store']]);
    }

    public function index()
    {
        $messages = Message::allowed()->latest()->paginate(5);

        return view('message.index', compact('messages'));
        // return view('message.index', [
        //     'messages' => Message::where('user_id', auth()->id())->latest()->get()
        // ]);
    }

    public function create()
    {
        //
    }


    public function store(MessageRequest $request)
    {
        $message = Message::create($request->validated());

        if (auth()->check())
        {
            auth()->user()->message()->save($message);
        }

        // MessageWasRecived::dispatch($message);
        // event(new MessageWasRecived($message));
        // Mail::to($request->user())->send(new EmailMessage($message));

        return redirect()->route('message.index')->with('status', 'Hemos recibido tu mensaje!');
    }


    public function show($id)
    {

        $message = Message::findOrFail($id);

        $this->authorize('view', $message);

        return view('message.show', compact('message'));
    }


    public function edit(Message $message)
    {
        //
    }


    public function update(Request $request, Message $message)
    {
        //
    }


    public function destroy($id)
    {
        $message = Message::findOrFail($id);

        $message->destroy($id);

        return redirect()->route('message.index')->with('status', 'Mensaje borrado!');
    }
}
