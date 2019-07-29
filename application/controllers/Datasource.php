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
                        if($c == "name")
                        {
                            $row[] = $aRow[$c]."KV";
                        }
                        elseif($c == "updated_at") 
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
                        if($c == 'name')
                        {
                            $row[] = $aRow[$c]."S";
                        }
                        elseif($c == "updated_at") 
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
                        if($c == "name")
                        {
                            $row[] = $aRow[$c]." Inch";
                        }
                        elseif($c == "updated_at") 
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
                        if($c == "name")
                        {
                            $row[] = $aRow[$c]." Degree";
                        }
                        elseif($c == "updated_at") 
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

    // get data FC mount option list
    function frametype()
    { 
        $aColumns = array('id','name','created_at','updated_at');
        $sIndexColumn = 'id';
        $sTable = "frame_types";
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
                            $edit = '<a href="'.base_url().'admin/frametype/edit/'.$aRow['id'].'" class="btn btn-primary">Edit</a>';
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

    // get data vtx list
    function vtx()
    { 
        $aColumns = array('id','name','power_output','created_at','updated_at');
        $sIndexColumn = 'id';
        $sTable = "vtxs";
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
                            $edit = '<a href="'.base_url().'admin/vtx/edit/'.$aRow['id'].'" class="btn btn-primary">Edit</a>';
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

    // get data fpv cam list
    function fpvcam()
    { 
        $aColumns = array('a.id','a.name','cam_size_id','b.name as cam_size_name','a.created_at','a.updated_at');
        $sIndexColumn = 'a.id';
        $sTable = "fpv_cams a LEFT JOIN cam_sizes b ON a.cam_size_id = b.id";
        $add_where = "a.deleted_at IS NULL";
        $data = $this->getdata($aColumns,$sIndexColumn,$sTable,$add_where);
        $output = $data['output'];
        $datares = $data['datares']; //print_r($datares->result_array());DIE();
        if(!empty($datares))
        {
            foreach($datares->result_array() as $aRow)
            {
                $row = array();
                
                foreach ($aRow as $c => $value) {
                    if($c == "cam_size_id")
                    {
                        // do nothing
                    }
                    elseif($c == "updated_at") 
                    {
                        $row[] = $aRow[$c];
                        $edit = '<a href="'.base_url().'admin/fpvcam/edit/'.$aRow['id'].'" class="btn btn-primary">Edit</a>';
                        $row[] = $edit.' <input type="button" class="btn btn-primary btnDelete" data="'.$aRow['id'].'" value="Delete">';
                    }
                    else
                    {
                        $row[] = $aRow[$c];
                    } 
                }
                $output['aaData'][] = $row;
                
            }
        }
        echo json_encode($output);
    }

    // get data esc list
    function esc()
    { 
        $aColumns = array('a.id','a.name','a.ampere_rating','b.name as esc_software','c.name as lowest_battery_rating','d.name as highest_battery_rating','a.created_at','a.updated_at');
        $sIndexColumn = 'a.id';
        $sTable = "escs a 
                    LEFT JOIN esc_softwares b ON a.esc_software_id = b.id
                    LEFT JOIN battery_sizes c ON a.start_battery_size_id = c.id
                    LEFT JOIN battery_sizes d ON a.end_battery_size_id = d.id";
        $add_where = "a.deleted_at IS NULL";
        $data = $this->getdata($aColumns,$sIndexColumn,$sTable,$add_where);
        $output = $data['output'];
        $datares = $data['datares']; //print_r($datares->result_array());DIE();
        if(!empty($datares))
        {
            foreach($datares->result_array() as $aRow)
            {
                $row = array();
                
                foreach ($aRow as $c => $value) {
                    if($c == "lowest_battery_rating" || $c == "highest_battery_rating")
                    {
                        $row[] = $aRow[$c]."S";
                    }
                    elseif($c == "ampere_rating")
                    {
                        $row[] = $aRow[$c]."A";
                    }
                    elseif($c == "updated_at") 
                    {
                        $row[] = $aRow[$c];
                        $edit = '<a href="'.base_url().'admin/esc/edit/'.$aRow['id'].'" class="btn btn-primary">Edit</a>';
                        $row[] = $edit.' <input type="button" class="btn btn-primary btnDelete" data="'.$aRow['id'].'" value="Delete">';
                    }
                    else
                    {
                        $row[] = $aRow[$c];
                    } 
                }
                $output['aaData'][] = $row;
                
            }
        }
        echo json_encode($output);
    }

    // get data prop list
    function prop()
    { 
        $aColumns = array('a.id','a.name','b.name as prop_size','c.name as prop_pitch','a.created_at','a.updated_at');
        $sIndexColumn = 'a.id';
        $sTable = "props a 
                    LEFT JOIN prop_sizes b ON a.prop_size_id = b.id
                    LEFT JOIN prop_pitchs c ON a.prop_pitch_id = c.id";
        $add_where = "a.deleted_at IS NULL";
        $data = $this->getdata($aColumns,$sIndexColumn,$sTable,$add_where);
        $output = $data['output'];
        $datares = $data['datares']; //print_r($datares->result_array());DIE();
        if(!empty($datares))
        {
            foreach($datares->result_array() as $aRow)
            {
                $row = array();
                
                foreach ($aRow as $c => $value) {
                    if($c == "prop_size")
                    {
                        $row[] = $aRow[$c]." Inch";
                    }
                    elseif($c == "prop_pitch")
                    {
                        $row[] = $aRow[$c]." Degree";
                    }
                    elseif($c == "updated_at") 
                    {
                        $row[] = $aRow[$c];
                        $edit = '<a href="'.base_url().'admin/prop/edit/'.$aRow['id'].'" class="btn btn-primary">Edit</a>';
                        $row[] = $edit.' <input type="button" class="btn btn-primary btnDelete" data="'.$aRow['id'].'" value="Delete">';
                    }
                    else
                    {
                        $row[] = $aRow[$c];
                    } 
                }
                $output['aaData'][] = $row;
                
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