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

        return redirect()->back()->with('success', __('Data created successfuly'));
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

        return redirect()->route('role.edit', $role)->with('success', __('Data updated successfuly'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->back()->with('success', __('Data deleted successfuly'));
    }
}
