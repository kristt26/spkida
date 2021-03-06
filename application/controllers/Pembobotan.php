<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Pembobotan extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pembobotan_model');
    } 

    /*
     * Listing of pembobotan
     */
    function index()
    {
        $data['pembobotan'] = $this->Pembobotan_model->get_all_pembobotan();
        
        $data['_view'] = 'pembobotan/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new pembobotan
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'idkaryawan' => $this->input->post('idkaryawan'),
				'idperiode' => $this->input->post('idperiode'),
            );
            
            $pembobotan_id = $this->Pembobotan_model->add_pembobotan($params);
            redirect('pembobotan/index');
        }
        else
        {            
            $data['_view'] = 'pembobotan/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a pembobotan
     */
    function edit($idpembobotan)
    {   
        // check if the pembobotan exists before trying to edit it
        $data['pembobotan'] = $this->Pembobotan_model->get_pembobotan($idpembobotan);
        
        if(isset($data['pembobotan']['idpembobotan']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'idkaryawan' => $this->input->post('idkaryawan'),
					'idperiode' => $this->input->post('idperiode'),
                );

                $this->Pembobotan_model->update_pembobotan($idpembobotan,$params);            
                redirect('pembobotan/index');
            }
            else
            {
                $data['_view'] = 'pembobotan/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The pembobotan you are trying to edit does not exist.');
    } 

    /*
     * Deleting pembobotan
     */
    function remove($idpembobotan)
    {
        $pembobotan = $this->Pembobotan_model->get_pembobotan($idpembobotan);

        // check if the pembobotan exists before trying to delete it
        if(isset($pembobotan['idpembobotan']))
        {
            $this->Pembobotan_model->delete_pembobotan($idpembobotan);
            redirect('pembobotan/index');
        }
        else
            show_error('The pembobotan you are trying to delete does not exist.');
    }
    
}
