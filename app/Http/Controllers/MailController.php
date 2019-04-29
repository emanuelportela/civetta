<?php

namespace App\Http\Controllers;

use App\Events\Mail;
use Illuminate\Http\Request;
use App\Http\Requests\StoreContact;

class MailController extends Controller {

    public function mail(StoreContact $request) {
        event(new Mail($request));
        return redirect()->back();
    }
}
