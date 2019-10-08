<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('guests', ['guests' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(User $user)
    {
        //Method 1
        if(request()->has('admin'))
        {
            $user->setAdmin();
        }else{
            $user->setGuest();
        }

        //Method 2
        //request()->has('completed') ? $task->complete() : $task->incomplete();

        //Method 3
        //$method = request()->has('completed') ? 'complete' : 'incomplete';
        //$task->$method();

        //$task->complete(request()->has('completed'));
        //
        //dd(\request()->all());
        //With the method below we allowing the controller to update models whereas with the method above we further
        // encapsulate by giving models control over manipulation of the data
//        $task->update([
//            'completed' => \request()->has('completed')
//        ]);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

//    public function guests()
//    {
//        $users = User::all();
//        return view('guests', ['guests' => $users]);
//    }

    public function flashMessages($message)
    {
        session()->flash('message', $message);
    }
}
