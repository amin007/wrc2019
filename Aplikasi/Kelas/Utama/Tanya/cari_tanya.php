<?php
namespace Aplikasi\Tanya; //echo __NAMESPACE__;
class Cari_Tanya extends \Aplikasi\Kitab\Tanya
{
#=====================================================================================================
	public function __construct()
	{
		parent::__construct();
	}
#---------------------------------------------------------------------------------------------------#
	function data_contoh($pilih)
	{
		$data = array(
			'namaPendek' => 'james007',
			'namaPenuh' => 'Polan Bin Polan',
			'level' => 'pelawat'
		); # dapatkan medan terlibat
		$kira = 1; # kira jumlah data

		return ($pilih==1) ? $kira : $data; # pulangkan nilai
	}
#---------------------------------------------------------------------------------------------------#
	function alihMedan()
	{
		//ALTER TABLE Employees MODIFY COLUMN empName VARCHAR(50) AFTER department;
	}
#---------------------------------------------------------------------------------------------------#
	public function cariPOST($myTable, $medan, $susun)
	{
		$sql = 'SELECT ' . $medan . "\r" . ' FROM ' . $myTable . "\r"
			 . $this->dimanaPOST($myTable) . $susun;

		//echo '<pre>$sql->'; print_r($sql); echo '</pre>';
		return $this->db->selectAll($sql);
	}
#---------------------------------------------------------------------------------------------------#
	private function dimanaPOST($myTable)
	{
		//echo '<pre>$_POST->'; print_r($_POST) . '</pre>';
		// //' WHERE ' . $medan . ' like %:cariID% ', array(':cariID' => $cariID));
		$where = null;
		if($_POST==null || empty($_POST) ):
			$where .= null;
		else:
			foreach ($_POST['pilih'] as $key=>$cari)
			{
				$apa = $_POST['cari'][$key];
				$f = isset($_POST['fix'][$key]) ? $_POST['fix'][$key] : null;
				$atau = isset($_POST['atau'][$key]) ? $_POST['atau'][$key] : 'WHERE';

				//$sql.="\r$key => $f  | ";

				if ($apa==null)
					$where .= " $atau `$cari` is null\r";
				elseif ($myTable=='msic2008')
				{
					if ($cari=='msic') $where .= ($f=='x') ?
					" $atau (`$cari`='$apa' OR msic2000='$apa')\r" :
					" $atau (`$cari` like '%$apa%' OR msic2000 like '%$apa%')\r";
					else $where .= ($f=='x') ?
					" $atau (`$cari`='$apa' OR notakaki='$apa')\r" :
					" $atau (`$cari` like '%$apa%' OR notakaki like '%$apa%')\r";
				}
				else
					$where .= ($f=='x') ? " $atau `$cari`='$apa'\r" :
					" $atau `$cari` like '%$apa%'\r";
			}
		endif;

		return $where;
	} // private function dimanaPOST()
#---------------------------------------------------------------------------------------------------#
#---------------------------------------------------------------------------------------------------#
	function medanIndustri($myTable)
	{
		if ($myTable=='msic2008'):
			$medan = 'seksyen S,bahagian B,kumpulan Kpl,kelas Kls,'
			. 'msic2000,msic,keterangan,notakaki';
		elseif ($myTable=='msic_v1'):
			$medan = 'survey kp,msic,keterangan,notakaki';
		else : $medan = '*';
		endif;

		return $medan;
	}
#---------------------------------------------------------------------------------------------------#
#---------------------------------------------------------------------------------------------------#
	function bentukPembolehubah($post, $key, $m0)
	{
		//echo '<hr>Nama class :' . __METHOD__ . '()<hr>';
		$fx = isset($post['fix'][$key]) ? $post['fix'][$key] : null;
		$f = ($fx=='x') ? 'or(x=)' : 'or(%like%)';
		$at = isset($post['atau'][$key]) ? $post['atau'][$key] : 'WHERE';
		$m1 = $m0 . '|msic2000'; $m2 = $m0 . '|notakaki';
		$apa = isset($post['cari'][$key]) ? $post['cari'][$key] : null;

		return array($f, $at, $m1, $m2, $apa);
	}
#---------------------------------------------------------------------------------------------------#
	function bentukPembolehubah2($post, $key, $m0)
	{
		//echo '<hr>Nama class :' . __METHOD__ . '()<hr>';
		$fx = isset($post['fix'][$key]) ? $post['fix'][$key] : null;
		$f = ($fx=='x') ? 'x=' : '%like%';
		$at = isset($post['atau'][$key]) ? $post['atau'][$key] : 'WHERE';
		$m1 = $m2 = null;
		$apa = isset($post['cari'][$key]) ? $post['cari'][$key] : null;

		return array($f, $at, $m1, $m2, $apa);
	}
#---------------------------------------------------------------------------------------------------#
	function bentukCarian($post, $myTable)
	{
		//echo '<hr>Nama class :' . __METHOD__ . '()<hr>';
		//echo '<pre>$post->'; print_r($post); echo '</pre>';
		//echo '<pre>$_POST->'; print_r($_POST); echo '</pre>';
		$carian = null; //' WHERE ' . $medan . ' like %:cariID% ', array(':cariID' => $cariID));
		if($_POST==null || empty($_POST) ):
			$carian .= null;
		else:
			foreach ($post['pilih'] as $key=>$cari)
			{	//echo "\r$key => $cari ($myTable)| ";
				$carian[] = $this->bentukCarian1($myTable, $post, $key, $cari);
				//$carian[] = $this->bentukCarian2($myTable, $post, $key, $cari);
				$cariID = $cari;
			}
		endif; //echo '<pre>$carian->'; print_r($carian); echo '</pre>';

		return array($carian,$cariID);//*/
	}
#---------------------------------------------------------------------------------------------------#
	function bentukCarian1($myTable, $post, $key, $m0)
	{
		if($myTable=='msic2008')
		{
			list($f1, $at, $m1, $m2, $apa) = $this->bentukPembolehubah($post, $key, $m0);
			//echo '<hr>$at='.$at.', $m1='.$m1.', $m2='.$m2.',<hr>';
			if ($m0=='msic')
				$carian = array('fix'=>$f1,'atau'=>$at,'medan'=>$m1,'apa'=>$apa);
			else
				$carian = array('fix'=>$f1,'atau'=>$at,'medan'=>$m2,'apa'=>$apa);
		}
		else
		{
			list($f1, $at, $m1, $m2, $apa) = $this->bentukPembolehubah2($post, $key, $m0);
			//echo '<hr>$myTable='.$myTable.'|$f1='.$f1.'|$m0='.$m0.'|$apa='.$apa.'<hr>';
			$carian = array('fix'=>$f1,'atau'=>$at,'medan'=>$m0,'apa'=>$apa);
		}//*/
		return $carian;
	}
#---------------------------------------------------------------------------------------------------#
	function bentukCarian2($myTable, $post, $key, $m0)
	{
		list($f1, $at, $m1, $m2, $apa) = $this->bentukPembolehubah($post, $key, $m0);
		//echo '<hr>$f1='.$f1.', $at='.$at.', $m1='.$m1.', $m2='.$m2.', $apa='.$apa.'<hr>';
		$carian = ($myTable=='msic2008') ?
		( ($m0=='msic') ?
			array('fix'=>$f1,'atau'=>$at,'medan'=>$m1,'apa'=>$apa)
			: array('fix'=>$f1,'atau'=>$at,'medan'=>$m2,'apa'=>$apa) )
			: array('fix'=>$f1,'atau'=>$at,'medan'=>$m0,'apa'=>$apa);
		return $carian;
	}
#---------------------------------------------------------------------------------------------------#
	function bentukCarian0($myTable, $post, $key, $m0)
	{
		echo '<br>$myTable : ' . $myTable;
		list($f1, $at, $m1, $m2, $apa) = $this->bentukPembolehubah($post, $key, $m0);
		echo '<br>$f1 : ' . $f1; echo '<br>$at : ' . $at;
		echo '<br>$m0 : ' . $m0 . '<br>$m1 : ' . $m1 . '<br>$m2 : ' . $m2;
		echo '<br>$apa : ' . $apa;
		echo '<br>';
	}
#---------------------------------------------------------------------------------------------------#
	function jadualDataCorp($cariApa)
	{
		/*$jadual = array('`aes`','`kawalan_aes`','`aes_alam_sekitar`',
		'`aes_kp_205`','`aes_kp_206`','`aes_kp_207`','`aes_kp_800`',
		'`aes_perkhidmatan`','`aes_pertanian`');//*/
		$jadual = array('aes','kawalan_aes','aes_prosesan','aes_prosesan_x',
		'aes_alam_sekitar','aes_kp_205','aes_kp_206','aes_kp_207','aes_kp_800',
		'aes_perkhidmatan','aes_pertanian',
		'kp_bst_q1_2017','kp_bst_q1_2018','kp_bst_q4_2017','kp_ejob_2018',
		'kp_mdt_2017','kp_mdt_2018','kp_mm17','kp_mm18','kp_mm_2017','kp_pan17',
		'kp_qss_2017','kp_qss_2018','kp_qss_2018_data',
		'sample_kp411','sdsk_kp411','data_banci');
		$medan = '*';
		# cari id berasaskan newss/ssm/sidap/nama
		//$id['nama'] = bersih(isset($_POST['cari']) ? $_POST['cari'] : null);
		$apa = bersih(isset($cariApa[1]) ? $cariApa[1] : null);
		//$apa = $cariApa[1];

		return array($jadual,$medan,$apa);
	}
#---------------------------------------------------------------------------------------------------#
	function dataCorp($cariApa)
	{
		//echo '<hr>Nama class :' . __METHOD__ . '()<hr>';
		//echo '<pre>$cariApa->'; print_r($cariApa); echo '</pre>';
		$carian = null;
		if($_POST==null || empty($_POST) ):
			$carian .= null;
		else:
			list($jadual, $medan, $apa) = $this->jadualDataCorp($cariApa);
			$carian[] = array( 'fix'=>'z%like%','atau'=>'WHERE',
				'medan' => 'concat_ws("",newss,nossm,nama)',
				'apa' => $apa );
			$cariID = $apa;
		endif;

		//echo '<pre>$jadual->'; print_r($jadual); echo '</pre>';
		//echo '<pre>$medan->'; print_r($medan); echo '</pre>';
		//echo '<pre>$carian->'; print_r($carian); echo '</pre>';
		//echo '<pre>$cariID->'; print_r($cariID); echo '</pre>';

		return array($jadual, $medan, $carian, $cariID);
	}
#---------------------------------------------------------------------------------------------------#
#---------------------------------------------------------------------------------------------------#
#---------------------------------------------------------------------------------------------------#
#---------------------------------------------------------------------------------------------------#
#=====================================================================================================
}