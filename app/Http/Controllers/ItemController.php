<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use App\Item;

class ItemController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $redirectTo = '/';
    protected $module = 'item';


    public function __construct()
    {
    }

    public function showAll()
    {

        $items = DB::table('item')
            ->join('item_type', 'item_type.item_type_id', '=', 'item.item_type_id')
            ->join('brand', 'brand.brand_id', '=', 'item.brand_id')
            ->get();

        return view('catalog.index', ['items' => $items]);
    }

    public function search(Request $request)
    {

        $search_key = $request;

        $items = DB::table('item');

        if ($search_key->item_name && $search_key->item_name != '')
            $items = $items->where('item_name', 'like', "%" . $search_key->item_name . "%");

        $items = $items->join('item_type', 'item_type.item_type_id', '=', 'item.item_type_id');

        if ($search_key->item_type_id != -99)
            $items = $items->where('item.item_type_id', '=', $search_key->item_type_id);

        $items = $items->join('brand', 'brand.brand_id', '=', 'item.brand_id')->get();
        // ->paginate(); //gausah pke get() klo uda paginate()

        return view('catalog.index', ['items' => $items, 'search_key' => $search_key]);
    }

    public function show($item_id)
    {

        $item = DB::table('item')
            ->join('item_type', 'item_type.item_type_id', '=', 'item.item_type_id')
            ->join('brand', 'brand.brand_id', '=', 'item.brand_id')
            ->where('item_id', $item_id)
            ->get()->first();

        return view('catalog.detail', ['item' => $item]);
    }
}
