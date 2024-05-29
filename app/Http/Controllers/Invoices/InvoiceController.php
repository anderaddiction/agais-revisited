<?php

namespace App\Http\Controllers\Invoices;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Invoices\Invoice;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use App\Http\Requests\InvoiceRequest;

class InvoiceController extends Controller
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
            $invoice = Invoice::get();
            return DataTables::of($invoice)
                ->addIndexColumn()
                ->addColumn('created_at', function ($invoice) {
                    return $invoice->present()->created_at();
                })
                ->addColumn('action', function ($invoice) {
                    return $invoice->present()->actionButton();
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('auth.documents.invoices.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $pdf = Pdf::loadView('auth.documents.invoices.invoice-test');
        // return $pdf->stream('invoice.pdf');
        $invoice = new Invoice();
        return view('auth.documents.invoices.create', [
            'invoice' => $invoice
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InvoiceRequest $request)
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
