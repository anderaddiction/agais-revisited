<?php

namespace App\Http\Controllers\Images;

use App\Models\Images\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Categories\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\Images\ImageRequest;

class ImageController extends Controller
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
        $image    = new Image();
        if ($request->ajax()) {
            $image = Image::orderBy('created_at', 'ASC')
                ->with('categories')
                ->get();
            return DataTables::of($image)
                ->addIndexColumn()
                ->addColumn('created_at', function ($image) {
                    return $image->present()->created_at();
                })
                ->addColumn('status', function ($image) {
                    return $image->present()->status();
                })
                ->addColumn('imagen', function ($image) {
                    return $image->present()->imagen();
                })
                ->addColumn('width', function ($image) {
                    return $image->present()->width();
                })
                ->addColumn('height', function ($image) {
                    return $image->present()->height();
                })
                ->addColumn('category', function ($image) {
                    return $image->present()->category();
                })
                ->addColumn('action', function ($image) {
                    return $image->present()->actionButton();
                })
                ->rawColumns(['action', 'status', 'category', 'width', 'height'])
                ->make(true);
        }

        return view('auth.gallery.images.index', [
            'image'   => $image
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $image = new Image();
        $categories = Category::orderBy('name', 'ASC')->where('status', 1)->pluck('name', 'id');

        return view('auth.gallery.images.create', [
            'image'      => $image,
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ImageRequest $request)
    {

        $category = Category::where('id', $request->category_id)->first();
        $extension = $request->file('image')->extension();
        $image_to_store = $request->file('image')->store('images/' . $category->name);
        $image = Image::create(
            $request->except(['category_id', 'slug', 'extension', 'note', 'image'])
                + ['code' => uniqueCode()]
                + ['slug' => generateUrl($request->name)]
                + ['extension' => $extension]
                + ['note' => $request->note ? $request->note : 'N/A']
                + ['image' => $image_to_store]
        );

        $image->categories()->attach($request->category_id);

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
    public function show($id)
    {
        $image = Image::find($id);
        return response()->json($image, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Image $image)
    {
        $categories  = Category::orderBy('name', 'ASC')->pluck('name', 'id');

        return view('auth.gallery.images.edit', [
            'image'      => $image,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ImageRequest $request, Image $image)
    {
        if ($image->image) {
            Storage::delete($image->image);
        }

        $category = Category::where('id', $request->category_id)->first();
        $extension = $request->file('image')->extension();
        $image_to_update = $request->file('image')->store('images/' . $category->name);
        $image->update(
            $request->except(['category_id', 'image', 'extension'])
                + ['slug' => generateUrl($request->name)]
                + ['image' => $image_to_update]
                + ['extension' => $extension]
                + ['note' => $request->note ? $request->note : 'N/A']
        );

        $image->categories()->sync($request->category_id);

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
    public function destroy($image)
    {
        $ids = explode(",", $image);
        Image::destroy($ids);
        DB::table('assigned_images')->whereIn('image_id', $ids)->delete();
        return [
            'success' => __('Data deleted successfuly')
        ];
    }

    public function trashed(Request $request)
    {
        $image    = new Image();
        if ($request->ajax()) {
            $image = Image::onlyTrashed()
                ->orderBy('created_at', 'ASC')
                ->with('categories')
                ->get();
            return DataTables::of($image)
                ->addIndexColumn()
                ->addColumn('created_at', function ($image) {
                    return $image->present()->created_at();
                })
                ->addColumn('status', function ($image) {
                    return $image->present()->status();
                })
                ->addColumn('imagen', function ($image) {
                    return $image->present()->imagen();
                })
                ->addColumn('category', function ($image) {
                    return $image->present()->category();
                })
                ->addColumn('action', function ($image) {
                    return $image->present()->actionButton();
                })
                ->rawColumns(['action', 'status', 'category'])
                ->make(true);
        }

        return view('auth.gallery.images.trashed', [
            'image'   => $image
        ]);
    }

    public function restore($image)
    {
        $ids = explode(",", $image);
        $image_ids = array_map('intval', $ids);
        Image::whereIn('id', $image_ids)->withTrashed()->restore();
        return [
            'success' => __('Data restored successfuly')
        ];
    }
}
