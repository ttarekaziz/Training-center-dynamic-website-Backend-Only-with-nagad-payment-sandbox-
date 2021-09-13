<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admission;
use NagadPayment;

class NagadPaymentController extends Controller
{

    
    public function callback()
    {
        $verify = (object) NagadPayment::verify();
        if($verify->status === 'Success'){
            $order = json_decode($verify->additionalMerchantInfo);
            $oid = $order->tnx_id;

            Admission::where('id', $oid )->first->update([
                'payment'=> "Complete",
                'invoice'=> $verify->orderId,
                'payment_method' => "Nagad"
            ]);

            dd("Your Payment is Done");
        }
        if ($verify->status === 'Aborted') {
           

            
            return redirect('/student-login');
        }
       
    }
}
