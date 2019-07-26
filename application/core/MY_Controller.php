<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('menumodel','menu');
        // $this->load->model('usersmodel','user');
        $controller = $this->uri->segment(1);
        $exclude = array('login','logout','example','_cron','datasource');
        $this->Level = array('1'=>'Users','2'=>'Supervisor','3'=>'Manager','9'=>'Web Admin'
        );
        $this->Divisi = array('CRM'=>'CRM','SC'=>'SC','Boutique'=>'Boutique','HQ'=>'HQ'
        );

        
    }

    function checkLogin($return)
    {
    	if($this->session->userdata('id') == "")
    	{
	       	if($return){
	        	redirect('admin/login/?return='.urlencode($return));  
	        }else{
	        	redirect('admin/login/?return='.urlencode('dashboard/index'));
	        }
      	}
    }

    public function terbilangBilanganIndonesia($bilangan) {
        //$bilangan    = String($bilangan);
      // if ($bilangan < 0) return 'minus ' + terbilang(-$bilangan);
      // else 
      //  print_r($bilangan);die();
        $bilangan = round($bilangan);
        $bilangan = abs($bilangan);
      if ($bilangan < 10) { 
        switch ($bilangan) {
          case 0: return 'Nol'; break;
          case 1: return 'Satu'; break;
          case 2: return 'Dua'; break;
          case 3: return 'Tiga'; break;
          case 4: return 'Empat'; break;
          case 5: return 'Lima'; break;
          case 6: return 'Enam'; break;
          case 7: return 'Tujuh'; break;
          case 8: return 'Delapan'; break;
          case 9: return 'Sembilan'; break;
        }
      }
      else if ($bilangan < 100) { 
        $kepala = floor($bilangan/10);
        $sisa = $bilangan % 10;
        $hasil = '';
        if ($kepala == 1) {
          if ($sisa == 0){ return ' Sepuluh ';}
          else if ($sisa == 1) return ' Sebelas ';
          else return $this->terbilangBilanganIndonesia($sisa) . ' Belas ';
        }
        else $hasil = $this->terbilangBilanganIndonesia($kepala) . ' Puluh ';//alert($hasil);
        //print_r($hasil);
      }
      else if ($bilangan < 1000) {
        $kepala = floor($bilangan/100);
        $sisa = $bilangan % 100;
        if ($kepala == 1) {
          if ($sisa == 0){ return 'Seratus';}
          else return ' Seratus '. $this->terbilangBilanganIndonesia($sisa) ;
        }
        else $hasil = $this->terbilangBilanganIndonesia($kepala) . ' Ratus ';
      }
      else if ($bilangan < 1000000) {
        $kepala = floor($bilangan/1000);
        $sisa = $bilangan % 1000;//print_r($kepala);
        if ($kepala == 1) {
          if ($sisa == 0){ return 'Seribu';}
          else return ' Seribu '. $this->terbilangBilanganIndonesia($sisa) ;
        }
        else $hasil = $this->terbilangBilanganIndonesia($kepala) . ' Ribu ';
      }
      else if ($bilangan < 1000000000) {
        $kepala = floor($bilangan/1000000);
        $sisa = $bilangan % 1000000;
        
        $hasil = $this->terbilangBilanganIndonesia($kepala) . ' Juta ';
      }
      else if ($bilangan < 1000000000000) {
        $kepala = floor($bilangan/1000000000);
        //print_r($kepala);die();
        $sisa = $bilangan-($kepala*1000000000);
        //print_r($sisa);die();
        $hasil = $this->terbilangBilanganIndonesia($kepala) . ' Miliar ';
      }
      else return false;

      if ($sisa > 0) $hasil .= ' '.$this->terbilangBilanganIndonesia($sisa);
      //print_r($hasil);die();
      return  strtoupper($hasil);
    }

    public function terbilangBilangan($bilangan) {
        //$bilangan    = String($bilangan);
      // if ($bilangan < 0) return 'minus ' + terbilang(-$bilangan);
      // else 
        // $bilangan = $bilangan;
      // if ($bilangan < 1) {  //print_r($bilangan);die();
      //   $bilan = $bilangan*100;
      //   return 'AND '.$bilan.'/100';
      // } 
      // else 
       // print_r($bilangan);die();
       if ($bilangan < 10) { 
        switch ($bilangan) {
           // $kepala = floor($bilangan/100);
        
          case 0: return 'zero'; break;
          case 1: return 'one'; break;
          case 2: return 'two'; break;
          case 3: return 'three'; break;
          case 4: return 'four'; break;
          case 5: return 'five'; break;
          case 6: return 'six'; break;
          case 7: return 'seven'; break;
          case 8: return 'eight'; break;
          case 9: return 'nine'; break;
         
        }
        $sisa = $bilangan % 10;
        $bilan = $bilangan*100;
        if($sisa != 0)
            return 'AND '.$bilan.'/100';
      }
      else if ($bilangan < 100) { 
        $kepala = floor($bilangan/10);
        $sisa = $bilangan % 10;
        $hasil = '';
        if ($kepala == 1) {
          if ($sisa == 0){ return 'ten';}
          else if ($sisa == 1) return 'eleven';
          else if ($sisa == 2) return 'twelve';
          else if ($sisa == 3) return 'thirteen';
          else if ($sisa == 5) return 'fifteen';
          else if ($sisa == 8) return 'eighteen';
          else return $this->terbilangBilangan($sisa) . 'teen';
        }
        else if ($kepala == 2) $hasil = 'twenty';
        else if ($kepala == 3) $hasil = 'thirty';
        else if ($kepala == 5) $hasil = 'fifty';
        else if ($kepala == 8) $hasil = 'eighty';
        else $hasil = $this->terbilangBilangan($kepala) . 'ty';//alert($hasil);
        //print_r($hasil);
      }
      else if ($bilangan < 1000) {
        $kepala = floor($bilangan/100);
        $sisa = $bilangan % 100;
        $hasil = $this->terbilangBilangan($kepala) . ' hundred';
      }
      else if ($bilangan < 1000000) {
        $kepala = floor($bilangan/1000);
        $sisa = $bilangan % 1000;//print_r($kepala);

        $hasil = $this->terbilangBilangan($kepala) . ' thousand';
      }
      else if ($bilangan < 1000000000) {
        $kepala = floor($bilangan/1000000);
        $sisa = $bilangan % 1000000;
        $hasil = $this->terbilangBilangan($kepala) . ' million';
      }
      else if ($bilangan < 1000000000000) {
        $kepala = floor($bilangan/1000000000);
        //print_r($kepala);die();
        $sisa = $bilangan-($kepala*1000000000);
        //print_r($sisa);die();
        $hasil = $this->terbilangBilangan($kepala) . ' billion ';
      }

      else return false;

      if ($sisa > 0) $hasil .= ' '.$this->terbilangBilangan($sisa);
      //print_r($hasil);die();
      return  strtoupper($hasil);
    }

    public function terbilangBilanganKoma($bilangan) {
        $bilanganKoma = $bilangan*100;
        return 'AND '.round($bilanganKoma,0).'/100';
    }

    function Sanitize($someString)
    {
        return $this->db->escape_str(htmlspecialchars(stripslashes(trim($someString)), ENT_QUOTES));
    }

    function PopulatePost()
    {
        $data = array();
        foreach($_POST as $key => $value)
        {
            if($key != 'btnSubmit' )
                if(!is_array($value))
                    $data[$key] = $this->Sanitize($value);
                else
                    $data[$key] = $value;
        }
        return $data;
    } 

    function GetData($aColumns = array(),$sIndexColumn = '',$sTable ='',$add_where = '',$group='')
    {
        if(empty($aColumns) || $sIndexColumn == '' || $sTable == '')
            return $this->return_empty();
        $sLimit = "";
        if ( isset( $_GET['iDisplayStart'] ) && $_GET['iDisplayLength'] != '-1' )
        {
            $sLimit = "LIMIT ".intval( $_GET['iDisplayStart'] ).", ".
                intval( $_GET['iDisplayLength'] );
        }
        
        /*
         * Ordering
         */
        $sOrder = "";
        if ( isset( $_GET['iSortCol_0'] ) )
        {
            $sOrder = "ORDER BY  ";
            for ( $i=0 ; $i<intval( $_GET['iSortingCols'] ) ; $i++ )
            {
                if ( $_GET[ 'bSortable_'.intval($_GET['iSortCol_'.$i]) ] == "true" )
                {
                    $sOrder .= $aColumns[ intval( $_GET['iSortCol_'.$i] ) ]."
                        ".($_GET['sSortDir_'.$i]==='asc' ? 'asc' : 'desc') .", ";
                }
            }
             
            $sOrder = substr_replace( $sOrder, "", -2 );
            if ( $sOrder == "ORDER BY" )
            {
                $sOrder = "";
            }
        }
        
         $sWhere = "";
        if ( isset($_GET['sSearch']) && $_GET['sSearch'] != "" )
        {
            $sWhere = "WHERE (";
            for ( $i=0 ; $i<count($aColumns) ; $i++ )
            {
                if ( isset($_GET['bSearchable_'.$i]) && $_GET['bSearchable_'.$i] == "true" )
                {
                    $sWhere .= $aColumns[$i]." LIKE '%".mysql_real_escape_string( $_GET['sSearch'] )."%' OR ";
                }
            }
            $sWhere = substr_replace( $sWhere, "", -3 );
            $sWhere .= ')';
        }
        
        /* Individual column filtering */
        for ( $i=0 ; $i<count($aColumns) ; $i++ )
        {
            if ( isset($_GET['bSearchable_'.$i]) && ($_GET['bSearchable_'.$i] == "true" && $_GET['sSearch_'.$i] != '' ))
            {
                if ( $sWhere == "" )
                {
                    $sWhere = "WHERE ";
                }
                else
                {
                    $sWhere .= " AND ";
                }
                $sWhere .= $aColumns[$i]." LIKE '%".$this->db->escape_str($_GET['sSearch_'.$i])."%' ";
            }
        }

        if($add_where != '')
        {
            if ( $sWhere == "" )
            {
                $sWhere = "WHERE ";
            }
            else
            {
                $sWhere .= " AND ";
            }
            $sWhere .= " ".$add_where." ";
        }
        
        $sLimit = $sLimit;
        /*
         * SQL queries
         * Get data to display
         */
        $sGroupBy = '';
        if($group != '')
        {
            $sGroupBy = 'GROUP BY '.$group;
        }
        
        $order = $sIndexColumn;
        if($sOrder != '')
        {
            $order = str_replace("ORDER BY", "", $sOrder).','.$sIndexColumn;
        }
        $sQuery = "
            SELECT SQL_CALC_FOUND_ROWS ".str_replace(" , ", " ", implode(", ", $aColumns))."
            FROM   $sTable
            $sWhere
            $sOrder
            $sLimit
        ";
        

        $datares = $this->db->query($sQuery);
        
        /* Data set length after filtering */
        $sQuery = "
                SELECT COUNT(".$sIndexColumn.") as count
                FROM   $sTable ".$sWhere;
        $datares2 = $this->db->query($sQuery);
        
        $iFilteredTotal = $datares2->row()->count;
        
        /* Total data set length */
        
        if($add_where != '')
        {
            $sQuery = "
                SELECT COUNT(".$sIndexColumn.") as count
                FROM   $sTable WHERE ".$add_where;
        }
        else
        {
            $sQuery = "
                SELECT COUNT(".$sIndexColumn.") as count
                FROM   $sTable ";
        }
        
        $datacount = $this->db->query($sQuery);
        $iTotal = $datacount->row()->count;
        
        
        /*
         * Output
         */
        $output = array(
            "sEcho" => isset($_GET['sEcho']) ? intval($_GET['sEcho']) : 0,
            "iTotalRecords" => $iTotal,
            "iTotalDisplayRecords" => $iFilteredTotal,
            "aaData" => array()
        );
                
        return array('output'=>$output,'datares'=>$datares);
    }      
}

/* End of file masterTemplate.php */
/* Location: ./application/controllers/masterTemplate.php */