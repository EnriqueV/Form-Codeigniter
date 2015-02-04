<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Formulario extends CI_Controller 
{
        function __construct() 
    {   
        parent::__construct();
        $this->load->model('formulario_model');
    }
    
    public function index()
    {      

        $this->load->view("formulario_view");
    }
    

    public function nuevo_comentario()
    {
          
        if(isset($_POST['grabar']))
        {
          
            $this->form_validation->set_rules('nom', 'Nombre', 'required|xss_clean');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|xss_clean');
            $this->form_validation->set_rules('asunto', 'Asunto', 'required|xss_clean');
            $this->form_validation->set_rules('mensaje', 'Mensaje', 'required|xss_clean');
       

            $this->form_validation->set_message('required', 'El  %s es requerido');
           $this->form_validation->set_message('valid_email', 'El %s no es válido');
           
            if($this->form_validation->run() == FALSE)
            {
                $this->index();
            

            }else{
                $nombre = $this->input->post("nom");
                $email = $this->input->post("email");
                $asunto = $this->input->post("asunto");
                $mensaje = $this->input->post("mensaje");
                $insert = $this->formulario_model->insert_comment($nombre,$email,$asunto,$mensaje);
             

                redirect("http://localhost/formulario_cod_ajax/mensaje/enviado");
            }
        }
    }
}
