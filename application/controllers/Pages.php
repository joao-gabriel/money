<?php

class Pages extends CI_Controller {

  function __construct() {
    parent::__construct();


    /* Standard Libraries */
    $this->load->database();
    $this->load->helper('url');

    /* ------------------ */

    $this->load->library('grocery_CRUD');
  }
  
  public function view($page = 'home') {
    if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
      // Whoops, we don't have a page for that!
      show_404();
    }

    $data['title'] = ucfirst($page); // Capitalize the first letter

    $this->load->view('templates/header', $data);
    $this->load->view('pages/' . $page, $data);
    $this->load->view('templates/footer', $data);
  }

  function entries() {
    
    $crud = new Grocery_CRUD();
    
    $crud->set_relation_n_n('Category', 'categories_entries', 'categories', 'entry_id', 'category_id', 'name');
    // todo: relation with tags
    // todo: set colorpicker for color field (?)
    // todo: set created_at and modified_at fields automatically
    
    $output = $crud->render();
    $this->load->view('example.php', $output);
  }
  
  function categories() {
    $crud = new Grocery_CRUD();
    $crud->set_relation('parent_id','categories','name');
    $output = $crud->render();
    $this->load->view('example.php', $output);
  }

  function tags() {
    $output = $this->grocery_crud->render();
    $this->load->view('example.php', $output);
  }  

function make_base(){

    $this->load->library('VpxMigration');

    // All Tables:

    $this->vpxmigration->generate();


}  
  
}
