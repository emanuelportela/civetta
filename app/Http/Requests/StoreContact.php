<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContact extends FormRequest
{
   
   public function authorize() {
      return true;
   }

   
   public function rules() {
      return [
         'nom' => 'required|min:3|max:60',
         'email' => 'required|email',
         'message' => 'required|min:3|max:800',
      ];
   }

   public function messages() {
      return[
         'nom.required' => 'Entrez un nom.',
         'nom.min' => 'Minimum 3 characters.',
         'nom.max' => 'Maximum 60 characters.',
         'email.required' => 'Entrez email.',
         'email.email' => 'Cela doit être un email.',
         'message.required' => 'Entrez un message.',
         'message.min' => 'Minimum 3 characters.',
         'message.max' => 'Maximum 800 characters.',
      ];
   }
}

