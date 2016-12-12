<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::query()->paginate();

        return view('user.index', compact('users'));
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $revisions = Activity::forSubject($user)->get();

        return view('user.edit', compact('user', 'revisions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  User $user
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, User $user)
    {
        // If the administrator entered a password, ensure it matches the password_again
        // field, if so, set the user's password property to the new password. If not,
        // return the user to the previous page with an error.
        if ($request->input('password')) {
            if ($request->input('password') != $request->input('password_again')) {
                return redirect("/user/{$user->id}/edit")->with(['password' => 'Password & Password (Again) did not match.']);
            }

            $user->password = $request->input('password');
        }

        $user->fill($request->all());
        $user->save();

        return redirect("/user/{$user->id}/edit")->with(['user_update' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
