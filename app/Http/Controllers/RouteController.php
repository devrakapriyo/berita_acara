<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Input;
use Auth;
use Redirect;
use setBaseUrl;
use DB;
use Excel;

use App\User;
use App\q_berita;
use App\q_berita1;
use App\q_berita_si;
use App\q_berita_si1;
use App\q_view_fi;
use App\q_viewsi;
use App\q_cr;
use App\q_cr1;
use App\q_finance;
use App\q_monitoring;
use App\q_detail_monitoring;
use App\q_proses_ba;
use App\q_si;
use App\q_to;
use App\tb_buat_ba;
use App\tb_proses_ba;
use App\tb_cr;
use App\tb_finance;
use App\tb_si;
use App\tb_to;
use App\tb_user_cr;
use App\tb_user_finance;
use App\tb_user_si;
use App\tb_user_to;
use App\tb_rpt_monitoring;
use App\rpt_monitoring;
use App\chatt_cs;
use App\chatt_to;
use App\chatt_si;
use App\chatt_fi;

class RouteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){
        return View('index');
    }
    public function login() {
        return View('login');
    }

    public function dashboard(){
        return View('dashboard');
    }

    public function detailadmin(){
        return View('detailadmin');
    }

    public function monitoring(){
        $respon = '1';
        $data = q_detail_monitoring::paginate('5');
        $page = q_detail_monitoring::paginate('5');
        $page->setPath('monitoring');
        return View('monitoring')
        ->with('data', $data)
        ->with('page', $data)
        ->with('respon', $respon);
    }

    public function carimonitoring(){
        $respon = '0';
        $cari = q_monitoring::where('nama_customer', '=', Input::get('cari'))->get();
        return View('monitoring')
            ->with('respon', $respon)
            ->with('cari', $cari);
    }

    public function prosesba(){
        $respon = '1';
        $data = q_proses_ba::all();
        return View('prosesba')
            ->with('data', $data)
            ->with('respon', $respon);
    }

    public function cariprosesmonitoring(){
        $respon = '0';
        $cari = q_proses_ba::where('nama_customer', '=', Input::get('cari'))->get();
        return View('prosesba')
            ->with('respon', $respon)
            ->with('cari', $cari);
    }

    public function detailmonitoring($id){
        $data = q_detail_monitoring::where('id_cr', '=', $id);
        return View('detailmonitoring')
            ->with('data', $data);
    }

    public function dashboardadmin(){
        return View('admin.dashboardadmin');
    }

    public function tambahadmin(){
        return View('admin.tambahadmin');
    }

    public function hapusdata(){
        $respon = '1';
        $data = tb_cr::paginate('5');
        $page = tb_cr::paginate('5');
        $page->setPath('hapusdata');
        return View('hapusdata')
            ->with('respon', $respon)
            ->with('data', $data)
            ->with('page', $page);
    }

    public function caridataba(){
        $respon = '0';
        $cari = tb_cr::where('nama_customer', '=', Input::get('cari'))->get();
        return View('hapusdata')
            ->with('respon', $respon)
            ->with('cari', $cari);
    }

    //Data admin-----------------------------------------------------------------------------------------------------------
    public function dataadmin(){
        $data = DB::table('users')->where('jab', '=', 'Admin')->get();
        $validator = DB::table('users')->where('jab', '=', 'Admin')->get();
        $isi = User::paginate('5');
        $page = User::paginate('5');
        $page->setPath('dataadmin');
        return View('admin.dataadmin.dataadmin')
            ->with('data', $data)
            ->with('validator', $validator)
            ->with('page', $page);
    }

    public function dataadmincs(){
        $data = DB::table('users')->where('jab', '=', 'Customer Relation')->get();
        $validator = DB::table('users')->where('jab', '=', 'Customer Relation')->get();
        $isi = User::paginate('5');
        $page = User::paginate('5');
        $page->setPath('dataadmincs');
        return View('admin.dataadmin.dataadmincs')
            ->with('data', $data)
            ->with('validator', $validator)
            ->with('page', $page);
    }

    public function dataadminto(){
        $data = DB::table('users')->where('jab', '=', 'Terminal Operation')->get();
        $validator = DB::table('users')->where('jab', '=', 'Terminal Operation')->get();
        $isi = User::paginate('5');
        $page = User::paginate('5');
        $page->setPath('dataadminto');
        return View('admin.dataadmin.dataadminto')
            ->with('data', $data)
            ->with('validator', $validator)
            ->with('page', $page);
    }

    public function dataadminsi(){
        $data = DB::table('users')->where('jab', '=', 'Data dan Informasi')->get();
        $validator = DB::table('users')->where('jab', '=', 'Data dan Informasi')->get();
        $isi = User::paginate('5');
        $page = User::paginate('5');
        $page->setPath('dataadminsi');
        return View('admin.dataadmin.dataadminsi')
            ->with('data', $data)
            ->with('validator', $validator)
            ->with('page', $page);
    }
    
    public function dataadminfi(){
        $data = DB::table('users')->where('jab', '=', 'Finance')->get();
        $validator = DB::table('users')->where('jab', '=', 'Finance')->get();
        $isi = User::paginate('5');
        $page = User::paginate('5');
        $page->setPath('dataadminfi');
        return View('admin.dataadmin.dataadminfi')
            ->with('data', $data)
            ->with('validator', $validator)
            ->with('page', $page);
    }

    public function datauser(){
        $data = DB::table('users')->where('jab', '=', 'User')->get();
        $validator = DB::table('users')->where('jab', '=', 'User')->get();
        $isi = User::paginate('5');
        $page = User::paginate('5');
        $page->setPath('datauser');
        return View('admin.dataadmin.datauser')
            ->with('data', $data)
            ->with('validator', $validator)
            ->with('page', $page);
    }

    //Input admin----------------------------------------------------------------------------------------------------------
    public function adminutama(){
        return View('admin.adminutama');
    }

    public function admincs(){
        return View('admin.admincs');
    }

    public function adminto(){
        return View('admin.adminto');
    }

    public function adminsi(){
        return View('admin.adminsi');
    }

    public function adminfi(){
        return View('admin.adminfi');
    }

    public function user(){
        return View('admin.user');
    }

    //Customer Service-----------------------------------------------------------------------------------------------------
    public function dashboardcs(){
        $datacs = chatt_cs::all();
        return View('cs.dashboardcs')
            ->with('datacs', $datacs);
    }

    public function monitoringcs(){
        return View('cs.monitoringcs');
    }

    public function entrycs(){
        $data = DB::table('tb_proses_ba')
                ->orderBy('created_at', 'desc')
                ->first();
        return View('cs.entrycs')
            ->with('data', $data);
    }

    public function datacs(){
        $respon = '1';
        $data = q_cr1::paginate('5');
        $page = q_cr1::paginate('5');
        $page->setPath('datacs');
        return View('cs.datacs')
            ->with('respon', $respon)
            ->with('data', $data)
            ->with('page', $page);
    }

    public function editdetailcs($id){
        $title = q_cr::where('id_cr', '=', $id)->first();
        $data = q_cr::where('id_cr', '=', $id)->get();
        return View('cs.editdetailcs')
            ->with('title', $title)
            ->with('data', $data);
    }

    public function editdetail($id){
        $data = q_cr::where('id_cs', '=', $id)->first();
        return View('cs.editdetail')
            ->with('data', $data);
    }

    //Terminal Operasi-----------------------------------------------------------------------------------------------------
    public function dashboardto(){
        $datato = chatt_to::all();
        return View('to.dashboardto')
            ->with('datato', $datato);
    }

     public function editdatato($id){
        $title = q_berita::where('id_cr', '=', $id)->first();
        $data = q_berita::where('id_cr', '=', $id)->get();
        return View('to.editdatato')
            ->with('data', $data)
            ->with('title', $title);
    }

     public function editdetaildatato($id){
        $data = q_berita::where('nota_lama', '=', $id)->first();
        return View('to.editdetaildatato')
            ->with('data', $data);
    }

    public function entryto(){
        $respon = '1';
        $data = q_cr1::paginate('5');
        $page = q_cr1::paginate('5');
        $page->setPath('entryto');
        return View('to.entryto')
            ->with('respon', $respon)
            ->with('data', $data)
            ->with('page', $page);
    }

    public function inputba($id){
        $data = q_cr::where('nota_lama', '=', $id)->first();
        return View('to.inputba')
            ->with('data', $data);
    }
    
    public function abaikanba($id){
        $data = q_cr::where('nota_lama', '=', $id)->first();
        return View('to.abaikanba')
            ->with('data', $data);
    }

    public function datato(){
        $respon = '1';
        $data = q_berita1::paginate('5');
        $page = q_berita1::paginate('5');
        $page->setPath('datato');
        return View('to.datato')
            ->with('respon', $respon)
            ->with('data', $data)
            ->with('page', $page);
    }

    public function detaildataba($id){
        $title = q_cr::where('id_cr', '=', $id)->first();
        $data = q_cr::where('id_cr', '=', $id)->get();
        return View('to.detaildataba')
            ->with('data', $data)
            ->with('title', $title);
    }

    public function detaildatato($id){
        $title = q_cr::where('nota_lama', '=', $id)->first();
        $detail = q_cr::where('nota_lama', '=', $id)->first();
        return View('to.detaildatato')
            ->with('detail', $detail)
            ->with('title', $title);
    }

    public function excelto($id){
        $exceldata = q_berita::where('id_cr', '=', $id)->first();
        $data = array(
            array(
                ''
            ),
            array(
                "REKAPITULASI KOREKSI NOTA $exceldata->jenis_nota" 
            ),
            array(
                $exceldata->nama_customer  
            ),
            array(
              ''  
            ),
            array('No. pengajuan',
                  'No permohonan',
                  'No BPRP',
                  'Jenis nota',
                  'Nota lama',
                  'No. req',
                  'Jumlah tagihan'),
            
            array($exceldata->no_pengajuan,
                  $exceldata->id_cr,
                  $exceldata->no_bprp,
                  $exceldata->jenis_nota,
                  $exceldata->nota_lama,
                  $exceldata->no_req,
                  $exceldata->tagihan),
            
            array(
                ''
            ),
            
            array(
                ''
            ),
            
            array(
                ''
            ),
            
            array(
                ''
            ),
            
            array(
                "Dibuat oleh Terminal Oprasi"
            ),
            
            array(
                "Tanggal cetak $exceldata->tgl_to"
            ),
            
            array(
                "Verifikasi", 
                $exceldata->nama_to,
                '... ... ...'
            )
            
            
            
            
        );
            
        

        Excel::create('Beritaacara', function($excel) use($data) {
            
            $excel->sheet('Sheetname', function($sheet) use($data) {
                $sheet->setBorder('A5:G5', 'thin');
                $sheet->setBorder('A6:G6', 'thin');
                $sheet->fromArray($data, null, 'A1', false, false);
                $sheet->mergeCells('A2:G2');
                $sheet->mergeCells('A3:G3');
                $sheet->cells('A2:G2', function($cells){
                    $cells->setFontWeight('bold');
                    $cells->setAlignment('center');
                    $cells->setFontFamily('Cambria');
                });
                
                $sheet->cells('A3:G3', function($cells){
                    $cells->setFontWeight('bold');
                    $cells->setAlignment('center');
                    $cells->setFontFamily('Cambria');
                });
                
                $sheet->cells('A5:G5', function($cells){
                    $cells->setBackground('#bdc3c7');
                    $cells->setFontColor('#000000');
                    $cells->setFontFamily('Cambria');
                    $cells->setFontWeight('bold');
                    $cells->setAlignment('center');
                    
                });
                
                $sheet->cells('A6:G6', function($cells){
                   $cells->setAlignment('center'); 
                });
                
                $sheet->cells('A11', function($cells){
                    $cells->setFontFamily('Cambria');
                    $cells->setFontWeight('bold');
                });
                
                $sheet->cells('A12', function($cells){
                    $cells->setFontFamily('Cambria');
                });
                
                $sheet->cells('A13', function($cells){
                    $cells->setFontFamily('Cambria');
                });
                
                $sheet->cells('B13:C13', function($cells){
                    $cells->setFontFamily('Cambria');
                    $cells->setFontWeight('bold');
                });
            });
        })->export('xlsx');
    }
    
    public function buatba($id){
        $title = q_cr::where('id_cr', '=', $id)->first();
        $data = q_cr::where('id_cr', '=', $id)->first();
        $data2 = q_cr::where('id_cr', '=', $id)->get();
        $data3 = q_cr::where('id_cr', '=', $id)->count();
        return View('to.buatbagagal')
            ->with('title', $title)
            ->with('data', $data)
            ->with('data2', $data2)
            ->with('data3', $data3);
    }

    //Sistem Informasi-------------------------------------------------------------------------------------------------------
    public function entrysi(){
        $respon = '1';
        $data = q_berita1::paginate('5');
        $page = q_berita1::paginate('5');
        $page->setPath('entrysi');
        return View('si.entrysi')
            ->with('data', $data)
            ->with('page', $page)
            ->with('respon', $respon);
    }

    public function carisi(){
        $respon = '0';
        $cari = q_berita1::where('nama_customer', '=', Input::get('cari'))->get();
        return View('si.entrysi')
            ->with('respon', $respon)
            ->with('cari', $cari);
    }

     public function editdatasi($id){
        $title = q_berita::where('id_buat_ba', '=', $id)->first();
        $data = q_berita::where('id_buat_ba', '=', $id)->get();
        return View('si.editdatasi')
            ->with('title', $title)
            ->with('data', $data);
    }

    public function editdetaildatasi($id){
        $data = q_berita_si::where('nota_lama', '=', $id)->first();
        $edit = q_berita_si1::where('nota_lama', '=', $id)->first();
        return View('si.editdetaildatasi')
            ->with('data', $data)
            ->with('edit', $edit);
    }

    public function detailinputsi($id){
        $title = q_berita::where('id_buat_ba', '=', $id)->first();
        $data = q_berita::where('id_buat_ba', '=', $id)->get();
        return View('si.detailinputsi')
            ->with('title', $title)
            ->with('data', $data);
    }

    public function detailinputansi($id){
        $data = q_berita::where('nota_lama', '=', $id)->first();
        return View('si.detailinputansi')
            ->with('data', $data);
    }

    public function inputsi($id){
        $data = q_berita::where('nota_lama', '=', $id)->first();
        return View('si.inputsi')
            ->with('data', $data);
    }
    
     public function abaikansi($id){
        $data = q_berita::where('nota_lama', '=', $id)->first();
        return View('si.abaikansi')
            ->with('data', $data);
    }

    public function datasi(){
        $respon = '1';
        $data = q_berita_si1::paginate('5');
        $page = q_berita_si1::paginate('5');
        $page->setPath('entrysi');
        return View('si.datasi')
            ->with('respon', $respon)
            ->with('data', $data)
            ->with('page', $page);
    }

    public function caridatasi(){
        $respon = '0';
        $cari = q_berita_si1::where('nama_customer', '=', Input::get('cari'))->get();
        return View('si.datasi')
            ->with('respon', $respon)
            ->with('cari', $cari);
    }

    public function dashboardsi(){
        $datasi = chatt_si::all();
        return View('si.dashboardsi')
            ->with('datasi', $datasi);
    }

    public function excelsi($id){
        $exceldata = q_berita_si::where('id_buat_ba', '=', $id)->first();
        $data = array(
            array(
                ''
            ),
            array(
                "REKAPITULASI KOREKSI NOTA $exceldata->jenis_nota" 
            ),
            array(
                $exceldata->nama_customer  
            ),
            array(
              ''  
            ),
            array('No. pengajuan',
                  'No permohonan',
                  'No BPRP',
                  'Jenis nota',
                  'Nota lama',
                  'No. req',
                  'Jumlah tagihan'),
            array($exceldata->no_pengajuan,
                  $exceldata->no_permohonan,
                  $exceldata->no_bprp,
                  $exceldata->jenis_nota,
                  $exceldata->nota_lama,
                  $exceldata->no_req,
                  $exceldata->tagihan),
            
            array(
                ''
            ),
            
            array(
                ''
            ),
            
            array(
                ''
            ),
            
            array(
                ''
            ),
            
            array(
                "Dibuat oleh Terminal Oprasi"
            ),
            
            array(
                "Tanggal cetak $exceldata->tgl_to"
            ),
            
            array(
                "Verifikasi", 
                $exceldata->nama_to,
                '... ... ...'
            )
            
            
            
            
        );
            
        

        Excel::create('Beritaacara', function($excel) use($data) {
            
            $excel->sheet('Sheetname', function($sheet) use($data) {
                $sheet->setBorder('A5:G5', 'thin');
                $sheet->setBorder('A6:G6', 'thin');
                $sheet->fromArray($data, null, 'A1', false, false);
                $sheet->mergeCells('A2:G2');
                $sheet->mergeCells('A3:G3');
                $sheet->cells('A2:G2', function($cells){
                    $cells->setFontWeight('bold');
                    $cells->setAlignment('center');
                    $cells->setFontFamily('Cambria');
                });
                
                $sheet->cells('A3:G3', function($cells){
                    $cells->setFontWeight('bold');
                    $cells->setAlignment('center');
                    $cells->setFontFamily('Cambria');
                });
                
                $sheet->cells('A5:G5', function($cells){
                    $cells->setBackground('#bdc3c7');
                    $cells->setFontColor('#000000');
                    $cells->setFontFamily('Cambria');
                    $cells->setFontWeight('bold');
                    $cells->setAlignment('center');
                    
                });
                
                $sheet->cells('A6:G6', function($cells){
                   $cells->setAlignment('center'); 
                });
                
                $sheet->cells('A11', function($cells){
                    $cells->setFontFamily('Cambria');
                    $cells->setFontWeight('bold');
                });
                
                $sheet->cells('A12', function($cells){
                    $cells->setFontFamily('Cambria');
                });
                
                $sheet->cells('A13', function($cells){
                    $cells->setFontFamily('Cambria');
                });
                
                $sheet->cells('B13:C13', function($cells){
                    $cells->setFontFamily('Cambria');
                    $cells->setFontWeight('bold');
                });
            });
        })->export('xlsx');
    }

    //Finance--------------------------------------------------------------------------------------------------------------
    public function entryfi(){
        $respon = '1';
        $data = q_berita_si1::paginate('5');
        $page = q_berita_si1::paginate('5');
        return View('fi.entryfi')
            ->with('data', $data)
            ->with('page', $page)
            ->with('respon', $respon);
    }

    public function inputfi($id){
        $data = q_berita_si::where('nota_lama', '=', $id)->first();
        return View('fi.inputfi')
            ->with('data', $data);
    }
    
    public function abaikanfi2($id){
        $data = q_berita_si::where('nota_lama', '=', $id)->first();
        return View('fi.abaikanfi')
            ->with('data', $data);
    }

    public function editdatafi($id){
        $title = q_berita_si::where('id_buat_ba', '=', $id)->first();
        $data = q_berita_si::where('id_buat_ba', '=', $id)->get();
        return View('fi.editdatafi')
            ->with('title', $title)
            ->with('data', $data);
    }

    public function editdetaildatafi($id){
        $data = q_monitoring::where('nota_lama', '=', $id)->first();
        return View('fi.editdetaildatafi')
            ->with('data', $data);
    }

    public function datafi(){
        $respon = '1';
        $data = q_detail_monitoring::paginate('5');
        $page = q_detail_monitoring::paginate('5');
        return View('fi.datafi')
            ->with('data', $data)
            ->with('page', $page)
            ->with('respon', $respon);
    }

    public function detailinputfi($id){
        $title = q_berita_si::where('id_buat_ba', '=', $id)->first();
        $data = q_berita_si::where('id_buat_ba', '=', $id)->get();
        return View('fi.detailinputfi')
            ->with('title', $title)
            ->with('data', $data);
    }

    public function detaildatafi($id){
        $data = q_berita_si::where('nota_lama', '=', $id)->first();
        return View('fi.detaildatafi')
            ->with('data', $data);
    }

    public function detaildatafinance($id){
        $title = q_monitoring::where('id_buat_ba', '=', $id)->first();
        $data = q_monitoring::where('id_buat_ba', '=', $id)->get();
        return View('fi.detaildatafinance')
            ->with('title', $title)
            ->with('data', $data);
    }

    public function dashboardfi(){
        $datafi = chatt_fi::all();
        return View('fi.dashboardfi')
            ->with('datafi', $datafi);
    }

    public function carifi(){
        $respon = '0';
        $cari = q_berita_si1::where('nama_customer', '=', Input::get('cari'))->get();
        return View('fi.entryfi')
            ->with('respon', $respon)
            ->with('cari', $cari);
    }

    public function caridatafi(){
        $respon = '0';
        $cari = q_detail_monitoring::where('nama_customer', '=', Input::get('cari'))->get();
        return View('fi.datafi')
            ->with('respon', $respon)
            ->with('cari', $cari);
    }
    
    public function caridatacr(){
        $respon = '0';
        $cari = q_cr1::where('nama_customer', '=', Input::get('cari'))->get();
        return View('cs.datacs')
            ->with('respon', $respon)
            ->with('cari', $cari);
    }
    
    public function carientryto(){
        $respon = '0';
        $cari = q_cr1::where('nama_customer', '=', Input::get('cari'))->get();
        return View('to.entryto')
            ->with('respon', $respon)
            ->with('cari', $cari);
    }
    
    public function caridatato(){
        $respon = '0';
        $cari = q_berita1::where('nama_customer', '=', Input::get('cari'))->get();
        return View('to.datato')
            ->with('respon', $respon)
            ->with('cari', $cari);
    }
    
    public function exc(){
        $exc = q_berita_si::where('id_buat_ba', '=', '380580-5-9-2015')->get();
                        $exc2 = q_berita_si::where('id_buat_ba', '=', '380580-5-9-2015')->first();

        return View('excel')
            ->with('exc', $exc)
            ->with('exc2', $exc2);
        
    }
    
    public function exportexcl($id){
        Excel::create('New file', function($excel) use($id){

        $excel->sheet('New sheet', function($sheet) use($id) {
            $date = date('d-m-Y');
            $si = q_berita_si::where('id_buat_ba', '=', $id)->get();
            $si2 = q_berita_si::where('id_buat_ba', '=', $id)->first();
			
			$to = q_berita::where('id_cr', '=', $id)->get();
			$to2 = q_berita::where('id_cr', '=', $id)->first();
			
        $sheet->loadView('excel')
            ->with('date', $date)
            ->with('si', $si)
            ->with('si2', $si2)
			->with('to', $to)
            ->with('to2', $to2);

        })->export('xls');

        });
    }
   public function reportmonitoring()
    {
        $data = rpt_monitoring::all();
        return View('reportmonitoring')
        ->with('data',$data);
    }

    //truncate-data
    public function truncate(){
        return View('truncate.dashboard');
    }

    public function truncatecs(){
        $data = tb_cr::paginate('5');
        $page = tb_cr::paginate('5');
        $page->setPath('truncatecs');
        return View('truncate.cs')
            ->with('data', $data)
            ->with('page', $page);
    }

    public function truncateto(){
        $data = tb_to::paginate('5');
        $page = tb_to::paginate('5');
        $page->setPath('truncateto');
        return View('truncate.to')
            ->with('data', $data)
            ->with('page', $page);
    }

    public function truncatesi(){
        $data = tb_si::paginate('5');
        $page = tb_si::paginate('5');
        $page->setPath('truncatesi');
        return View('truncate.si')
            ->with('data', $data)
            ->with('page', $page);
    }

    public function truncatefi(){
        $data = tb_finance::paginate('5');
        $page = tb_finance::paginate('5');
        $page->setPath('truncatefi');
        return View('truncate.fi')
            ->with('data', $data)
            ->with('page', $page);
    }
    
    public function truncatenomerpermohonan(){
        $data = tb_buat_ba::paginate('5');
        $page = tb_buat_ba::paginate('5');
        $page->setPath('truncatenomerpermohonan');
        return View('truncate.nomerpermohonan')
            ->with('data', $data)
            ->with('page', $page);
    }

    public function truncateprosesmonitoring(){
        $data = tb_proses_ba::paginate('5');
        $page = tb_proses_ba::paginate('5');
        $page->setPath('truncateprosesmonitoring');
        return View('truncate.prosesmonitoring')
            ->with('data', $data)
            ->with('page', $page);
    }

    public function truncatereport(){
        $data = rpt_monitoring::paginate('5');
        $page = rpt_monitoring::paginate('5');
        $page->setPath('truncatereport');
        return View('truncate.report')
            ->with('data', $data)
            ->with('page', $page);
    }

}