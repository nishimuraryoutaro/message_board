<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message; 


class MessagesController extends Controller
{
    
    public function index()
    {
       $messages = Message::paginate(25);
        return view('messages.index', [
            'messages' => $messages,
        ]);
    }

    public function create()
    {
        //
        $message = new Message;
        
        return view('messages.create', [
            'message' => $message,
            ]);
    }
    public function store(Request $request)
    {
        
        $request->validate([
            'content' => 'required|max:255',
            'title' => 'required|max:255', 
        ]);
        $message = new Message;
        $message->content = $request->content;
        $message->title = $request->title; 
        $message->save();

        return redirect('/');
    }

 
    public function show($id)
    {
        $message = Message::findOrFail($id);

        return view('messages.show', [
            'message' => $message,
        ]);
    }

    
    public function edit($id)
    {
        $message = Message::findOrFail($id);

        return view('messages.edit', [
            'message' => $message,
        ]);
    }

 
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',   
            'content' => 'required|max:255',
        ]);
        
        $message = Message::findOrFail($id);
        $message->content = $request->content;
        $message->title = $request->title;   
        $message->save();

        return redirect('/');
    }

   
    public function destroy($id)
    {
        $message = Message::findOrFail($id);
        $message->delete();

        return redirect('/');
    }
}
