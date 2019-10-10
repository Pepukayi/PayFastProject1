<?php

namespace App\Http\Controllers;

use App\Message;
use App\User;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        //below is to ensure user is registered to access certain pages. Can be done also in the route file web.php

        //$this->middleware('auth');    // will require logins for every page
        //$this->middleware('auth')->only(['store', 'update']);    //will require logins for the included pages only
        $this->middleware('auth')->except(['show']);    //will require logins for all others except included pages only
    }

    public function index()
    {
        if(auth()->user()->user_level == 1)    //admin user level = 1
        {
            $messages = Message::all();
            return view('messages/index', ['messages' => $messages]);
        }
        else{
            $messages = auth()->user()->messages;
            return view('messages/index', ['messages' => $messages]);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $messages = Message::all();
        //return $projects;
        return view('messages/create', ['messages' => $messages]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(User $user)
    {
        $validated = $this->validateMessage();

        $validated['user_id'] = auth()->id();    //changed from owner_id
        $message = Message::create($validated);

        $this->flashMessages('Your message has been created.');
        return redirect('messages');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        $this->authorize('update', $message);
        return view('messages/show', compact('message'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        return view('messages/edit', ['message' => $message]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Message $message)
    {
        $validated = $this->validateMessage();

        $this->authorize('update', $message);

        $message->update($validated);

        return redirect('/messages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        $this->authorize('update', $message);
        //dd('Hello');
        $message->delete();
        return redirect('/messages');
    }

    protected function validateMessage()
    {
        return request()->validate([
            'title' => ['required', 'min:3', 'max:50'],
            'priority' => ['required', 'min:3', 'max:30'],
            'description' => ['required', 'min:3', 'max:500'],
//            'password' => ['required', 'confirmed']
        ]);
    }

    public function flashMessages($message)
    {
        session()->flash('message', $message);
    }
}
