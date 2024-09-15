<?php

namespace App\Controllers;

use App\Models\LanguageModel;

class HomeController extends BaseController
{
    public function index(): string
    {
        $languageModel = new LanguageModel();

        $languages = $languageModel->findAll();

        return view('Home/index', [
            'languages' => $languages,
        ]);
    }
}
