<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\InstructorLanguageModel;
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

        $instructorModel = new InstructorModel();

        $instructor = $instructorModel->where('user_id', $user->id)->first();

        if ($instructor) {
            return redirect('/');
        }

        $instructorLanguageModel = new InstructorLanguageModel();
        $languageModel = new LanguageModel();

        $data = [
            'user_id' => $user->id,
            'description' => $this->request->getPost('description'),
            'phone' => $this->request->getPost('phone'),
        ];

        $instructorId = $instructorModel->insert($data);

        if ($this->request->getPost('language')) {
            foreach ($this->request->getPost('language') as $language) {
                $languageId = $languageModel->where('name', $language)->first()['id'];

                $instructorLanguageModel->insert([
                    'instructor_id' => $instructorId,
                    'language_id' => $languageId,
                ]);
            }
        }

        return redirect('/');
    }

    public function edit()
    {
        if (!auth()->user()) {
            return redirect('/');
        }

        $instructorModel = new InstructorModel();
        $instructor = $instructorModel->where('user_id', auth()->user()->id)->first();

        if (!$instructor) {
            return redirect('/');
        }

        $languageModel = new LanguageModel();
        $instructorLanguageModel = new InstructorLanguageModel();
        $languages = $languageModel->findAll();

        $instructorLanguages = $instructorLanguageModel->where('instructor_id', $instructor['id'])->find();

        return view('Instructor/edit', [
            'languages' => $languages,
            'instructor' => $instructor,
            'instructorLanguages' => $instructorLanguages,
        ]);
    }

    public function update() {
        if (!auth()->user()) {
            return redirect('/');
        }

        $instructorModel = new InstructorModel();
        $languageModel = new LanguageModel();
        $instructorLanguageModel = new InstructorLanguageModel();
        $instructorId = $instructorModel->where('user_id', auth()->user()->id)->first()['id'];

        $instructorModel->update($instructorId, $this->request->getPost());

        $instructorLanguageModel->where('instructor_id', $instructorId)->delete();

        if ($this->request->getPost('language')) {
            foreach ($this->request->getPost('language') as $language) {
                $languageId = $languageModel->where('name', $language)->first()['id'];

                $instructorLanguageModel->insert([
                    'instructor_id' => $instructorId,
                    'language_id' => $languageId,
                ]);
            }
        }

        return redirect()->back();
    }
}
