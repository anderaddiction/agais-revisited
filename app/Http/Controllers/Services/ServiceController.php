<?php

namespace App\Http\Controllers\Services;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Services\ServiceRequest;
use App\Models\Categories\Category;
use App\Models\Services\Service;
use Yajra\DataTables\Facades\DataTables;

class ServiceController extends Controller
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
            $service = Service::orderBy('created_at', 'ASC')
                ->with('categories')
                ->get();
            return DataTables::of($service)
                ->addIndexColumn()
                ->addColumn('created_at', function ($service) {
                    return $service->present()->created_at();
                })
                ->addColumn('status', function ($service) {
                    return $service->present()->status();
                })
                ->addColumn('category', function ($service) {
                    return $service->present()->category();
                })
                ->addColumn('action', function ($service) {
                    return $service->present()->actionButton();
                })
                ->rawColumns(['action', 'status', 'category'])
                ->make(true);
        }

        return view('auth.services.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $service = new Service();
        $categories = Category::orderBy('name', 'ASC')->where('name', 'Servicio')->pluck('subcategory', 'id');

        return view('auth.services.create', [
            'service'    => $service,
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServiceRequest $request)
    {
        $service = Service::create(
            $request->except('category_id')
                + ['code' => uniqueCode()]
                + ['slug' => generateUrl($request->name)]
                + ['note' => $request->note ? $request->note : 'N/A']
        );

        $service->categories()->attach($request->category_id);

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
