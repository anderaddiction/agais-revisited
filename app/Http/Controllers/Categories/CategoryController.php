<?php

namespace App\Http\Controllers\Categories;

use Illuminate\Http\Request;
use App\Models\Categories\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\Categories\CategoryRequest;
use Yajra\DataTables\Facades\DataTables;

class CategoryController extends Controller
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
            $category = Category::orderBy('name', 'DESC')->get();
            return DataTables::of($category)
                ->addIndexColumn()
                ->addColumn('created_at', function ($category) {
                    return $category->present()->created_at();
                })
                ->addColumn('action', function ($category) {
                    return $category->present()->actionButton();
                })
                ->addColumn('status', function ($category) {
                    return $category->present()->status();
                })
                ->rawColumns(['action', 'created_at', 'status'])
                ->make(true);
        }

        return view('auth.categories.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = new Category();
        return view('auth.categories.create', [
            'category' => $category
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        Category::create(
            $request->validated()
                + ['code' => getRandomString()]
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
    public function show(Category $category)
    {
        return view('auth.categories.show', [
            'category' => $category
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('auth.categories.edit', [
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, Category $category)
    {
        $category->update(
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
    public function destroy($category)
    {
        $ids = explode(",", $category);
        Category::destroy($ids);
        return [
            'success' => __('Data deleted successfuly')
        ];
    }

    public function trashed(Request $request)
    {
        if ($request->ajax()) {
            $category = Category::onlyTrashed()
                ->orderBy('name', 'DESC')
                ->get();
            return DataTables::of($category)
                ->addIndexColumn()
                ->addColumn('created_at', function ($category) {
                    return $category->present()->created_at();
                })
                ->addColumn('action', function ($category) {
                    return $category->present()->actionButton();
                })
                ->addColumn('status', function ($category) {
                    return $category->present()->status();
                })
                ->rawColumns(['action', 'created_at', 'status'])
                ->make(true);
        }

        return view('auth.categories.trashed');
    }

    public function restore($category)
    {
        $ids = explode(",", $category);
        $category_ids = array_map('intval', $ids);
        Category::whereIn('id', $category_ids)->withTrashed()->restore();
        return [
            'success' => __('Data restored successfuly')
        ];
    }
}
