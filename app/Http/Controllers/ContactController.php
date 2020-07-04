<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller {
    public function sendMail(Request $request) {
        var_dump($request->all());
        $this->validate($request, [
            'Nom' => 'required',
            'Mail' => 'required|email',
            'Objet' => 'required',
            'Contenu' => 'required'
        ]);

        
    }
}
