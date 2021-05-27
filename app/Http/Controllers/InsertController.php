<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmailRequest;
use App\Subscribe;
use Illuminate\Http\Request;

class InsertController extends Controller
{
    public function create(){
        return view('subscribe');
    }

    public function store(EmailRequest $request){
        $data = $request->validated();
        $email = Subscribe::create($data);
    }
}
