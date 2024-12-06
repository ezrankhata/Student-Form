<?php

namespace App\Controllers;
use App\Models\StudentModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $model = new StudentModel();
        $data['students'] = $model->findAll(); // Fetch all students from the database
        return view('dashboard', $data); // Load the dashboard view with student data
    }

    public function save()
    {
        $model = new StudentModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'gender' => $this->request->getPost('gender'),
            'age' => $this->request->getPost('age'),
            'program_of_study' => $this->request->getPost('program_of_study'),
        ];
        $model->save($data); // Save student data mu database
        return redirect()->to('/dashboard'); // Redirect back to dashboard
    }
}
