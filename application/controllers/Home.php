<?php
class Home extends CI_Controller {

        public function index()
        {

            $databmkg = simplexml_load_file('http://data.bmkg.go.id/cuaca_jabodetabek_1.xml');

            // var_dump($data);

            // foreach($data->Isi->Row as $value) {
            //     echo $value->Daerah.'<br/>';

            // }

            $data['bmkg'] = $databmkg->Isi;

            $this->load->view('home', $data);
        }

        public function cuaca_dunia(){

            $databmkg = simplexml_load_file('http://data.bmkg.go.id/cuaca_dunia_1.xml');
            // }

            $data['bmkg'] = $databmkg->Isi;

            $this->load->view('cuaca-dunia', $data);
        }
}