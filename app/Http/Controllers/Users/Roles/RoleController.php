<?php

namespace App\Http\Controllers\Users\Roles;

use Illuminate\Http\Request;
use App\Models\Users\Roles\Role;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\Users\Roles\RoleRequest;

class RoleController extends Controller
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
            $role = Role::orderBy('name', 'DESC')->get();
            return DataTables::of($role)
                ->addIndexColumn()
                ->addColumn('created_at', function ($role) {
                    return $role->present()->created_at();
                })
                ->addColumn('action', function ($role) {
                    return $role->present()->actionButton();
                })
                ->addColumn('status', function ($role) {
                    return $role->present()->status();
                })
                ->rawColumns(['action', 'status',])
                ->make(true);
        }

        return view('auth.roles.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $role = new Role();
        return view('auth.roles.create', [
            'role' => $role
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RoleRequest $request)
    {
        Role::create(
            $request->validated()
                + ['code' => uniqueCode()]
                + ['slug' => generateUrl($request->name)]
        );

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
    public function show(Role $role)
    {
        return view('auth.roles.show', [
            'role' => $role
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        return view('auth.roles.edit', [
            'role' => $role
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RoleRequest $request, Role $role)
    {
        $role->update(
            $request->validated()
                + ['slug' => generateUrl($request->name)]
        );

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
    public function destroy($role)
    {
        $ids = explode(",", $role);
        Role::destroy($ids);
        return [
            'success' => __('Data deleted successfuly')
        ];
    }

    public function trashed(Request $request)
    {
        if ($request->ajax()) {
            $role = Role::onlyTrashed()
                ->orderBy('name', 'DESC')
                ->get();
            return DataTables::of($role)
                ->addIndexColumn()
                ->addColumn('created_at', function ($role) {
                    return $role->present()->created_at();
                })
                ->addColumn('action', function ($role) {
                    return $role->present()->actionButton();
                })
                ->addColumn('status', function ($role) {
                    return $role->present()->status();
                })
                ->rawColumns(['action', 'status',])
                ->make(true);
        }

        return view('auth.roles.trashed');
    }

    public function restore($role)
    {
        $ids = explode(",", $role);
        $role_ids = array_map('intval', $ids);
        Role::whereIn('id', $role_ids)->withTrashed()->restore();
        return [
            'success' => __('Data restored successfuly')
        ];
    }

    public function getData($id)
    {
        $role = Role::where('id', $id)
            ->get();
        return DataTables::of($role)
            ->addIndexColumn()
            ->addColumn('created_at', function ($role) {
                return $role->present()->created_at();
            })
            ->addColumn('action', function ($role) {
                return $role->present()->actionButton();
            })
            ->addColumn('status', function ($role) {
                return $role->present()->status();
            })
            ->rawColumns(['action', 'status',])
            ->make(true);
    }
}
