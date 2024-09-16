<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\InstructorLanguageModel;
use App\Models\InstructorModel;
use App\Models\LanguageModel;
use CodeIgniter\HTTP\ResponseInterface;

class LanguageController extends BaseController
{
    public function show($languageName)
    {
        $languageModel = new LanguageModel();
        $language = $languageModel->where('name', $languageName)->first();

        if (!$language) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $instructorModel = new InstructorModel();

        $instructors = $instructorModel->getInstructorsByLanguage($language['id']);

        return view('Language/show', [
            'language' => $language,
            'instructors' => $instructors,
        ]);
    }
}
