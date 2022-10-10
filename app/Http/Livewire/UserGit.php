<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class UserGit extends Component
{

    public $searchGit;
    public $userGit = [];
    public $userProjectGit =
    [
        'total' => 0,
        'items' => []
    ];

    public $searchProject;
    public $userLogin;

    

    public function render()
    {
        return view('livewire.user-git');
    }



    public function limparPesquisa()
    {
        $this->searchGit = '';
        $this->userGit = [];
        $this->searchProject='';
        $this->userLogin='';
    }



    public function  updatedsearchProject()
    {
        $this->userProjectGit['total'] = [];
        $this->userProjectGit['items'] = [];


        // https: //api.github.com/search/repositories?q=ATTILASAMUELL+in:name+language:java&sort=stars&order=desc
        if (($this->userLogin != '') and (!empty($this->searchProject))) {

            if (strlen($this->searchProject) > 2) {
                $url = 'https://api.github.com/search/repositories?q=' . $this->userLogin . '+in:name+language:' . $this->searchProject . '&sort=stars&order=desc';
                $response = Http::withOptions(["verify" => false])->get($url);
                $response = $response->json();


                if (isset($response['items'])) {
                    if (!empty($response['items'])) {
                        $this->userProjectGit['total'] = count($response['items']);
                        $this->userProjectGit['items'] = $response['items'];
                    }
                }
            }
        } else {

            $this->userProjectGit['total'] = [];
            $this->userProjectGit['items'] = [];
        }
    }


    public function searchGitAction()
    {
        $searchGitSemEspaco = str_replace(' ', '', $this->searchGit);


        $url = 'https://api.github.com/users/' . $searchGitSemEspaco . '/repos';
        $response = Http::withOptions(["verify" => false])->get($url);
        $response = $response->json();
        if (count($response)) {

            foreach ($response as $val) {

                if (isset($val['language'])) {
                    $this->userGit['language'] = $val['language'];
                }

                if (isset($val['description'])) {
                    $this->userGit['description'] = $val['description'];
                }
                if (isset($val['html_url'])) {
                    $this->userGit['html_url1'] = $val['html_url'];
                }

                if (isset($val['owner'])) {
                    foreach ($val['owner'] as $key => $value) {
                        $this->userGit[$key] = $value;
                    }
                }
            }

            $this->userGit['total'] = count($response);
            $this->userLogin = $this->userGit['login'];
            $this->userGit['login'] = $this->searchGit;
        }
    }
}
