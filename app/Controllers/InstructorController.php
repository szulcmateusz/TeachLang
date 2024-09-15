<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\InstructorModel;
use App\Models\LanguageModel;
use CodeIgniter\HTTP\ResponseInterface;

class InstructorController extends BaseController
{
    public function index($languageName)
    {
        dd('');
    }

    public function new()
    {
        $model = new LanguageModel();
        $languages = $model->findAll();

        return view('Instructor/new', [
            'languages' => $languages,
        ]);
    }
    public function create()
    {
        $user = auth()->user();

        if (!$user) {
            return redirect('/');
        }

        $model = new InstructorModel();

        $instructor = $model->where('user_id', $user->id)->first();

        if ($instructor) {
            return redirect('/');
        }

        $data = [
            'user_id' => $user->id,
            'description' => $this->request->getPost('description'),
            'phone' => $this->request->getPost('phone'),
        ];
        $model->insert($data);

        return redirect('/');
    }
}
