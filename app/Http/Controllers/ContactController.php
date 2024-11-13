<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
   public function contact(){
        return view('contact',[
            'title' => "contact",
            'nama' => "Fakhry",
            'alamat' => "Demak",
            'linkedin'=>"https://www.linkedin.com/in/fakhry-alifahrizq-693923298/",
            'github' =>"https://github.com/Alirzq"
        ]);
    }
}

