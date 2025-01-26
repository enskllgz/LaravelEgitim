<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\ContentFormRequest;

class AjaxController extends Controller
{
    public function iletisimkaydet(ContentFormRequest $request)
    {
        // Doğrulama işlemi
        /*$validationdata = $request->validate([
            'name' => 'required|string|min:3', // "name" için doğru format
            'email' => 'required|email', // "email" için doğrulama
            'subject' => 'required', // "subject" için doğrulama
            'message' => 'required', // "message" için doğrulama
        ],[

            'name.required' => 'İsim Soyisim Zorunludur',
            'name.string' => 'İsim Soyisim Karakterlerden Oluşmalı',
            'name.min' => 'İsim Soyisim Minimum 3 Karakterden Oluşmalıdır',
            'email.required' => 'E Posta Zorunludur',
            'email.email' => 'Geçersiz Bir Email Adresi Girdiniz',
            'subject.required' => 'Konu Kısmı Boş Geçilemez',
            'message.required' => 'Mesaj Kısmı Boş Geçilemez',
        ]);*/

        // Veriyi database'e kaydetme işlemi
        $newdata = [
            'name' => Str::title($request->name),
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'ip' => request()->ip(),
        ];

        // Veriyi kaydet
        $sonkaydedilen = Contact::create($newdata);

        // Başarı mesajı ile geri dön
        return back()->with(['message' => 'İletiniz Başarıyla Gönderildi.']);
    }
}
