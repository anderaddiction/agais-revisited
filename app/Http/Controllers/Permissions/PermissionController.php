<?php

namespace App\Http\Controllers\Permissions;

use Illuminate\Http\Request;
use App\Models\Users\Roles\Role;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Permissions\Permission;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\Permissions\PermissionRequest;

class PermissionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $permission = Permission::orderBy('created_at', 'ASC')
                ->with('roles')
                ->get();
            return DataTables::of($permission)
                ->addIndexColumn()
                ->addColumn('created_at', function ($permission) {
                    return $permission->present()->created_at();
                })
                ->addColumn('status', function ($permission) {
                    return $permission->present()->status();
                })
                ->addColumn('level', function ($permission) {
                    return $permission->present()->level();
                })
                ->addColumn('role', function ($permission) {
                    return $permission->present()->role();
                })
                ->addColumn('action', function ($permission) {
                    return $permission->present()->actionButton();
                })
                ->rawColumns(['action', 'status', 'level', 'role'])
                ->make(true);
        }

        return view('auth.permissions.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permission = new Permission();
        $roles = Role::orderBy('display_name', 'ASC')->where('status', 1)->pluck('display_name', 'id');

        return view('auth.permissions.create', [
            'permission' => $permission,
            'roles'      => $roles
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PermissionRequest $request)
    {
        $permission = Permission::create(
            $request->except(['role_id', 'note'])
                + ['code' => uniqueCode()]
                + ['slug' => generateUrl($request->name)]
                + ['note' => $request->note ? $request->note : 'N/A']
        );

        $permission->roles()->attach($request->role_id);

        return response()->json(
            [
                'success' => __('Data stored successfuly')
            ],
            200
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Permission $permission)
    {
        return view('auth.permissions.show', [
            'permission' => $permission
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Permission $permission)
    {
        $roles = Role::orderBy('display_name', 'ASC')->where('status', 1)->pluck('display_name', 'id');

        return view('auth.permissions.edit', [
            'permission'    => $permission,
            'roles'         => $roles
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PermissionRequest $request, Permission $permission)
    {
        $permission->update(
            $request->except(['role_id', 'note'])
                + ['slug' => generateUrl($request->name)]
                + ['note' => $request->note ? $request->note : 'N/A']
        );

        $permission->roles()->sync($request->role_id);

        return response()->json(
            [
                'success' => __('Data updated successfuly')
            ],
            200
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($permission)
    {
        $ids = explode(",", $permission);
        Permission::destroy($ids);
        DB::table('assigned_permission')->whereIn('permission_id', $ids)->delete();

        return [
            'success' => __('Data deleted successfuly')
        ];
    }

    public function trashed(Request $request)
    {
        if ($request->ajax()) {
            $permission = Permission::onlyTrashed()
                ->orderBy('created_at', 'ASC')
                ->with('roles')
                ->get();
            return DataTables::of($permission)
                ->addIndexColumn()
                ->addColumn('created_at', function ($permission) {
                    return $permission->present()->created_at();
                })
                ->addColumn('status', function ($permission) {
                    return $permission->present()->status();
                })
                ->addColumn('level', function ($permission) {
                    return $permission->present()->level();
                })
                ->addColumn('role', function ($permission) {
                    return $permission->present()->role();
                })
                ->addColumn('action', function ($permission) {
                    return $permission->present()->actionButton();
                })
                ->rawColumns(['action', 'status', 'level', 'role'])
                ->make(true);
        }

        return view('auth.permissions.trashed');
    }

    public function restore($permission)
    {
        $ids = explode(",", $permission);
        $permission_ids = array_map('intval', $ids);
        Permission::whereIn('id', $permission_ids)->withTrashed()->restore();
        return [
            'success' => __('Data restored successfuly')
        ];
    }

    public function getData($id)
    {
        $permission = Permission::orderBy('created_at', 'ASC')
            ->with('roles')
            ->get();
        return DataTables::of($permission)
            ->addIndexColumn()
            ->addColumn('created_at', function ($permission) {
                return $permission->present()->created_at();
            })
            ->addColumn('status', function ($permission) {
                return $permission->present()->status();
            })
            ->addColumn('level', function ($permission) {
                return $permission->present()->level();
            })
            ->addColumn('role', function ($permission) {
                return $permission->present()->role();
            })
            ->addColumn('action', function ($permission) {
                return $permission->present()->actionButton();
            })
            ->rawColumns(['action', 'status', 'level', 'role'])
            ->make(true);
    }
}
