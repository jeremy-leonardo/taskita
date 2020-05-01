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

class TransactionController extends BaseController
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

    public function showAllByCurrentUser()
    {
        if(!Auth::guard('web')->check()){
            return redirect()->intended('/');
        }

        $transactions = DB::table('transaction')
            ->where('user_id', Auth::guard('web')->user()->user_id)
            ->join('item', 'item.item_id', '=', 'transaction.item_id')
            ->join('payment', 'payment.transaction_id', '=', 'transaction.transaction_id')
            ->join('payment_type', 'payment_type.payment_type_id', '=', 'payment.payment_type_id')
            ->get();

        return view('order.index', ['transactions' => $transactions]);
    }
}
