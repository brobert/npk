<?php
 namespace App\Http;
use Illuminate\Contracts\Logging\Log;
Trait Renderer {

    private $view_path = '';
    private $view_data = [];


    public function set_view($view) {
        $this->view_path= $view;
    }

    public function render_view() {

        return view($this->view_path);
    }
}