<?php

namespace App\Http\Controllers;

use App\Models\User;
use Doctrine\DBAL\Query\QueryBuilder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Queue;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /** @var QueryBuilder $users */
        $users = User::orderByDesc('id')->get();
        return view('user-management.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
