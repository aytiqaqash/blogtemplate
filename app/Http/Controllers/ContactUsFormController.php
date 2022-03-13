<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactUsFormController extends Controller {
    // Contact formasına yönləndirir.
    public function createForm(Request $request) {
        return view('contact');
    }

    public function ContactUsForm(Request $request) {
        // Formadan gələn məlumatları yoxlayırıq
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'subject'=>'required',
            'message' => 'required'
        ]);
        // Contact formdan məlumatları VB əlavə edirik
        Contact::create($request->all());

        // Geri cavab mesajı qaytarırıq.
        return back()->with('success', 'Mesajınızı aldıq. Tez bir zamanda baxılacaq. Müraciətiniz üçün təşəkkür edirik.');
    }
}
