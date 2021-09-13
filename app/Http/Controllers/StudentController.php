<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admission;
use App\Models\Batch;
use NagadPayment;
use App\User;
use App\Models\Coupon;

class StudentController extends Controller
{
    public function doLogin(Request $request)
    {
        //step 1 check input
        $credentials=$request->except('_token');

        //step 2 check valid user
        if (Auth::attempt($credentials)) {
            //step2.1 if valid login to the system
            // Authentication passed...
            if(auth()->user()->role ==='student')
            {

            return redirect()->route('profile');
            }
            else
            {
                Auth::logout();
        return redirect()->back()->with('message','Invalid Credentials');

            }

        }else
        {
            //step2.2 return back with error: invalid user
            return redirect()->back()->with('message','Invalid Credentials');
        }

    }
    

    public function logout()
    {
        Auth::logout();
        return redirect()->route('index');
    }


    public function studentlogin()
    {
        return view('auth.student_login');
    }




    public function profile()
    {
        $student=Admission::where('user_id', Auth()->user()->id)->first();
   
        return view('student.profile', compact('student'));
    }


    public function payNow($id)
    {
        $payment=Admission::find($id);
        
        $id = $payment->id ;
        $amount =$payment->fee;
        $redirectUrl = NagadPayment::tnxID($id)
                 ->amount($amount)
                 ->getRedirectUrl();
       //return response()->json($redirectUrl);
       return redirect($redirectUrl);
    }


    public function resetPassword()
    {
        return view('auth.passwords.changepassword');
    }


    public function checkout($id)
    {
        $admission=Admission::where('id', $id)->first();
        return view('checkout', compact('admission'));
    }


    public function coupon(Request $request)
    {
        $student=Admission::where('id', $request->id )->first();
        if($student->coupon != 1)
        {

        
        $coupon=Coupon::where('code', $request->coupon )->first();
        if(!$coupon)
        {
            return redirect()->back()->with('message', 'Coupon Does Not Exist.');
        }
        elseif($coupon->status==="active")
        {
            
            $discount_fee= $student->fee - $coupon->amount;

            Admission::where('id', $request->id )->first()->update([
                'fee'=> $discount_fee,
                'coupon' => "1"
            ]);
            return redirect()->back()->with('message', 'Coupon Added.');
        }
        else{
            return redirect()->back()->with('message', 'Coupon is expired.');
        }

    }
    else {
        return redirect()->back()->with('message', 'You already use a coupon.');
    }
    }


}
