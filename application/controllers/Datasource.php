<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datasource extends MY_Controller {

    function __construct()
    {
        parent::__construct();
        // $this->load->model('barangmodel');
    }

    // get data motor kv list
    function motorkv()
    { 
        $aColumns = array('id','name','created_at','updated_at');
        $sIndexColumn = 'id';
        $sTable = "motor_kvs";
        $add_where = "deleted_at IS NULL";
        $data = $this->getdata($aColumns,$sIndexColumn,$sTable,$add_where);
        $output = $data['output'];
        $datares = $data['datares'];// print_r($datares);DIE();
        if(!empty($datares))
        {
            foreach($datares->result_array() as $aRow)
            {
                    $row = array();
                    foreach($aColumns as $c)
                    {
                        if($c == "updated_at") 
                        {
                            $row[] = $aRow[$c];
                            $edit = '<a href="'.base_url().'admin/motorkv/edit/'.$aRow['id'].'" class="btn btn-primary">Edit</a>';
                            $row[] = $edit.' <input type="button" class="btn btn-primary btnDelete" data="'.$aRow['id'].'" value="Delete">';
                        }
                        else
                        {
                            $row[] = $aRow[$c];
                        } 
                    }
                    $output['aaData'][] = $row;
                // }
            }
        }
        echo json_encode($output);
    }

    // get data motor size list
    function motorsize()
    { 
        $aColumns = array('id','name','created_at','updated_at');
        $sIndexColumn = 'id';
        $sTable = "motor_sizes";
        $add_where = "deleted_at IS NULL";
        $data = $this->getdata($aColumns,$sIndexColumn,$sTable,$add_where);
        $output = $data['output'];
        $datares = $data['datares'];// print_r($datares);DIE();
        if(!empty($datares))
        {
            foreach($datares->result_array() as $aRow)
            {
                    $row = array();
                    foreach($aColumns as $c)
                    {
                        if($c == "updated_at") 
                        {
                            $row[] = $aRow[$c];
                            $edit = '<a href="'.base_url().'admin/motorsize/edit/'.$aRow['id'].'" class="btn btn-primary">Edit</a>';
                            $row[] = $edit.' <input type="button" class="btn btn-primary btnDelete" data="'.$aRow['id'].'" value="Delete">';
                        }
                        else
                        {
                            $row[] = $aRow[$c];
                        } 
                    }
                    $output['aaData'][] = $row;
                // }
            }
        }
        echo json_encode($output);
    }

    // get data battery size list
    function batterysize()
    { 
        $aColumns = array('id','name','created_at','updated_at');
        $sIndexColumn = 'id';
        $sTable = "battery_sizes";
        $add_where = "deleted_at IS NULL";
        $data = $this->getdata($aColumns,$sIndexColumn,$sTable,$add_where);
        $output = $data['output'];
        $datares = $data['datares'];// print_r($datares);DIE();
        if(!empty($datares))
        {
            foreach($datares->result_array() as $aRow)
            {
                    $row = array();
                    foreach($aColumns as $c)
                    {
                        if($c == "updated_at") 
                        {
                            $row[] = $aRow[$c];
                            $edit = '<a href="'.base_url().'admin/batterysize/edit/'.$aRow['id'].'" class="btn btn-primary">Edit</a>';
                            $row[] = $edit.' <input type="button" class="btn btn-primary btnDelete" data="'.$aRow['id'].'" value="Delete">';
                        }
                        else
                        {
                            $row[] = $aRow[$c];
                        } 
                    }
                    $output['aaData'][] = $row;
                // }
            }
        }
        echo json_encode($output);
    }

    // get data fpv camera size list
    function camsize()
    { 
        $aColumns = array('id','name','created_at','updated_at');
        $sIndexColumn = 'id';
        $sTable = "cam_sizes";
        $add_where = "deleted_at IS NULL";
        $data = $this->getdata($aColumns,$sIndexColumn,$sTable,$add_where);
        $output = $data['output'];
        $datares = $data['datares'];// print_r($datares);DIE();
        if(!empty($datares))
        {
            foreach($datares->result_array() as $aRow)
            {
                    $row = array();
                    foreach($aColumns as $c)
                    {
                        if($c == "updated_at") 
                        {
                            $row[] = $aRow[$c];
                            $edit = '<a href="'.base_url().'admin/camsize/edit/'.$aRow['id'].'" class="btn btn-primary">Edit</a>';
                            $row[] = $edit.' <input type="button" class="btn btn-primary btnDelete" data="'.$aRow['id'].'" value="Delete">';
                        }
                        else
                        {
                            $row[] = $aRow[$c];
                        } 
                    }
                    $output['aaData'][] = $row;
                // }
            }
        }
        echo json_encode($output);
    }

    // get data esc software list
    function escsoftware()
    { 
        $aColumns = array('id','name','created_at','updated_at');
        $sIndexColumn = 'id';
        $sTable = "esc_softwares";
        $add_where = "deleted_at IS NULL";
        $data = $this->getdata($aColumns,$sIndexColumn,$sTable,$add_where);
        $output = $data['output'];
        $datares = $data['datares'];// print_r($datares);DIE();
        if(!empty($datares))
        {
            foreach($datares->result_array() as $aRow)
            {
                    $row = array();
                    foreach($aColumns as $c)
                    {
                        if($c == "updated_at") 
                        {
                            $row[] = $aRow[$c];
                            $edit = '<a href="'.base_url().'admin/escsoftware/edit/'.$aRow['id'].'" class="btn btn-primary">Edit</a>';
                            $row[] = $edit.' <input type="button" class="btn btn-primary btnDelete" data="'.$aRow['id'].'" value="Delete">';
                        }
                        else
                        {
                            $row[] = $aRow[$c];
                        } 
                    }
                    $output['aaData'][] = $row;
                // }
            }
        }
        echo json_encode($output);
    }

    // get data fc software list
    function fcsoftware()
    { 
        $aColumns = array('id','name','created_at','updated_at');
        $sIndexColumn = 'id';
        $sTable = "fc_softwares";
        $add_where = "deleted_at IS NULL";
        $data = $this->getdata($aColumns,$sIndexColumn,$sTable,$add_where);
        $output = $data['output'];
        $datares = $data['datares'];// print_r($datares);DIE();
        if(!empty($datares))
        {
            foreach($datares->result_array() as $aRow)
            {
                    $row = array();
                    foreach($aColumns as $c)
                    {
                        if($c == "updated_at") 
                        {
                            $row[] = $aRow[$c];
                            $edit = '<a href="'.base_url().'admin/fcsoftware/edit/'.$aRow['id'].'" class="btn btn-primary">Edit</a>';
                            $row[] = $edit.' <input type="button" class="btn btn-primary btnDelete" data="'.$aRow['id'].'" value="Delete">';
                        }
                        else
                        {
                            $row[] = $aRow[$c];
                        } 
                    }
                    $output['aaData'][] = $row;
                // }
            }
        }
        echo json_encode($output);
    }

    // get data Prop size list
    function propsize()
    { 
        $aColumns = array('id','name','created_at','updated_at');
        $sIndexColumn = 'id';
        $sTable = "prop_sizes";
        $add_where = "deleted_at IS NULL";
        $data = $this->getdata($aColumns,$sIndexColumn,$sTable,$add_where);
        $output = $data['output'];
        $datares = $data['datares'];// print_r($datares);DIE();
        if(!empty($datares))
        {
            foreach($datares->result_array() as $aRow)
            {
                    $row = array();
                    foreach($aColumns as $c)
                    {
                        if($c == "updated_at") 
                        {
                            $row[] = $aRow[$c];
                            $edit = '<a href="'.base_url().'admin/propsize/edit/'.$aRow['id'].'" class="btn btn-primary">Edit</a>';
                            $row[] = $edit.' <input type="button" class="btn btn-primary btnDelete" data="'.$aRow['id'].'" value="Delete">';
                        }
                        else
                        {
                            $row[] = $aRow[$c];
                        } 
                    }
                    $output['aaData'][] = $row;
                // }
            }
        }
        echo json_encode($output);
    }

    // get data Prop pitch list
    function proppitch()
    { 
        $aColumns = array('id','name','created_at','updated_at');
        $sIndexColumn = 'id';
        $sTable = "prop_pitchs";
        $add_where = "deleted_at IS NULL";
        $data = $this->getdata($aColumns,$sIndexColumn,$sTable,$add_where);
        $output = $data['output'];
        $datares = $data['datares'];// print_r($datares);DIE();
        if(!empty($datares))
        {
            foreach($datares->result_array() as $aRow)
            {
                    $row = array();
                    foreach($aColumns as $c)
                    {
                        if($c == "updated_at") 
                        {
                            $row[] = $aRow[$c];
                            $edit = '<a href="'.base_url().'admin/proppitch/edit/'.$aRow['id'].'" class="btn btn-primary">Edit</a>';
                            $row[] = $edit.' <input type="button" class="btn btn-primary btnDelete" data="'.$aRow['id'].'" value="Delete">';
                        }
                        else
                        {
                            $row[] = $aRow[$c];
                        } 
                    }
                    $output['aaData'][] = $row;
                // }
            }
        }
        echo json_encode($output);
    }

    // get data FC mount option list
    function fcmountoption()
    { 
        $aColumns = array('id','name','created_at','updated_at');
        $sIndexColumn = 'id';
        $sTable = "fc_mount_options";
        $add_where = "deleted_at IS NULL";
        $data = $this->getdata($aColumns,$sIndexColumn,$sTable,$add_where);
        $output = $data['output'];
        $datares = $data['datares'];// print_r($datares);DIE();
        if(!empty($datares))
        {
            foreach($datares->result_array() as $aRow)
            {
                    $row = array();
                    foreach($aColumns as $c)
                    {
                        if($c == "updated_at") 
                        {
                            $row[] = $aRow[$c];
                            $edit = '<a href="'.base_url().'admin/fcmountoption/edit/'.$aRow['id'].'" class="btn btn-primary">Edit</a>';
                            $row[] = $edit.' <input type="button" class="btn btn-primary btnDelete" data="'.$aRow['id'].'" value="Delete">';
                        }
                        else
                        {
                            $row[] = $aRow[$c];
                        } 
                    }
                    $output['aaData'][] = $row;
                // }
            }
        }
        echo json_encode($output);
    }

    function tipe()
    { //print_r('expression');die();
        // $status_penggunaan = $this->barangmodel->staticVar('status_penggunaan');

        $aColumns = array('id','tipe_nama');
        $sIndexColumn = 'id';
        $sTable = "tb_tipe";
        $add_where = "status <> 9";
        $data = $this->getdata($aColumns,$sIndexColumn,$sTable,$add_where);
        $output = $data['output'];
        $datares = $data['datares'];// print_r($datares);DIE();
        if(!empty($datares))
        {
            foreach($datares->result_array() as $aRow)
            {
                // if($aRow['delete_status'] == 0)
                // {
                    $row = array();
                    foreach($aColumns as $c)
                    {
                       if($c == "tipe_nama") 
                        {
                            $row[] = $aRow[$c];
                            $edit = '<a href="'.base_url().'tipe/edit/'.$aRow['id'].'" class="btn btn-primary">Edit</a>';
                            $row[] = $edit.' <input type="button" class="btn btn-primary btnDelete" data="'.$aRow['id'].'" value="Delete">';
                        }
                        else
                        {
                            $row[] = $aRow[$c];
                        } 
                    }
                    $output['aaData'][] = $row;
                // }
            }
        }
        echo json_encode($output);
    }
}