<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return "test";
        //return User::all();
        return view('users.index', [
            'users' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|unique:users|email',
            'password' => 'required',
            'avatar' => 'nullable'
        ]);

        if ($request->avatar) {
            $imageName = time().'.'.$request->avatar->extension();
        
            $request->avatar->storeAs('public/images', $imageName);
            $validated['avatar'] = $imageName;
        }

        User::create($validated);

        return redirect('/users');

    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //return $user;
        return view('users.show', ['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //return $user;
        return view('users.edit', [
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update2(Request $request, User $user)
    {
        //dd($request->all());
        $validated = $request->validate([
            'avatar' => 'nullable',
        ]);

        

        if ($request->avatar) {
            Storage::delete('public/images/' . $user->avatar);

            $imageName = time().'.'.$request->avatar->extension();
            
            $request->avatar->storeAs('public/images', $imageName);
            $validated['avatar'] = $imageName;

            $user->update($validated);
            //echo 'avatar updated successfully!';
        }

        return redirect("/users/{$user->id}");

            
    }
    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'password' => 'required',
        ]);

        // if ($request->avatar) {
        //     $imageName = time().'.'.$request->avatar->extension();
        
        //     $request->avatar->storeAs('public/images', $imageName);
        //     $validated['avatar'] = $imageName;
        // }

        $user->update($validated);

        return redirect('/users');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        

        Storage::delete('public/images/' . $user->avatar);
        
        $user->delete();

        return redirect('/users');
    }
}
