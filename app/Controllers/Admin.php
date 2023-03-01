<?php

namespace App\Controllers;

use App\Models\AdminModel;
use CodeIgniter\RESTful\ResourceController;

class Admin extends ResourceController
{
    protected $adminModel;

    public function __construct()
    {
        $this->adminModel = new AdminModel();
    }

    public function index()
    {
        helper('form');
        $data = [
            'title' => 'Table Admin',
            'parentdir' => 'admin',
            'admin' => $this->adminModel->findAll()
        ];

        return view('admin/admin', $data);
    }

    public function new()
    {
        helper('form');
        $data = [
            'title' => 'Tambah Admin',
            'parentdir' => 'admin',
        ];

        return view('admin/admin_add', $data);
    }

    public function create()
    {
        helper('form');
        $rules = [
            'fullname' => 'required|min_length[5]|max_length[30]',
            'username' => 'required|min_length[5]|max_length[16]',
            'password' => 'required|min_length[5]|max_length[16]',
            'konfirmasiPassword' => 'required|matches[password]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->to(base_url('U/Admin/new'))->with('type-status', 'error')
                ->with('dataMessage', $this->validator->getErrors());
        }

        $data = [
            'username' => $this->request->getPost('username'),
            'fullname' => $this->request->getPost('fullname'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'last_login' => date('Y-m-d H:i:s')
        ];

        $this->adminModel->save($data);

        return redirect()->to(base_url('U/Admin'))->with('type-status', 'error')
            ->with('message', 'Data berhasil ditambahkan');
    }

    public function edit($id = null)
    {
        helper('form');
        $data = [
            'title' => 'Edit Admin',
            'parentdir' => 'admin',
            'admin' => $this->adminModel->find($id)
        ];

        return view('admin/admin_edit', $data);
    }

    public function update($id = null)
    {
        helper('form');
        if ($this->request->getPost('password') != null) {
            $rules = [
                'fullname' => 'min_length[5]|max_length[30]',
                'username' => 'min_length[5]|max_length[16]',
                'password' => 'min_length[5]|max_length[16]',
                'konfirmasiPassword' => 'matches[password]'
            ];

            $data = [
                'username' => $this->request->getPost('username'),
                'fullname' => $this->request->getPost('fullname'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
            ];
        } else {
            $rules = [
                'fullname' => 'min_length[5]|max_length[30]',
                'username' => 'min_length[5]|max_length[16]',
            ];

            $data = [
                'username' => $this->request->getPost('username'),
                'fullname' => $this->request->getPost('fullname')
            ];
        }

        if (!$this->validate($rules)) {
            return redirect()->to(base_url('U/Admin/' . $id . '/edit'))->with('type-status', 'error')
                ->with('dataMessage', $this->validator->getErrors());
        }

        $this->adminModel->update($id, $data);

        return redirect()->to(base_url('U/Admin'))->with('type-status', 'error')
            ->with('message', 'Data berhasil diubah');
    }

    public function delete($id = null)
    {
        $this->adminModel->delete($id);

        return redirect()->to(base_url('U/Admin'))->with('type-status', 'error')
            ->with('message', 'Data berhasil terhapus');
    }
}