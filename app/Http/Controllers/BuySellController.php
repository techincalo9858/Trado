<?php
namespace App\Http\Controllers;

use App\settings;
use App\users;
use App\user_plans;
use App\plans;
use App\withdrawals;
use App\deposits;
use App\cp_transactions;
use App\tp_transactions;
use App\notifications;
use App\wdmethods;
use App\markets;
use App\balances;
use App\orders;
use DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests;

use App\Mail\NewNotification;
use Illuminate\Support\Facades\Mail;

use App\Http\Traits\CPTrait;
use App\Http\Traits\assetstrait;

class BuySellController extends Controller
{
    use CPTrait, assetstrait;
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){
        //return view('trade.exchange');
        return view('trade.exchange')
          ->with(array(
          //'earnings'=>$earnings,
          'markets' => markets::orderby('id','desc')->where('market','Cryptocurrency')->get(),
          'orders'=>orders::orderby('id','desc')->where('user',Auth::user()->id)->get(),
          'n_orders'=>orders::orderby('id','desc')->where('user',Auth::user()->id)->get(),
          'balances'=>balances::orderby('id','desc')->where('user',Auth::user()->id)->get(),
          'bals'=>balances::orderby('id','desc')->where('user',Auth::user()->id)->get(),
          'cryptopairs' =>markets::orderby('id','desc')->where('market','Cryptocurrency')->get(),
          'title'=>'Live Trading',
          'settings' => settings::where('id', '=', '1')->first(),
          ));
      }

    public function updatemarket(Request $request){
        //split the currency pair into unit currency
        $pairs = explode('/',$request->market);
        //save pairs in session
        $request->session()->put('base_c', $pairs[0]);
        $request->session()->put('quote_c', $pairs[1]);
        
        return response()->json(['success'=>'Market Changed']);
    }

    public function exchange(Request $request){

        //split the currency pair into unit currency
        $pairs = explode('/',$request->market_pair);

        if($request->type=="Buy"){
            //check if the user quote currency balance can cover the order
            //get balance
           $q_bal=balances::where('user',Auth::user()->id)->where('wallet',$pairs[1])->first();

           if(!$q_bal){
            return response()->json(['status'=>203, 'message'=>'Unable to perform operation!']);
           } 
           elseif($q_bal->balance < $request->quote_amount){
                //redirect to make deposit
                return response()->json(['status'=>201, 'message'=>'Your account is insufficient to perform this operation.']);
            }

            //get base wallet
           $b_w=balances::where('user',Auth::user()->id)->where('wallet',$pairs[0])->first();
           if(!$b_w){
                //create wallet and credit wallet
                $wallet=new balances();
                $wallet->user = Auth::user()->id;
                $wallet->wallet = $pairs[0];
                $wallet->balance = $request->base_amount;
                $wallet->save();
            
           }else{
               //credit wallet
               balances::where('id', $b_w->id)
               ->update([
               'balance'=> $b_w->balance+$request->base_amount,
               ]);
           }

           //debit quote wallet
           balances::where('id', $q_bal->id)
            ->update([
            'balance'=> $q_bal->balance-$request->qoute_amount,
            ]);


        }else{//if it is a sell order

            //check if the user base currency balance can cover the order
            //get balance
           $b_bal=balances::where('user',Auth::user()->id)->where('wallet',$pairs[0])->first();

           if(!$b_bal){
            return response()->json(['status'=>203, 'message'=>'Unable to perform operation!']);
           } 
           elseif($b_bal->balance < $request->base_amount){
               //redirect to make deposit
               return response()->json(['status'=>201, 'message'=>'Your account is insufficient to perform this operation.']);
           }

           //get quote wallet
           $q_w=balances::where('user',Auth::user()->id)->where('wallet',$pairs[1])->first();
           if(!$q_w){
                //create wallet and credit wallet
                $wallet=new balances();
                $wallet->user = Auth::user()->id;
                $wallet->wallet = $pairs[1];
                $wallet->balance = $request->quote_amount;
                $wallet->save();
            
           }else{
               //credit wallet
               balances::where('id', $q_w->id)
               ->update([
               'balance'=> $q_w->balance+$request->quote_amount,
               ]);
           }

           //debit base wallet
           balances::where('id', $b_bal->id)
            ->update([
            'balance'=> $b_bal->balance-$request->base_amount,
            ]);

        }

        $order=new orders();
        $order->type= $request->type;
        $order->user= Auth::user()->id;
        $order->base_amount= $request->base_amount;
        $order->quote_amount= $request->quote_amount;
        $order->base_c= $pairs[0];
        $order->quote_c= $pairs[1];
        $order->status= "active";
        $order->save();
        
        return response()->json(['status'=>200, 'message'=>'Order placed successfully!']);
    }

    public function closeorder($id){
        //get settings
        $settings=settings::where('id','1')->first();
        //get the order details
        $order=orders::where('id',$id)->first();
        
        //get order value with current rate 
        $price = round($this->get_rates($order->base_c,$order->quote_c,"price"),6);
        //$close_price = $order->base_amount/$price;
        $new_b_amount = $order->quote_amount/$price;
        $new_q_amount = $order->base_amount*$price;

       if($order->type=="Buy"){
            //get balance
            $b_bal=balances::where('user',Auth::user()->id)->where('wallet',$order->base_c)->first();
            if(count($b_bal)==1){
                //debit this user wallet with new amount
                balances::where('id', $b_bal->id)
                ->update([
                'balance'=> $b_bal->balance-$order->base_amount,
                ]);
            }else{
                return response()->json(['status'=>202, 'message'=>'Something went wrong!']);
            }
       }else{
           //get balance
           $q_bal=balances::where('user',Auth::user()->id)->where('wallet',$order->quote_c)->first();
           if(count($q_bal)==1){
               //credit this user wallet with new amount
               balances::where('id', $q_bal->id)
               ->update([
               'balance'=> $q_bal->balance+$order->new_q_amount,
               ]);
           }else{
            return response()->json(['status'=>202, 'message'=>'Something went wrong!']);
           }

       }

        //mark order closed
        orders::where('id', $id)
        ->update([
        'status'=>'closed',
        'closed_amount' => $new_q_amount,
        //'p_l' => $new_amount,
        'closed_at' => \Carbon\Carbon::Now(), 
        ]);

        return response()->json(['status'=>200, 'message'=>'Order closed successfully!']);
    }
}
