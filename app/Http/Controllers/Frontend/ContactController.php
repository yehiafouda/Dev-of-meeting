<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Contact\SendContactRequest;
use App\Mail\Frontend\Contact\SendContact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Question;

/**
 * Class ContactController.
 */
class ContactController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.contact');
    }

    /**
     * @param SendContactRequest $request
     *
     * @return mixed
     */
    public function send(SendContactRequest $request)
    {
        Mail::send(new SendContact($request));

        return redirect()->back()->withFlashSuccess(__('alerts.frontend.contact.sent'));
    }

    public function questions(){
        return view('frontend.questions');
    }

    public function questions_save(Request $request){
        $q = new Question;
        $q->name = $request->name;
        $q->age = $request->age;
        $q->nationality = $request->nationality;
        $q->specialty = $request->specialty;
        $q->purpose = $request->purpose;
        $q->goal = $request->goal;
        $q->gender = $request->gender;
        $q->worked = $request->worked;
        $q->level = $request->level;
        $q->save();

        return back()->with("success", "شكرا لقد تم تسجيل طلبك");
    }
}
