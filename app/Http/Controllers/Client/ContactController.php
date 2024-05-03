<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Mail\ContactEmail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
        return view('client.pages.contact');
    }
    public function contact(){
        
        $name = request('name');
        $email = request('email');
        $note = request('note');
        Mail::to('tuanndps27303@fpt.edu.vn')->send(new ContactEmail($name, $email, $note));
        Contact::create([
            'name' => $name,
            'email' => $email,
            'note' => $note,
        ]);

        return redirect()->route('home')->with('ssmsg', 'Gửi mail thành công, chúng tôi sẽ liên hệ bạn trong ít phút');
    }
}
