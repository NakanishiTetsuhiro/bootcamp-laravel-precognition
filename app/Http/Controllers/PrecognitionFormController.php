<?php

namespace App\Http\Controllers;

use App\Http\Requests\PrecognitionFormRequest;
use Illuminate\Http\Request;
use Inertia\Inertia;
class PrecognitionFormController extends Controller
{
    public function create()
    {
        return Inertia::render('PrecognitionForm/Index');
    }

    public function store(PrecognitionFormRequest $request)
    {
        // ここで何かをする

        return ['result' => true];
    }
}
