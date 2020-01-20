<?php namespace App\Controllers;

use App\Models\QuoteModel;

class Home extends BaseController
{
    public function index()
    {
        helper(['url', 'form']);

        $data = [
            'name' => 'name',
            'phone' => 'phone',
            'mail' => 'mail@mail.cl',
            'version_name' => 'Version name',
            'version_id' => 'versiona_id',
        ];
        $new_quote = new QuoteModel();
        if ($new_quote->insert($data)) {
           // echo 'Hola';
        } else {
         //   print_r($new_quote->errors());
        }

        $data = [
            'name' => 'Version',
            'name' => 'Version',
            'name' => 'Version',
            'name' => 'Version',
            'name' => 'Version',
        ];
        return view('home/form');
    }

    public function insert()
    {
        return view('home/insert_message');
    }

    //--------------------------------------------------------------------

}
