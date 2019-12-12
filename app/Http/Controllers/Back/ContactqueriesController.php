<?php

namespace App\Http\Controllers\Back;

use App\ContactQuery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactqueriesController extends Controller
{
    public function index()
    {
        $contactqueries = ContactQuery::get();

        return view('back.contactqueries.index', compact('contactqueries'));
    }
}
