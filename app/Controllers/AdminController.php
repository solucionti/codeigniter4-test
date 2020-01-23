<?php namespace App\Controllers;

use App\Models\QuoteModel;
use App\Models\TaxonomyModel;
use CodeIgniter\HTTP\Request;

class AdminController extends BaseController
{


    public function index()
    {
        helper(['url', 'form']);
        $session = \Config\Services::session();

        if ($session->get('logged_in')) {
            return redirect()->route('admin/quotes');

        }


        return view('admin/index', []);
    }

    public function quotes()
    {
        $quotes = new QuoteModel();
        $results = $quotes->findAll();

        return view('admin/quotes', [
            'results' => $results
        ]);

    }

    public function login()
    {
        helper(['url', 'form', 'session']);
        $request = \Config\Services::request();
        $values = $request->getGetPost();

        $user = $values['user'];
        $password = $values['password'];

        if ($user === 'admin' && $password === 'admin') {
            $session = \Config\Services::session();
            $session->set(
                [
                    'username' => 'admin',
                    'logged_in' => true,
                ]
            );
            return redirect()->route('admin/quotes');

        }
        return view('admin/index', []);


    }

    //--------------------------------------------------------------------

}
