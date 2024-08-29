<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class contactcontroller extends Controller
{
    public function create (Request $request) {
        // return $request->all();
        $insert = DB::table('contact_app')->insert([
            "contact_name" => $request->contact_name,
            "contact_no" => $request->contact_no,
            "user_id" => auth()->user()->user_id,
        ]);
        return redirect("/contact"); 
    }

    public function read () {
        $contacts = DB::table("contact_app")->get();

        return view ("contact.contact", [
            "contact" => $contact
        ]);
    }
}
