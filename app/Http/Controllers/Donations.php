<?php
namespace App\Http\Controllers;
use App\Models\PayUnit;
use Illuminate\Http\Request;

class Donations extends Controller
{
    //
    public function donate(Request $request){
    $amount = $request->input('amount');
     $myPayment = new PayUnit(
      "06c7b1a8-a3dd-40d8-87f8-e29e3fb41c13",
      "55b9494d-8581-4d5b-a9a1-6a1cd13f5f71",
      "sand_Wtqlmnv7hnXmgobHwJFzeDotZgdMKH",
      "http://127.0.0.1:8000/pay-status",
      "notifyUrl",
      "mode",
      "description",
      "purchaseRef",
      "XAF",
      "name"
    );
     $myPayment->makePayment($amount);
    }

}