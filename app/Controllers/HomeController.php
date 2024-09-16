<?php

namespace App\Controllers;

use App\Models\InstructorModel;
use App\Models\LanguageModel;

class HomeController extends BaseController
{
    public function index(): string
    {
        $languageModel = new LanguageModel();
        $instructorModel = new InstructorModel();

        $instructor = null;
        if (auth()->user()) {
            $instructor = $instructorModel->where('user_id', auth()->user()->id)->first();
        }

        $languages = $languageModel->findAll();

        return view('Home/index', [
            'languages' => $languages,
            'instructor' => $instructor,
        ]);
    }
}
