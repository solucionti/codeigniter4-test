<?php namespace App\Controllers;

use App\Models\QuoteModel;
use App\Models\TaxonomyModel;
use CodeIgniter\HTTP\Request;

class Home extends BaseController
{
    public function index()
    {
        helper(['url', 'form']);

        $models = new TaxonomyModel();
        //   $taxonomy_model = $models->findAll();


        $data = [
            'name' => 'Version',
            'name' => 'Version',
            'name' => 'Version',
            'name' => 'Version',
            'name' => 'Version',
        ];

        return view('home/form', [
            'models' => $models->getAllTaxonomiesByIdOptions(1),
        ]);
    }

    public function insert()
    {
        $messages = [];
        $request = \Config\Services::request();

        if (!$this->request->isAJAX()) {
            $messages = [
                'type' => 'error'
            ];
            return json_encode($messages);

        }
        $values = $request->getGetPost();

        $data = [
            'name' => $values['name'],
            'phone' => $values['phone'],
            'mail' => $values['mail'],
            'version_name' => $values['models'],
            'version_id' => $values['models'],
        ];

        $new_quote = new QuoteModel();
        if (!$new_quote->validate($data)) {
            $messages = [
                'type' => 'error',
                'messages' => $new_quote->errors(),
            ];
            return json_encode($messages);
        }
        $new_quote->insert($data);
        $messages = [
            'type' => 'ok',
            'messages' => '',
            'data' => $data
        ];
        return json_encode($messages, true);

        // return view('home/insert_message');
    }

    //--------------------------------------------------------------------

}
