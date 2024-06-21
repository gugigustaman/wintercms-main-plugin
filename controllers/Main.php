<?php namespace Kingu\Main\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Main extends Controller
{
    public $implement = [    ];
    
    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Kingu.Main', 'main');
    }

    public function index() {
        
    }
}
