<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('roles:admin', ['except' => ['show']]);
    }

    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        $users = User::findOrFail($id);

        $this->authorize('view', $users);

        return view('users.show', compact('users'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
