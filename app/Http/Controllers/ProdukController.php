<?php

namespace App\Http\Controllers;

use App\Models\Size;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {              
        // Langsung ke datatable with Ajax
        if (request()->ajax()) {
            
            $data = DB::table('sys_produk')->orderBy('produk_id', 'desc')->get();

            return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                    $btn = '<a href="javascript:void(0)" data-id="'.$row->produk_id.'" class="edit editProduk btn btn-primary btn-sm mr-2">View</a>';
                    $btn .= '<a href="javascript:void(0)" data-id="'.$row->produk_id.'" class="delete deleteProduk btn btn-danger btn-sm">Delete</a>';
                        return $btn;    
                })
                ->rawColumns(['action'])
                ->editColumn('produk_sku_id', function($row){
                    return $row->produk_sku_id ? $row->produk_sku_id : '-'; 
                })
                ->editColumn('product_price', function($row){
                    return number_format($row->product_price,2,',','.');
                })
                // ->make(true)
                ->toJson();
        }

        return view ('pages.warehouse.input-produk');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product_size = Size::all();
        return view('pages.master.produk.add', ['product_size' => $product_size]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {                
        $validator = Validator::make($request->all(), [
            'category_product'   => 'required',
            'name_product'       => 'required',
            'price_product'      => 'required',
            'price_sale_product' => 'required',
            'tags_product'       => 'required',
            'qty_product'        => 'required|numeric|min:1'
        ]); 

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        
        // To string
        $json = json_encode($request->tags_product);
        dd($json);

        $produk_variant = implode(" ",$request->produk_variant);

        $post = Produk::create([
            'product_category_name'     => $request->kategori, 
            'product_name'              => $request->produk_name,
            'product_price'             => $request->produk_price,
            'product_size'              => $produk_variant,
            'product_stock'             => $request->produk_qty
        ]);

        return redirect()->route('produk')->with('success', 'Data Tersimpan!');
    }

    /**
    * Display the specified resource.
    *
    * @param int $id
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param int $id
    * @return \Illuminate\Http\Response
    */
    public function edit($id)
    {
        $produk = Produk::find($id);
        return response()->json($produk);
    }

    /**
    * Update the specified resource in storage.
    *
    * @param \Illuminate\Http\Request $request
    * @param int $id
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id)
    {
        
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param int $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        
    }

    public function get_product_size(){
        if (request()->ajax()) {
            $product_size = Size::all()->toJson();
        }
    }

}