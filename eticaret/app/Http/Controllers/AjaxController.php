<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function iletisimkaydet(Request $request)
    {
        /*$data = $request->all();
        $data['ip'] = request()->ip();*/

        $newdata =[
            'name' => Str::title($request->name),
            'email'=> $request->name,
            'subject'=> $request->subject,
            'message'=> $request->message,
            'ip'=> request()->ip(),
        ];

        $sonkaydedilen = Contact::create($newdata);

        return back()->with(['message' => 'İletiniz Başarıyla Gönderildi.']);
    }
}
