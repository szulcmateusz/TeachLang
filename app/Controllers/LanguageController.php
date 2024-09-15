<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LanguageModel;
use CodeIgniter\HTTP\ResponseInterface;

class LanguageController extends BaseController
{
    public function index($languageName)
    {
        $model = new LanguageModel();
        $language = $model->where('name', $languageName)->first();

        if (!$language) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        dd($language);
    }
}
