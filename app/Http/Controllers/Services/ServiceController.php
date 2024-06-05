<?php

namespace App\Http\Controllers\Services;

use Illuminate\Http\Request;
use App\Models\Services\Service;
use Illuminate\Support\Facades\DB;
use App\Models\Categories\Category;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\Services\ServiceRequest;

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
                    return $service->present()->categories();
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
            $request->except(['category_id', 'note'])
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
    public function show(Service $service)
    {
        return view('auth.services.show', [
            'service' => $service
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        $categories = Category::orderBy('name', 'ASC')->where('name', 'Servicio')->pluck('subcategory', 'id');

        return view('auth.services.edit', [
            'service'    => $service,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ServiceRequest $request, Service $service)
    {
        $service->update(
            $request->except(['category_id', 'note'])
                + ['slug' => generateUrl($request->name)]
                + ['note' => $request->note ? $request->note : 'N/A']
        );

        $service->categories()->sync($request->category_id);

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
    public function destroy($service)
    {
        $ids = explode(",", $service);
        Service::destroy($ids);
        DB::table('assigned_service')->whereIn('service_id', $ids)->delete();

        return [
            'success' => __('Data deleted successfuly')
        ];
    }

    public function trashed(Request $request)
    {
        if ($request->ajax()) {
            $service = Service::onlyTrashed()
                ->orderBy('created_at', 'ASC')
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
                    return $service->present()->categories();
                })
                ->addColumn('action', function ($service) {
                    return $service->present()->actionButton();
                })
                ->rawColumns(['action', 'status', 'category'])
                ->make(true);
        }

        return view('auth.services.trashed');
    }

    public function restore($service)
    {
        $ids = explode(",", $service);
        $service_ids = array_map('intval', $ids);
        Service::whereIn('id', $service_ids)->withTrashed()->restore();
        return [
            'success' => __('Data restored successfuly')
        ];
    }

    public function getData($id)
    {
        $service = Service::orderBy('created_at', 'ASC')
            ->with('categories')
            ->where('id', $id)
            ->get();
        return DataTables::of($service)
            ->addIndexColumn()
            ->addColumn('created_at', function ($service) {
                return $service->present()->created_at();
            })
            ->addColumn('status', function ($service) {
                return $service->present()->status();
            })
            ->addColumn('subcategory', function ($service) {
                return $service->present()->categories();
            })
            ->addColumn('action', function ($service) {
                return $service->present()->showActionButton();
            })
            ->rawColumns(['action', 'status', 'subcategory'])
            ->make(true);
    }
}
