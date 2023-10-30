<?php

namespace App\Http\Controllers;

use App\Common\Common;
use Dotenv\Exception\ValidationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Symfony\Component\HttpFoundation\Response;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user-management.role.index');
    }

    /**
     * @return Application|Factory|View|\Illuminate\Foundation\Application|RedirectResponse
     */

    public function create()
    {
        try {
            $moduleNameWisePermissions = Permission::get()
                ->groupBy('module_name');
            if (empty($moduleNameWisePermissions)) {
                throw new ValidationException("Permissions was not found.", Response::HTTP_NOT_FOUND);
            }
            return view('user-management.role.add', ['moduleNameWisePermissions' => $moduleNameWisePermissions]);
        } catch (\Throwable $ex) {
            session()->flash(Common::ALERT_MESSAGE_TEXT, $ex->getMessage());
            session()->flash(Common::ALERT_TYPE_TEXT, Common::ALERT_TYPE_ERROR);
            return back();
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $request->all();
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
