<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContentFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
           'name' => 'required|string|min:3', // "name" için doğru format
            'email' => 'required|email', // "email" için doğrulama
            'subject' => 'required', // "subject" için doğrulama
            'message' => 'required', // "message" için doğrulama
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'İsim Soyisim Zorunludur',
            'name.string' => 'İsim Soyisim Karakterlerden Oluşmalı',
            'name.min' => 'İsim Soyisim Minimum 3 Karakterden Oluşmalıdır',
            'email.required' => 'E Posta Zorunludur',
            'email.email' => 'Geçersiz Bir Email Adresi Girdiniz',
            'subject.required' => 'Konu Kısmı Boş Geçilemez',
            'message.required' => 'Mesaj Kısmı Boş Geçilemez',
        ];
    }
}
