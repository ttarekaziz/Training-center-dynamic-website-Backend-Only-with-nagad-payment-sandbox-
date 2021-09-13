<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Slider;
use Mail;
use App\Models\Batch;
use NagadPayment;

use App\Models\Course_module;
use App\Models\Gallery;
use App\Models\Student_feedback;
use App\Models\Event;
use App\Models\Why_us;
use App\Models\Design1;
use App\Models\Design2;
use App\Models\Welcome_slide;
use App\Models\Admission;
use App\Models\Consult;
use App\Models\Location;
use App\Models\Comment;
use App\Models\Requirment;
use App\Models\Video;
use App\Models\Mentor;
use App\Models\Social_activity;
use App\Models\Social_cover;
use App\Models\Contact_us;
use App\Models\Blog;
use App\Models\Course;
use App\Models\Contact;
use App\Models\Registration;
use App\Models\Department;
use App\User;


use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function about()
    {
        $why_uss=Why_us::get();
        $all_data = About::first();
        $mentors = Mentor::get();
        return view('about', compact('all_data', 'mentors','why_uss'));
    }

    public function course()
    {
        
$departments = Department::where('status', 'active')->get();

     
        return view('course', compact('departments'));
    }
    
    
    public function admission()
    {
        $all_batch = Batch::get();
        return view('admission', compact('all_batch'));
    }

    public function allcourse()
    {
        
        $courses = Course::where('status',"active")->get();
        return view('allcourse', compact('courses'));
    }
    
    
    public function allblog()
    {
        
        $populars = Blog::orderBy('id', 'DESC')->get();
        return view('allblog', compact('populars'));
    }

    public function admission2(Request $request)
    {
        $request->validate([
            
           
            'name'      => 'required',
            
            'email'  => 'required|unique:users'
           
        ]);

        $user=User::create([
            'name'     => $request->name,
         
            'email'    => $request->email,
            'password' => bcrypt('12345678'),
            'role' =>"student",
            'status' => "staudent"
        ]);


        if(!$request->batch_id)
        {
            $batch=Batch::where('id', $request->course_duration)->first();
            $fee= $batch->fee;
            
            $admission=Admission::create([
                //'column name'=>'input / value'
    
                'name' => $request->name,
                'user_id' => $user->id,
                'phone' => $request->phone,
                'email' => $request->email,
                'father_name' => $request->father_name,
                'mother_name' => $request->mother_name,
                'present_address' => $request->present_address,
                'parmanent_address' => $request->parmanent_address,
                'national_id' => $request->nid,
                'dob' => $request->dob,
                'blood' => $request->blood,
                'gender' => $request->gender,
                'yop1' => $request->yop1,
                'yop2' => $request->yop2,
                'yop3' => $request->yop3,
                'yop4' => $request->yop4,
                'degree1' => $request->degree1,
                'degree2' => $request->degree2,
                'degree3' => $request->degree3,
                'degree4' => $request->degree4,
                'subject1' => $request->subject1,
                'subject2' => $request->subject2,
                'subject3' => $request->subject3,
                'subject4' => $request->subject4,
                'bou1' => $request->bou1,
                'bou2' => $request->bou2,
                'bou3' => $request->bou3,
                'bou4' => $request->bou4,
                'course_name' => $request->course_name,
                'course_duration' => $request->course_duration,
                'status'=>"running",
                'payment'=> "Pending",
                'fee'=> $fee
            ]);
        }

        else {
            $batch=Batch::where('id', $request->batch_id)->first();
            $course_name= $batch->course_name;
            $course_duration= $batch->course_id;
            $fee= $batch->fee;
            
            $admission= Admission::create([
                //            'column name'=>'input / value'
                'name' => $request->name,
                'user_id' => $user->id,
                'phone' => $request->phone,
                'email' => $request->email,
                'father_name' => $request->father_name,
                'mother_name' => $request->mother_name,
                'present_address' => $request->present_address,
                'parmanent_address' => $request->parmanent_address,
                'national_id' => $request->nid,
                'dob' => $request->dob,
                'blood' => $request->blood,
                'gender' => $request->gender,
                'yop1' => $request->yop1,
                'yop2' => $request->yop2,
                'yop3' => $request->yop3,
                'yop4' => $request->yop4,
                'degree1' => $request->degree1,
                'degree2' => $request->degree2,
                'degree3' => $request->degree3,
                'degree4' => $request->degree4,
                'subject1' => $request->subject1,
                'subject2' => $request->subject2,
                'subject3' => $request->subject3,
                'subject4' => $request->subject4,
                'bou1' => $request->bou1,
                'bou2' => $request->bou2,
                'bou3' => $request->bou3,
                'bou4' => $request->bou4,
                'course_name' => $course_name,
                'course_duration' => $course_duration,
                'status'=>"running",
                'payment'=> "Pending",
                'fee'=> $fee
                ]);

            }


            return view('checkout', compact('admission'));


/* 
                if($request->payment=="nagad")
                {
                   
                    $id = $admission->id ;
                    $amount = $fee;
                    $redirectUrl = NagadPayment::tnxID($id)
                             ->amount($amount)
                             ->getRedirectUrl();
                   //return response()->json($redirectUrl);
                   return redirect($redirectUrl);
                }
            
    */
        
        
        
    }

    public function checkout()
    {
        dd($admission);
    }


    
    public function mentor()
    {

        $departments = Department::where('status', "active")->get();
        $mentors = Mentor::get();


        return view('mentor', compact('mentors','departments'));
    }

    public function blog()
    {
        $blogs = Blog::orderBy('id', 'DESC')->paginate(6);
        $populars = Blog::orderBy('viewed', 'DESC')->paginate(6);
        $recents = Blog::orderBy('id', 'DESC')->paginate(6);

        return view('blog', compact('blogs', 'populars','recents'));
    }

    public function blogdetails($id)
    {
        $comments=Comment::where('blog_id', $id)->where('status', "approve")->orderBy('id','DESC')->paginate(7);
        $populars = Blog::orderBy('viewed', 'DESC')->paginate(6);
        $recents = Blog::orderBy('id', 'DESC')->paginate(6);
        $view = Blog::find($id);
        Blog::find($id)->update([

            'viewed' => $view->viewed + 1,
        ]);

        $coursess=Course::orderBy('id','DESC')->paginate(8);

        $blog = Blog::find($id);
        return view('blog-details', compact('blog','populars','recents','coursess','comments'));
    }


    public function social_activity_details($id)
    {

        $social_activity = Social_activity::find($id);
        return view('social_activity_details', compact('social_activity'));
    }


    public function contact()
    {
        $contact = Contact::first();
        $location=Location::first();

        return view('contact', compact('contact','location'));
    }




    public function gallery()
    {
        $students = Gallery::where('category', 'Student')->orderBy('id', 'DESC')->get();
        $mentors = Gallery::where('category', 'Mentor')->orderBy('id', 'DESC')->get();
        $events = Gallery::where('category', 'Event')->orderBy('id', 'DESC')->get();
        $sliders = Slider::orderBy('id', 'DESC')->get();

        return view('gallery', compact('sliders', 'students', 'mentors', 'events'));
    }




    public function seminar()
    {
        $seminars = Event::where('category','Seminar')->where('status',"Active")->orderBy('date', 'DESC')->paginate(3);
        $workshops = Event::where('category','Workshop')->where('status',"Active")->orderBy('date', 'DESC')->paginate(3);

        return view('seminar', compact('seminars', 'workshops'));
    }




    public function socialActivity()
    {
        $social_activities=Social_activity::get();
        $social_cover=Social_cover::first();
        return view('social-activity',compact('social_activities','social_cover'));
    }




    public function studentFeedback()
    {
        $social_cover=Social_cover::first();
        $student_cover=Social_cover::where('id','!=',$social_cover->id)->first();
        $video=Video::first();
        $s_video=Video::where('id','!=',$video->id)->first();
        $all_feedback=Student_feedback::orderBy('priority','ASC')->get();
        return view('student-feedback',compact('student_cover','s_video','all_feedback'));
    }

    public function course_details($id)
    {

        $contact = Contact::first();
        $batch=Batch::where('status', "active")->first();
        $up_course=Course::where('id',$batch->course_id )->paginate(1);
        
        $course = Course::find($id);
        $relatcoursess=Course::where('department', $course->department)->get();
        $course_modules=Course_module::where('course_id', $course->id)->get();
        $requirments=Requirment::where('course_id', $course->id)->get();
        return view('course-details', compact('course','course_modules','relatcoursess','up_course','contact','requirments'));
    }



    public function contactus(Request $request)
    {
        

        Mail::send('emails.contactmail',[
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'phone' => $request->phone,
            'hululu' => $request->message
        ], function($mail) use($request){
            $mail->from(env('MAIL_FROM_ADDRESS'), $request->name);
            $mail->to("dmsuttara1@gmail.com")->subject('Contact Us Message');
            
        });

        Contact_us::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'phone' => $request->phone,
            'status' => "unseen",
            'message' => $request->message,
        ]);

        return redirect()->back()->with('message', 'Message Send Successfully.');
    }


        public function consultant(Request $request)
    {

        Mail::send('emails.consultmail',[
        'name' => $request->name,
        'email' => $request->email,
        'course' => $request->course,
        'phone' => $request->phone,
        'hululu' => $request->message,
        ], function($mail) use($request){
            $mail->from(env('MAIL_FROM_ADDRESS'), $request->name);
            $mail->to("dmsuttara1@gmail.com")->subject('Consult Message');
            
        });


        Consult::create([
        'name' => $request->name,
        'email' => $request->email,
        'course' => $request->course,
        'phone' => $request->phone,
        'status' => "unseen",
        'message' => $request->message,
        ]);

        return redirect()->back()->with('message', 'Message Send Successfully.');

    }
       


    public function registration(Request $request)
    {

       

        Registration::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'event_title' => $request->title,
            'event_category' => $request->category,
        ]);
        return redirect()->back()->with('message', 'Registration completed');
    }




    public function registernow($id)
    {
        $batch=Batch::find($id);

        return view('registernow', compact('batch'));

    }

    public function registerseminar($id)
    {
        $event=Event::find($id);

        return view('seminar-register', compact('event'));

    }


    public function checking()
    {
        return view('checking.checking');
    }


    public function design1($id)
    {
        $courses=Course::paginate(3);
        $design1=Design1::find($id)->first();
        return view('design1',compact('design1','courses'));
    }

    public function design2($id)
    {
        
        $design2=Design2::find($id);
        return view('design2',compact('design2'));
    }





    public function addcomment(Request $request)
    {
        

        Comment::create([
            'name' => $request->name,
            'email' => $request->email,
            'comment' => $request->comment,
            'status' => "pending",
            'blog_id' => $request->blog_id,
           
        ]);
        return redirect()->back()->with('comment', 'Comment Submited');
    }
    
    
       public function departmentblock($id)
    {
        Department::find($id)->update([ 
            'status' => "block",
            /*'updated_by'=>auth()->user()->id*/
        ]);

        return redirect()->back();
    }

    public function departmentactive($id)
    {
        Department::find($id)->update([ 
            'status' => "active",
            /*'updated_by'=>auth()->user()->id*/
        ]);

        return redirect()->back();
    }

    
}
