<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class UserController extends BaseController
{
    public function create()
    {
        return view('create_user');
    }

    public function store()
    {
        $model = new UserModel();

        $data = [
            'firstname' => $this->request->getPost('firstname'),
            'middlename' => $this->request->getPost('middlename'),
            'lastname' => $this->request->getPost('lastname'),
        ];

        if ($model->insert($data)) {
            return redirect()->to('/user/create')->with('message', 'User created successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to create user.');
        }
    }

    // New method to list users
    public function list()
    {
        $model = new UserModel();
        $data['users'] = $model->findAll();  // Get all users from DB

        return view('listofuser', $data);
    }

    public function delete($id)
{
    $model = new UserModel();

    if ($model->delete($id)) {
        return redirect()->to('/user/list')->with('message', 'User deleted successfully.');
    } else {
        return redirect()->to('/user/list')->with('error', 'Failed to delete user.');
    }
}

}
