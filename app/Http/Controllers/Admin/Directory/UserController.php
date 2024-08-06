<?php

namespace App\Http\Controllers\Admin\Directory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Directory\User\UserStoreRequest;
use App\Http\Requests\Admin\Directory\User\UserUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $user = User::latest()->paginate(5);
        $value = ($request->input('page', 1) - 1) * 5;
        return view('admin.directory.user.index', compact('user'))
            ->with('i', $value);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.directory.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserStoreRequest $userRequest): RedirectResponse
    {
        User::create($userRequest->validated());
        return redirect()->route('admin.directory.user.index')
                        ->with('success', 'User created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user): View
    {
        return view('admin.directory.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user): View
    {
        return view('admin.directory.user.show', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserUpdateRequest $userRequest, User $user): RedirectResponse
    {
        $user->update($userRequest->validated());
        return redirect()->route('admin.directory.user.index')
                        ->with('success', 'User updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user): RedirectResponse
    {
        $user->delete();
        return redirect()->route('admin.directory.user.index')
                        ->with('success', 'User deleted successfully.');
    }
}
