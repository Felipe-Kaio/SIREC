<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ClientModel;
use App\Models\ComplaintModel;
use CodeIgniter\HTTP\ResponseInterface;

class Main extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function complaint_frm()
    {
        // Check for validation errors
        $data['validation_errors'] = session()->getFlashdata('errors');

        return view('complaint_frm', $data);
    }

    public function submit()
    {

        // form validation
        $validation = $this->validate([
            'email' => [
                'label' => 'Email',
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'O campo {field} é obrigatório.',
                    'valid_email' => 'O campo {field} deve conter um email válido.'
                ]
            ],
            'area' => [
                'label' => 'Área',
                'rules' => 'required',
                'errors' => [
                    'required' => 'O campo {field} é obrigatório.',
                ]
            ],
            'complaint' => [
                'label' => 'Reclamação',
                'rules' => 'required|max_length[3000]',
                'errors' => [
                    'required' => 'O campo {field} é obrigatório.',
                    'max_length' => 'O campo {field} deve conter no máximo {param} caracteres.'
                ]
            ],
            'file1' => [
                'label' => 'Ficheiro 1',
                'rules' => 'permit_empty|max_size[file1,512]|ext_in[file1,png,jpg,gif,webp]',
                'errors' => [
                    'max_size' => 'O campo {field} deve conter no máximo {param}KB.',
                    'ext_in' => 'O campo {field} deve ter o formato válido, dos tipos: {param}'
                ]
            ],
            'file2' => [
                'label' => 'Ficheiro 2',
                'rules' => 'permit_empty|max_size[file2,512]|ext_in[file2,png,jpg,gif,webp]',
                'errors' => [
                    'max_size' => 'O campo {field} deve conter no máximo {param}KB.',
                    'ext_in' => 'O campo {field} deve ter o formato válido, dos tipos: {param}'
                ]
            ],
            'file3' => [
                'label' => 'Ficheiro 3',
                'rules' => 'permit_empty|max_size[file3,512]|ext_in[file3,png,jpg,gif,webp]',
                'errors' => [
                    'max_size' => 'O campo {field} deve conter no máximo {param}KB.',
                    'ext_in' => 'O campo {field} deve ter o formato válido, dos tipos: {param}'
                ]
            ],
        ]);

        if (!$validation) {
            return redirect()->to(base_url('Main/index'))->withInput()->with('errors', $this->validator->getErrors());
        }

        // atachmentts files
        $file1 = $this->request->getFile('file1');
        $file2 = $this->request->getFile('file2');
        $file3 = $this->request->getFile('file3');

        $fileNames = [];

        // File 1
        if ($file1->isValid() && !$file1->hasMoved()) {
            $newName = $file1->getRandomName();
            $fileNames[] = [
                'original' => $file1->getClientName(),
                'new' => $newName
            ];
            $file1->move(WRITEPATH . 'uploads', $newName);
        }

        // File 2
        if ($file2->isValid() && !$file2->hasMoved()) {
            $newName = $file2->getRandomName();
            $fileNames[] = [
                'original' => $file2->getClientName(),
                'new' => $newName
            ];
            $file2->move(WRITEPATH . 'uploads', $newName);
        }

        // File 3
        if ($file3->isValid() && !$file3->hasMoved()) {
            $newName = $file3->getRandomName();
            $fileNames[] = [
                'original' => $file3->getClientName(),
                'new' => $newName
            ];
            $file3->move(WRITEPATH . 'uploads', $newName);
        }

        // get total info to store in database
        $data = [
            'email'     => $this->request->getPost('email'),
            'name'      => $this->request->getPost('name'),
            'area'      => $this->request->getPost('area'),
            'complaint' => $this->request->getPost('complaint'),
            'files'     => json_encode($fileNames)
        ];

        // Store in database
        $client_model = new ClientModel();
        $complaint_model = new ComplaintModel();

        // Check if the client already exists
        $client = $client_model->where('email', $data['email'])->first();

        if (!$client) {
            $client_model->insert([
                'email' => $data['email'],
                'name' => $data['name'],
                'created_at' => date('Y-m-d H:i:s')
            ]);
            $client_id = $client_model->getInsertID();
        } else {
            $client_id = $client->id;
        }

        // store complait in databases
        $complaint_model->insert([
            'client_id' => $client_id,
            'area' => $data['area'],
            'message' => $data['complaint'],
            'attachments' => $data['files'],
            'status' => 'analisando',
        ]);

        // get the last inserted id
        $complaint_id = $complaint_model->getInsertID();

        // generate purl
        $purl = $this->_generatePurl($complaint_id);

        // send email
        try {

            $email = \Config\Services::email();
            $email->setFrom('felipekaiobarr@gmail.com', 'Felipe');
            $email->setTo($data['email']);
            $email->setSubject('Reclamação submetida com sucesso');
            $body = view('emails/email1', ['purl' => $purl]);
            $email->setMessage($body);
            $email->send();
        } catch (\Exception $e) {
            // show error view
            $this->_show_error();
        }

        //keep only name and email in $data
        $tmp = [
            'name' => $data['name'],
            'email' => $data['email']
        ];

        return view('complaint_sucess', $tmp);
    }

    private function _generatePurl($complaint_id)
    {

        // create purl with codeigniter encryption
        $encriptar = \Config\Services::encrypter();
        return site_url('/check_complaint/') . bin2hex($encriptar->encrypt($complaint_id));
    }

    public function check_complaint($purl)
    {
        echo 'Bem-Vindo:<br>';
        echo $purl;

        $desencriptar = \Config\Services::encrypter();
        $complaint_id = $desencriptar->decrypt(hex2bin($purl));
        echo '<br>';
        echo $complaint_id;
    }

    public function _show_error()
    {
        echo view("error");
        exit();
    }
}
