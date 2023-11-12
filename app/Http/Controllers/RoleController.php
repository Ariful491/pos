<?php

namespace App\Http\Controllers;

use App\Common\Common;
use App\Http\Requests\StoreRoleRequest;
use Dotenv\Exception\ValidationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Symfony\Component\HttpFoundation\Response;
use Throwable;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$roles = Role::with('permissions')->get();

        return view('user-management.role.index');
    }

    /**
     * @return Application|Factory|View|RedirectResponse
     */

    public function create(): View|Factory|RedirectResponse|Application
    {
        try {
            $moduleNameWisePermissions = Permission::get()
                ->groupBy('module_name');
            if (empty($moduleNameWisePermissions)) {
                throw new ValidationException("Permissions was not found.", Response::HTTP_NOT_FOUND);
            }
            return view('user-management.role.add', ['moduleNameWisePermissions' => $moduleNameWisePermissions]);
        } catch (Throwable $ex) {
            session()->flash(Common::ALERT_MESSAGE_TEXT, $ex->getMessage());
            session()->flash(Common::ALERT_TYPE_TEXT, Common::ALERT_TYPE_ERROR);
            return back();
        }
    }

    /**
     * @param StoreRoleRequest $request
     * @return JsonResponse
     */
    public function store(StoreRoleRequest $request): JsonResponse
    {
        $role = Role::create(['name' => $request->name]);
        $permissions = $request->input('permissions');
        if (!empty($permissions)) {
            $role->syncPermissions($permissions);
        }
        return $this->successResponse('Permission has been saved successfully.', '/roles');

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
