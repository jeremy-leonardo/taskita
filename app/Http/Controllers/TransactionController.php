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
use App\Transaction;

class TransactionController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $redirectTo = '/';
    protected $module = 'transaction';


    public function __construct()
    {
    }

    public function showAllByCurrentUser()
    {
        if (!Auth::guard('web')->check()) {
            return redirect()->intended('/');
        }

        $transactions = DB::table('transaction')
            ->where('user_id', Auth::guard('web')->user()->user_id)
            ->join('item', 'item.item_id', '=', 'transaction.item_id')
            ->join('status', 'status.status_id', '=', 'transaction.status_id')
            ->leftJoin('payment', 'payment.transaction_id', '=', 'transaction.transaction_id')
            ->leftJoin('payment_type', 'payment_type.payment_type_id', '=', 'payment.payment_type_id')
            ->select('transaction.transaction_id', 'item.item_id', 'transaction.user_id', 'transaction.transaction_arrive_date', 'transaction.transaction_rent_duration', 'transaction.created_at', 'transaction.updated_at', 'item.item_type_id', 'item.brand_id', 'item.item_name', 'item.item_price', 'status.status_name', 'payment.payment_id', 'payment_type.payment_type_id', 'payment_type.payment_type_name')
            ->get();

        foreach ($transactions as $transaction) {
            $weekly_price = $transaction->item_price * 4;
            $delivery_cost = 10000;
            $weekly_charge = floor($transaction->transaction_rent_duration / 4) * $weekly_price;
            $daily_charge = $transaction->item_price * ($transaction->transaction_rent_duration % 4);
            $transaction->item_charge = $weekly_charge + $daily_charge;
            $transaction->total_charge = $weekly_charge + $daily_charge + $delivery_cost;
        }

        // dd($transactions);

        return view('order.index', ['transactions' => $transactions]);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'duration' => ['required', 'numeric'],
            'arrive-date' => ['required'],
            'item' => ['required', 'numeric']
        ]);
    }

    protected function create(Request $request)
    {
        $item = DB::table('item')->where('item_id', $request['item']);
        if ($item->get()->first()->item_stock > 0) {
            $this->validator($request->all())->validate();
            $transaction = Transaction::create([
                'item_id' => $request['item'],
                'user_id' => Auth::guard('web')->user()->user_id,
                'status_id' => 1,
                'transaction_arrive_date' => $request['arrive-date'],
                'transaction_rent_duration' => $request['duration']
            ]);
            $transaction->save();
            // $item->decrement('item_stock', 1);
            return redirect()->intended('/order');
        }
    }
}
