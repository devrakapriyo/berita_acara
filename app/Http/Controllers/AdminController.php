<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Input;
use Auth;
use Redirect;
use Hash;
use Validator;
use DB;

use App\User;
use App\q_berita;
use App\q_berita_si;
use App\q_berita_si1;
use App\q_cr;
use App\q_cr1;
use App\tb_proses_ba;
use App\q_finance;
use App\q_monitoring;
use App\q_detail_monitoring;
use App\q_si;
use App\q_to;
use App\q_buat_ba;
use App\tb_cr;
use App\tb_finance;
use App\tb_si;
use App\tb_to;
use App\tb_user_cr;
use App\tb_user_finance;
use App\tb_user_si;
use App\tb_user_to;
use App\tb_buat_ba;
use App\tb_rpt_monitoring;
use App\rpt_monitoring;
use App\chatt_cs;
use App\chatt_to;
use App\chatt_si;
use App\chatt_fi;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function login(){
        if(Auth::attempt(['email' => Input::get('email'), 'password' => Input::get('password')])){
            $auth = Auth::User()->id;
            if(Auth::user()->jab == "Admin"){
                return Redirect::to('dashboardadmin')
                ->with('auth', $auth);  
            }elseif(Auth::user()->jab == "Customer Relation") {
                return Redirect::to('dashboardcs')
                ->with('auth', $auth);  
            }elseif(Auth::user()->jab == "Terminal Operation"){
                return Redirect::to('dashboardto')
                ->with('auth', $auth);
            }elseif(Auth::user()->jab == "Data dan Informasi"){
                return Redirect::to('dashboardsi')
                ->with('auth', $auth);
            }elseif(Auth::user()->jab == "Finance"){
                return Redirect::to('dashboardfi')
                ->with('auth', $auth);
            }elseif(Auth::user()->jab == "User"){
                return Redirect::to('monitoring')
                ->with('auth', $auth);
            }
        }else{
            return Redirect::back()
                ->with('gagal', 'Maaf username dan password anda tidak cocok');
        }
    }

    public function logout(){
        Auth::logout();
        return Redirect::to('login');
    }

    public function hapusdataba($id){
        $respon = '1';
        tb_cr::where('id_cs', $id)->delete();
        return View('hapusdata')
            ->with('respon', $respon)
            ->with('sukses', 'Data telah di hapus');
    }

    //simpan-admin----------------------------------------------------------------------------------------------------------
    public function simpanutama(){
        $validator = Validator::make(
            Input::all(),
            array(
                "nama" => "required",
                "password"   => "required",
                "jabatan"   => "required",
                "foto"   => "required",
            )
        );

        if($validator->passes()){
            $simpan = new User();
            $simpan->name = Input::get('nama');
            $simpan->email = Input::get('email');
            $simpan->jab = Input::get('jabatan');
            $simpan->password = Hash::make(Input::get('password'));
            $simpan->foto = Input::file('foto')->getClientOriginalName();
            $simpan->save();

            $file = Input::file('foto');
            $path = 'image';
            $file->move($path,$file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data baru admin berhasil di simpan');
        }else{
            return Redirect::back()
                ->with('gagal', 'Mohon maaf, data tidak bisa di simpan');
        }
    }

    public function simpancs(){
        $validator = Validator::make(
            Input::all(),
            array(
                "nama"   => "required",
                "password"   => "required",
                "jabatan"   => "required",
                "foto"   => "required",
            )
        );

        if($validator->passes()){
            $simpan = new User;
            $simpan->name = Input::get('nama');
            $simpan->email = Input::get('email');
            $simpan->jab = Input::get('jabatan');
            $simpan->password = Hash::make(Input::get('password'));
            $simpan->foto = Input::file('foto')->getClientOriginalName();
            $simpan->save();

            $file = Input::file('foto');
            $path = 'image';
            $file->move($path,$file->getClientOriginalName());


            $simpancr = new tb_user_cr;
            $simpancr->nama_cr = Input::get('nama');
            $simpancr->nipp_cr = Input::get('email');
            $simpancr->jab_cr = Input::get('jabatan');
            $simpancr->pass_cr = Hash::make(Input::get('password'));
            $simpancr->save();

            return Redirect::back()
                ->with('sukses', 'Data baru admin customer service berhasil di simpan');
        }else{
            return Redirect::back()
                ->with('gagal', 'Mohon maaf, data tidak bisa di simpan');
        }
    }

    public function simpanto(){
        $validator = Validator::make(
            Input::all(),
            array(
                "nama" => "required",
                "password"   => "required",
                "jabatan"   => "required",
                "foto"   => "required",
            )
        );

        if($validator->passes()){
            $simpan = new User();
            $simpan->name = Input::get('nama');
            $simpan->email = Input::get('email');
            $simpan->jab = Input::get('jabatan');
            $simpan->password = Hash::make(Input::get('password'));
            $simpan->foto = Input::file('foto')->getClientOriginalName();
            $simpan->save();

            $file = Input::file('foto');
            $path = 'image';
            $file->move($path,$file->getClientOriginalName());

            $simpanto = new tb_user_to;
            $simpanto->nama_to = Input::get('nama');
            $simpanto->nipp_to = Input::get('email');
            $simpanto->jab_to = Input::get('jabatan');
            $simpanto->pass_to = Hash::make(Input::get('password'));
            $simpanto->save();

            return Redirect::back()
                ->with('sukses', 'Data baru admin terminal operation berhasil di simpan');
        }else{
            return Redirect::back()
                ->with('gagal', 'Mohon maaf, data tidak bisa di simpan');
        }
    }

    

    public function simpansi(){
        $validator = Validator::make(
            Input::all(),
            array(
                "nama" => "required",
                "password"   => "required",
                "jabatan"   => "required",
                "foto"   => "required",
            )
        );

        if($validator->passes()){
            $simpan = new User();
            $simpan->name = Input::get('nama');
            $simpan->email = Input::get('email');
            $simpan->jab = Input::get('jabatan');
            $simpan->password = Hash::make(Input::get('password'));
            $simpan->foto = Input::file('foto')->getClientOriginalName();
            $simpan->save();

            $file = Input::file('foto');
            $path = 'image';
            $file->move($path,$file->getClientOriginalName());

            $simpansi = new tb_user_si;
            $simpansi->nama_si = Input::get('nama');
            $simpansi->nipp_si = Input::get('email');
            $simpansi->jab_si = Input::get('jabatan');
            $simpansi->pass_si = Hash::make(Input::get('password'));
            $simpansi->save();

            return Redirect::back()
                ->with('sukses', 'Data baru admin sistem information berhasil di simpan');
        }else{
            return Redirect::back()
                ->with('gagal', 'Mohon maaf, data tidak bisa di simpan');
        }
    }

    public function simpanfi(){
        $validator = Validator::make(
            Input::all(),
            array(
                "nama" => "required",
                "password"   => "required",
                "jabatan"   => "required",
                "foto"   => "required",
            )
        );

        if($validator->passes()){
            $simpan = new User();
            $simpan->name = Input::get('nama');
            $simpan->email = Input::get('email');
            $simpan->jab = Input::get('jabatan');
            $simpan->password = Hash::make(Input::get('password'));
            $simpan->foto = Input::file('foto')->getClientOriginalName();
            $simpan->save();

            $file = Input::file('foto');
            $path = 'image';
            $file->move($path,$file->getClientOriginalName());

            $simpanfi = new tb_user_finance;
            $simpanfi->nama_finance = Input::get('nama');
            $simpanfi->nipp_finance = Input::get('email');
            $simpanfi->jab_finance = Input::get('jabatan');
            $simpanfi->pass_finance = Hash::make(Input::get('password'));
            $simpanfi->save();

            return Redirect::back()
                ->with('sukses', 'Data baru admin finance berhasil di simpan');
        }else{
            return Redirect::back()
                ->with('gagal', 'Mohon maaf, data tidak bisa di simpan');
        }
    }

    public function simpanuser(){
        $validator = Validator::make(
            Input::all(),
            array(
                "nama" => "required",
                "password"   => "required",
                "jabatan"   => "required",
                "foto"   => "required",
            )
        );

        if($validator->passes()){
            $simpan = new User();
            $simpan->name = Input::get('nama');
            $simpan->email = Input::get('email');
            $simpan->jab = Input::get('jabatan');
            $simpan->password = Hash::make(Input::get('password'));
            $simpan->foto = Input::file('foto')->getClientOriginalName();
            $simpan->save();

            $file = Input::file('foto');
            $path = 'image';
            $file->move($path,$file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data baru user berhasil di simpan');
        }else{
            return Redirect::back()
                ->with('gagal', 'Mohon maaf, data tidak bisa di simpan');
        }
    }

    //edit-admin------------------------------------------------------------------------------------------------------------
    public function editadmin($id){
        $detail = User::find($id);
        return View('admin.editadmin.editadmin')
            ->with('detail', $detail);
    }
    
    public function editadmincs($id){
        $data = tb_user_cr::where('id_user_cr', '=', $id);
        $detail = User::find($id);
        return View('admin.editadmin.editadmincs')
            ->with('data', $data)
            ->with('detail', $detail);
    }

    public function editadminto($id){
        $detail = User::find($id);
        return View('admin.editadmin.editadminto')
            ->with('detail', $detail);
    }

    public function editadminsi($id){
        $detail = User::find($id);
        return View('admin.editadmin.editadminsi')
            ->with('detail', $detail);
    }

    public function editadminfi($id){
        $detail = User::find($id);
        return View('admin.editadmin.editadminfi')
            ->with('detail', $detail);
    }

    public function edituser($id){
        $detail = User::find($id);
        return View('admin.editadmin.edituser')
            ->with('detail', $detail);
    }

    //update-admin----------------------------------------------------------------------------------------------------------
    public function baruiadmin(){
        if(Input::file('foto') == null){
            $barui = User::where('id', '=', Input::get('id'))
                ->update([
                    'name' => Input::get('nama'),
                    'email' => Input::get('email')
                ]);
            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
        }else{
            $barui = User::where('id', '=', Input::get('id'))
                ->update([
                    'name' => Input::get('nama'),
                    'email' => Input::get('email'),
                    'foto' =>Input::file('foto')->getClientOriginalName()
                ]);

                $file = Input::file('foto');
                $path = 'image';
                $file->move($path, $file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
        }
    }

    public function baruiadminutama(){
        if(Input::file('foto') == null){
            $barui = User::where('id', '=', Input::get('id'))
                ->update([
                    'name' => Input::get('nama'),
                    'email' => Input::get('email'),
                    'password' => Hash::make(input::get('password'))
                ]);
            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
        }else{
            $barui = User::where('id', '=', Input::get('id'))
                ->update([
                    'name' => Input::get('nama'),
                    'email' => Input::get('email'),
                    'password' => Hash::make(input::get('password')),
                    'foto' =>Input::file('foto')->getClientOriginalName()
                ]);

                $file = Input::file('foto');
                $path = 'image';
                $file->move($path, $file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
        }
    }


    public function baruiadmincs(){
        if(Input::file('foto') == null){
            $barui = User::where('id', '=', Input::get('id'))
                ->update([
                    'name' => Input::get('nama'),
                    'email' => Input::get('email'),
                    'password' => Hash::make(Input::get('password')),
                    'jab' => Input::get('jabatan')
                ]);

            $baruicr = tb_user_cr::where('id_user_cr', '=', Input::get('id'))
                ->update([
                    'nama_cr' => Input::get('nama'),
                    'nipp_cr' => Input::get('email'),
                    'pass_cr' => Hash::make(Input::get('password')),
                    'jab_cr' => Input::get('jabatan')
                ]);

            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
        }else{
            $barui = User::where('id', '=', Input::get('id'))
                ->update([
                    'name' => Input::get('nama'),
                    'email' => Input::get('email'),
                    'password' => Hash::make(Input::get('password')),
                    'jab' => Input::get('jabatan'),
                    'foto' =>Input::file('foto')->getClientOriginalName()
                ]);

            $baruicr = tb_user_cr::where('id_user_cr', '=', Input::get('id'))
                ->update([
                    'nama_cr' => Input::get('nama'),
                    'nipp_cr' => Input::get('email'),
                    'pass_cr' => Hash::make(Input::get('password')),
                    'jab_cr' => Input::get('jabatan')
                ]);

                $file = Input::file('foto');
                $path = 'image';
                $file->move($path, $file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
        }
    }

    public function baruiadminto(){
        if(Input::file('foto') == null){
            $barui = User::where('id', '=', Input::get('id'))
                ->update([
                    'name' => Input::get('nama'),
                    'email' => Input::get('email'),
                    'password' => Hash::make(Input::get('password')),
                    'jab' => Input::get('jabatan')
                ]);
            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
        }else{
            $barui = User::where('id', '=', Input::get('id'))
                ->update([
                    'name' => Input::get('nama'),
                    'email' => Input::get('email'),
                    'password' => Hash::make(Input::get('password')),
                    'jab' => Input::get('jabatan'),
                    'foto' =>Input::file('foto')->getClientOriginalName()
                ]);

                $file = Input::file('foto');
                $path = 'image';
                $file->move($path, $file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
        }
    }

    public function baruiadminsi(){
        if(Input::file('foto') == null){
            $barui = User::where('id', '=', Input::get('id'))
                ->update([
                    'name' => Input::get('nama'),
                    'email' => Input::get('email'),
                    'password' => Hash::make(Input::get('password')),
                    'jab' => Input::get('jabatan')
                ]);
            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
        }else{
            $barui = User::where('id', '=', Input::get('id'))
                ->update([
                    'name' => Input::get('nama'),
                    'email' => Input::get('email'),
                    'password' => Hash::make(Input::get('password')),
                    'jab' => Input::get('jabatan'),
                    'foto' =>Input::file('foto')->getClientOriginalName()
                ]);

                $file = Input::file('foto');
                $path = 'image';
                $file->move($path, $file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
        }
    }

    public function baruiadminfi(){
        if(Input::file('foto') == null){
            $barui = User::where('id', '=', Input::get('id'))
                ->update([
                    'name' => Input::get('nama'),
                    'email' => Input::get('email'),
                    'password' => Hash::make(Input::get('password')),
                    'jab' => Input::get('jabatan')
                ]);
            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
        }else{
            $barui = User::where('id', '=', Input::get('id'))
                ->update([
                    'name' => Input::get('nama'),
                    'email' => Input::get('email'),
                    'password' => Hash::make(Input::get('password')),
                    'jab' => Input::get('jabatan'),
                    'foto' =>Input::file('foto')->getClientOriginalName()
                ]);

                $file = Input::file('foto');
                $path = 'image';
                $file->move($path, $file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
        }
    }

    public function baruiuser(){
        if(Input::file('foto') == null){
            $barui = User::where('id', '=', Input::get('id'))
                ->update([
                    
                    'name' => Input::get('nama'),
                    'email' => Input::get('email'),
                    'password' => Hash::make(Input::get('password')),
                    'jab' => Input::get('jabatan')
                ]);
            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
        }else{
            $barui = User::where('id', '=', Input::get('id'))
                ->update([
                    'name' => Input::get('nama'),
                    'email' => Input::get('email'),
                    'password' => Hash::make(Input::get('password')),
                    'jab' => Input::get('jabatan'),
                    'foto' =>Input::file('foto')->getClientOriginalName()
                ]);

                $file = Input::file('foto');
                $path = 'image';
                $file->move($path, $file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
        }
    }

    //hapus-admin------------------------------------------------------------------------------------------------------
    public function deleteadmin($id){
        User::find($id)->delete();
        return Redirect::back()
            ->with('sukses', 'Data telah di hapus');
    }

    //detail-----------------------------------------------------------------------------------------------------------
    public function detaildata($id){
        $detail = User::find($id);
        return View('admin.detailadmin.detailadmin')
            ->with('detail', $detail);
    }

    public function detailadmin(){
        return View('admin.detailadmin.detailadmin');
    }

    //CS dan TOt dan SI dan FI------------------------------------------------------------------------------------------
    public function monitoringcs(){
        $simpanprosesba = new tb_proses_ba;
        $simpanprosesba->id_cr = Input::get('no_permohonan');
        $simpanprosesba->pro_cr = '1';
        $simpanprosesba->pro_to = '0';
        $simpanprosesba->pro_si = '0';
        $simpanprosesba->pro_fi = '0';
        $simpanprosesba->tgl_proses = date('Y-m-d');
        $simpanprosesba->time = time();
        $simpanprosesba->save();
        
        

        return Redirect::to('entrycs')
            ->with('sukses', 'Nomer permohonan terinput');
    }

        public function entrycs()
    {
       date_default_timezone_set("Asia/Jakarta");
       $waktu = date('Y-m-d');
        $user = tb_user_cr::where('nama_cr', '=', Auth::user()->name)->first();
        for($i = 0; $i <count(Input::get('no_permohonan')); $i++){
            $entrycs = new tb_cr;
            $entrycs->id_cr = Input::get('no_permohonan')[$i];
            $entrycs->nama_customer = Input::get('customer')[$i];
            $entrycs->no_pengajuan = Input::get('no_pengajuan')[$i];    
            $entrycs->jenis_nota = Input::get('jenis_nota')[$i];
            $entrycs->nota_lama = Input::get('nota_lama')[$i];
            $entrycs->tagihan = Input::get('tagihan')[$i];
            $entrycs->surat_kuasa = Input::get('surat_kuasa')[$i];
            $entrycs->no_req = Input::get('no_req')[$i];
            $entrycs->terminal_operasi = Input::get('to')[$i];
            $entrycs->id_user_cr = $user->id_user_cr;
            $entrycs->tgl_cr = date('Y-m-d');
            $entrycs->jam_cr = date('H:i:s');
            $entrycs->status_cr = 'NEW';
            $entrycs->save();
            
            $entry_monitor = new tb_rpt_monitoring;
            $entry_monitor->nama_customer = Input::get('customer')[$i];
            $entry_monitor->no_pengajuan = Input::get('no_pengajuan')[$i];
            $entry_monitor->tgl_cs = date('Y-m-d');
            $entry_monitor->nota_lama = Input::get('nota_lama')[$i];
            $entry_monitor->jenis_nota = Input::get('jenis_nota')[$i];
            $entry_monitor->tgl_kirim_to = date('Y-m-d');
            
            $entry_monitor->tgl_kembalicr_to = '0000-00-00'[$i];
            $entry_monitor->tgl_kirim_datin = '0000-00-00'[$i];
            $entry_monitor->tgl_kembalicr_si = '0000-00-00'[$i];
            $entry_monitor->tagihan_awal = Input::get('tagihan')[$i];
            $entry_monitor->tgl_kirim_keuangan = '0000-00-00'[$i]; 
            $entry_monitor->id_warna = '1';
            
            $entry_monitor->save();
            
        }

        return Redirect::to('monitoringcs')
            ->with('sukses', 'Data berhasil tersimpan');        
    }


    public function updatecs(){
            $barui = tb_cr::where('id_cs', '=', Input::get('id'))
                ->update([
                    'nama_customer' => Input::get('nama_customer'),
                    'nota_lama' => Input::get('nota_lama'),
                    'no_req' => Input::get('no_req'),
                    'jenis_nota' => Input::get('jenis_nota'),
                    'terminal_operasi' => Input::get('to')
                ]);
            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
    }

    public function deletedetailcs($id){
        $hapus = tb_cr::where('id_cs', '=', $id)->delete();
        return Redirect::back()
            ->with('sukses', 'Data berhasil terhapus');
    }

    public function entryto(){
        date_default_timezone_set("Asia/Jakarta");
        $date = date('Y-m-d');
        $find = tb_user_to::where('nama_to', '=', Auth::user()->name)->first();
        $simpanto = new tb_to;
        $simpanto->id_cr = Input::get('id');
        $simpanto->no_pengajuan = Input::get('no_pengajuan');
        $simpanto->nota_lama = Input::get('nota_lama');
        $simpanto->no_bprp = Input::get('no_bprp');
        $simpanto->id_buat_ba = Input::get('id_buat_ba');
        $simpanto->dok_pendukung = Input::file('dok_pendukung')->getClientOriginalName();
        $simpanto->id_user_to = $find->id_user_to;
        $simpanto->status_to = 'NEW';
        $simpanto->tgl_to = date('Y-m-d');
        $simpanto->jam_to = date('H:i:s');
        $simpanto->save();

        $file = Input::file('dok_pendukung'); 
        $path = 'dokpendukung'; 
        $file->move($path,$file->getClientOriginalName());

        $update = tb_cr::where('id_cr','=',Input::get('id'))
            ->update([
                'status_cr' => 'KONFIRMASI'
        ]);

        $updatemonitoring = tb_proses_ba::where('id_cr','=',Input::get('id'))
            ->update([
                'pro_to' => '1',
                'pro_si' => '0',
                'pro_fi' => '0'
        ]);
        
        $simpaninputfi = new tb_buat_ba;
        $simpaninputfi->id_buat_ba = Input::get('id_buat_ba');
        $simpaninputfi->buat_ba = '';
        $simpaninputfi->status = '';
        $simpaninputfi->save();

         $update_rptmonitoring = tb_rpt_monitoring::where('nota_lama','=', Input::get('nota_lama'))
            ->update([
                'tgl_kembalicr_to' => $date,
                'tgl_kirim_datin' => $date,
                'no_berita_acara' => Input::get('id_buat_ba')
        ]);
        
        return Redirect::back()
            ->with('sukses', 'Data berhasil tersimpan');
    }

    public function editdatato(){
        if(Input::file('dok_pendukung') == null){
            return Redirect::back()
                ->with('gagal', 'Maaf, data tidak dapat di simpan');
        }else{
            $barui = tb_to::where('nota_lama', '=', Input::get('id'))
                ->update([
                    'dok_pendukung' =>Input::file('dok_pendukung')->getClientOriginalName()
                ]);

                $file = Input::file('dok_pendukung');
                $path = 'dokpendukung';
                $file->move($path, $file->getClientOriginalName());

            return Redirect::back()
                ->with('sukses', 'Data berhasil di perbarui');
        }
    }

    public function deletedatato($id){
        $hapus = tb_to::where('id_cr', '=', $id)->delete();
        return Redirect::back()
            ->with('sukses', 'Data berhasil terhapus');
    }

    public function abaikanto($id){
        $update = tb_cr::where('id_cr','=',$id)
            ->update([
                'status_cr' => 'FAILED'
            ]);

        $updatemonitoring = tb_proses_ba::where('id_cr','=',$id)
            ->update([
                'pro_to' => '2',
                'pro_si' => '2',
                'pro_fi' => '2'
        ]);

        return Redirect::to('entryto');
    }
    
    public function inputba($id){
        $data = tb_buat_ba::where('id_buat_ba', '=', $id)
            ->update([
                'buat_ba' => Input::get('buat_ba'),
                'status' => 'tersedia'
            ]);
		return Redirect::back();
    }

    public function buat_ba($id) 
    {

        $data = q_berita::where('id_buat_ba', '=', $id)->get();
        $data2 = tb_buat_ba::where('id_buat_ba', '=', $id)->first();
        $data3 = q_berita::where('id_buat_ba', '=', $id)->first();
        return View('to.buatba') 
            ->with('data', $data) 
            ->with('data2', $data2)
            ->with('data3', $data3);
    }

    public function inputsi()
    {
        date_default_timezone_set("Asia/Jakarta");
        $date = date('Y-m-d');
		$user = tb_user_si::where('nama_si', '=', Auth::user()->name)->first();
        $simpaninputsi = new tb_si;
        $simpaninputsi->id_buat_ba = Input::get('id_buat_ba');
        $simpaninputsi->id_user_si = $user->id_user_si;
        $simpaninputsi->tgl_si = date('Y-m-d');
        $simpaninputsi->jam_si = date('H:i:s');
        $simpaninputsi->nota_lama = Input::get('nota_lama');
        $simpaninputsi->nota_baru = Input::get('nota_baru');
        $simpaninputsi->tagihan_baru = Input::get('tagihan_baru');
        $simpaninputsi->keterangan = Input::get('keterangan');
        $simpaninputsi->status_si = Input::get('status_si');
        $simpaninputsi->save();

        $update = tb_to::where('id_cr','=',Input::get('id_cr'))
            ->update([
                'status_to' => 'KONFIRMASI'
        ]);

        $updatemonitoring = tb_proses_ba::where('id_cr','=',Input::get('id_cr'))
            ->update([
                'pro_si' => '1',
                'pro_fi' => '0'
        ]);
        
        $update_rptmonitoring = tb_rpt_monitoring::where('nota_lama','=',Input::get('nota_lama'))
            ->update ([
                'tagihan_akhir' => Input::get('tagihan_baru'),
                'tgl_kembalicr_si' => $date,
                'nota_baru' => Input::get('nota_baru'),
                'tgl_kirim_restitusi' => date('Y-m-d')
            ]);


        return Redirect::back()
            ->with('sukses', 'Data berhasil tersimpan');
    }

    public function deletedatasi($id){
        $delete = tb_si::where('id_buat_ba', '=', $id)->delete();
        return Redirect::back()
            ->with('sukses', 'Data berhasil dihapus');
    }

     public function abaikansi($id)
        {
            $update = tb_to::where('id_buat_ba','=',$id)
                ->update([
                    'status_to' => 'FAILED'
            ]);

            $updatemonitoring = tb_proses_ba::where('id_cr','=',$id)
            ->update([
                'pro_si' => '2',
                'pro_fi' => '2'
            ]);

            return Redirect::to('entrysi');
        }

    public function editdatafi(){
        $update = tb_finance::where('nota_lama', '=', Input::get('id'))
            ->update([
                'tgl_finance' => Input::get('tanggal'),
                'jml_finance' => Input::get('jml_finance')
            ]);

        return Redirect::back()
            ->with('sukses', 'Data berhasil di perbarui');
    }

    public function editdatasi(){
        $update = tb_si::where('nota_lama', '=', Input::get('id'))
            ->update([
                'nota_baru' => Input::get('nota_baru'),
                'tagihan_baru' =>input::get('tagihan_baru'),
                'keterangan' =>input::get('keterangan')
            ]);

        return Redirect::back()
            ->with('sukses', 'Data berhasil di perbarui');
    }   

     public function inputfi()
    {
        date_default_timezone_set("Asia/Jakarta");
        $date = date('Y-m-d');
        $simpaninputfi = new tb_finance;
        $simpaninputfi->id_buat_ba = Input::get('id_buat_ba');
        $simpaninputfi->tgl_finance = date('Y-m-d');
        $simpaninputfi->jam_finance = date('H:i:s');
        $simpaninputfi->nota_lama = Input::get('nota_lama');
        $simpaninputfi->status_fi = Input::get('status_fi');
        $simpaninputfi->jml_finance = Input::get('jml_finance');
        $simpaninputfi->id_user_finance = '1';
        $simpaninputfi->save();

        $update = tb_si::where('id_buat_ba','=',Input::get('id_buat_ba'))
            ->update([
                'status_si' => 'KONFIRMASI'
        ]);

        $updatemonitoring = tb_proses_ba::where('id_cr','=',Input::get('id_cr'))
            ->update([
                'pro_fi' => '1'
        ]);


        $update_rptmonitoring = tb_rpt_monitoring::where('nota_lama','=',Input::get('nota_lama'))
            ->update([
                'tgl_kirim_keuangan' => date('Y-m-d')
            ]);
        
        return Redirect::back()
            ->with('sukses', 'Data berhasil tersimpan');
    }

    public function abaikanfi($id)
        {
            $update = tb_si::where('id_buat_ba','=',$id)
                ->update([
                    'status_si' => 'FAILED'
                ]);


            $updatemonitoring = tb_proses_ba::where('id_cr','=',$id)
            ->update([
                'pro_fi' => '2'
            ]);

            return Redirect::to('entryfi');
        }

    public function detailpengajuan($id){
        $title = q_cr::where('id_cr', '=', $id)->first();
        $data = q_cr::where('id_cr', '=', $id)->get();
        return View('to.detailpengajuan')
            ->with('data', $data)
            ->with('title', $title);
    }

    public function detailba($id){
        $detail = q_berita::where('id_cr', '=', $id)->first();
        return View('to.detailba')
            ->with('detail', $detail);
    }

    public function detailsi($id){
        $title = q_berita_si::where('id_buat_ba', '=', $id)->first();
        $data = q_berita_si::where('id_buat_ba', '=', $id)->get();
        return View('si.detailsi')
            ->with('title', $title)
            ->with('data', $data);
    }

    public function detaildatasi($id){
        $data = q_berita_si1::where('nota_lama', '=', $id)->first();
        return View('si.detaildatasi')
            ->with('data', $data);
    }

    public function detailfi($id){
        $data = q_detail_monitoring::where('nota_lama', '=', $id)->first();
        return View('fi.detailfi')
            ->with('data', $data);
    }

    public function deletefi($id){
        $delete = tb_finance::where('id_buat_ba', '=', $id)->delete();
        return Redirect::back()
            ->with('sukses', 'Data berhasil terhapus');
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function abaikan_rptto($id)
    {
        date_default_timezone_set("Asia/Jakarta");
        $date = date('Y-m-d');
        $update_rptmonitoring = tb_rpt_monitoring::where('nota_lama','=', $id)
            ->update([
                'tgl_kembalicr_to' => $date,
                'tgl_kirim_datin' => $date,
                'no_berita_acara' => Input::get('id_buat_ba'),
                'id_warna'=> '2'
        ]);

        return Redirect::back()
            ->with('sukses', 'Data berhasil tersimpan');
        
    }

    public function abaikan_rptsi($id)
    {
        date_default_timezone_set("Asia/Jakarta");
        $date = date('Y-m-d');
         $update_rptmonitoring = tb_rpt_monitoring::where('nota_lama','=', $id)
            ->update ([
                'tagihan_akhir' => Input::get('tagihan_baru'),
                'tgl_kembalicr_si' => $date,
                'nota_baru' => Input::get('nota_baru'),
                'tgl_kirim_restitusi' => date('Y-m-d')
            ]);


        return Redirect::back()
            ->with('sukses', 'Data berhasil tersimpan');
    }

    public function abaikanfi_rptfi($id)
    {
        date_default_timezone_set("Asia/Jakarta");
        $date = date('Y-m-d');
        $update_rptmonitoring = tb_rpt_monitoring::where('nota_lama','=', $id)
            ->update([
                'tgl_kembalicr_to' => $date,
                'tgl_kirim_datin' => $date,
                'no_berita_acara' => Input::get('id_buat_ba')
        ]);
        
        return Redirect::back()
            ->with('sukses', 'Data berhasil tersimpan');
    }

    //truncate-data

    public function hapuscs(){
        DB::table('tb_cr')->truncate();
        return Redirect::back()
            ->with('sukses', 'Table berhasil di truncate');
    }

    public function hapusto(){
        DB::table('tb_to')->truncate();
        return Redirect::back()
            ->with('sukses', 'Table berhasil di truncate');
    }

    public function hapussi(){
        DB::table('tb_si')->truncate();
        return Redirect::back()
            ->with('sukses', 'Table berhasil di truncate');
    }

   public function hapusfi(){
        DB::table('tb_finance')->truncate();
        return Redirect::back()
            ->with('sukses', 'Table berhasil di truncate');
    }
    
    public function hapusnomerpermohonan(){
        DB::table('tb_buat_ba')->truncate();
        return Redirect::back()
            ->with('sukses', 'Table berhasil di truncate');
    }
    
    public function hapusprosesmonitoring(){
        DB::table('tb_proses_ba')->truncate();
        return Redirect::back()
            ->with('sukses', 'Table berhasil di truncate');
    }
    
    public function hapusreport(){
        DB::table('tb_rpt_monitoring')->truncate();
        return Redirect::back()
            ->with('sukses', 'Table berhasil di truncate');
    }
    
    
    
    //=====================================tambahan untuk to======================================\\\
    
    
    public function abaikanba()
    {
        date_default_timezone_set("Asia/Jakarta");
        $date = date('Y-m-d');
        $find = tb_user_to::where('nama_to', '=', Auth::user()->name)->first();
        $simpanto = new tb_to;
        $simpanto->id_cr = Input::get('id');
        $simpanto->no_pengajuan = Input::get('no_pengajuan');
        $simpanto->nota_lama = Input::get('nota_lama');
        $simpanto->no_bprp = Input::get('no_bprp');
        $simpanto->id_buat_ba = Input::get('id_buat_ba');
        $simpanto->dok_pendukung = Input::file('dok_pendukung')->getClientOriginalName();
        $simpanto->id_user_to = $find->id_user_to;
        $simpanto->status_to = 'FAILED';
        $simpanto->tgl_to = date('Y-m-d');
        $simpanto->jam_to = date('H:i:s');
        $simpanto->save();

        $file = Input::file('dok_pendukung'); 
        $path = 'dokpendukung'; 
        $file->move($path,$file->getClientOriginalName());

        $update = tb_cr::where('id_cr','=',Input::get('id'))
            ->update([
                'status_cr' => 'FAILED'
        ]);

        $updatemonitoring = tb_proses_ba::where('id_cr','=',Input::get('id'))
            ->update([
                'pro_to' => '2',
                'pro_si' => '2',
                'pro_fi' => '2'
        ]);
        
        $simpaninputfi = new tb_buat_ba;
        $simpaninputfi->id_buat_ba = Input::get('id_buat_ba');
        $simpaninputfi->buat_ba = '';
        $simpaninputfi->status = '';
        $simpaninputfi->save();

         $update_rptmonitoring = tb_rpt_monitoring::where('nota_lama','=', Input::get('nota_lama'))
            ->update([
                'tgl_kembalicr_to' => $date,
                'tgl_kirim_datin' => $date,
                'no_berita_acara' => Input::get('id_buat_ba'),
                'id_warna'=> '2'
        ]);
        
        return Redirect::back()
            ->with('sukses', 'Data berhasil tersimpan');
    }
    
    //=====================================================tambahan untuk si =================================================
    
    public function abaikansi2()
    {
        date_default_timezone_set("Asia/Jakarta");
        $date = date('Y-m-d');
		$user = tb_user_si::where('nama_si', '=', Auth::user()->name)->first();
        $simpaninputsi = new tb_si;
        $simpaninputsi->id_buat_ba = Input::get('id_buat_ba');
        $simpaninputsi->id_user_si = $user->id_user_si;
        $simpaninputsi->tgl_si = date('Y-m-d');
        $simpaninputsi->jam_si = date('H:i:s');
        $simpaninputsi->nota_lama = Input::get('nota_lama');
        $simpaninputsi->nota_baru = Input::get('nota_baru');
        $simpaninputsi->tagihan_baru = Input::get('tagihan_baru');
        $simpaninputsi->keterangan = Input::get('keterangan');
        $simpaninputsi->status_si = 'FAILED';
        $simpaninputsi->save();

        $update = tb_to::where('id_cr','=',Input::get('id_cr'))
            ->update([
                'status_to' => 'FAILED'
        ]);

        $updatemonitoring = tb_proses_ba::where('id_cr','=',Input::get('id_cr'))
            ->update([
                'pro_si' => '2',
                'pro_fi' => '2'
        ]);
        
        $update_rptmonitoring = tb_rpt_monitoring::where('nota_lama','=', Input::get('nota_lama'))
            ->update ([
                'tagihan_akhir' => Input::get('tagihan_baru'),
                'tgl_kembalicr_si' => $date,
                'nota_baru' => Input::get('nota_baru'),
                'tgl_kirim_restitusi' => date('Y-m-d'),
                'id_warna' => '2'
            ]);



        return Redirect::back()
            ->with('sukses', 'Data berhasil tersimpan');
    
    }
    
    public function abaikanfi2()
    {
        date_default_timezone_set("Asia/Jakarta");
        $date = date('Y-m-d');
        $simpaninputfi = new tb_finance;
        $simpaninputfi->id_buat_ba = Input::get('id_buat_ba');
        $simpaninputfi->tgl_finance = date('Y-m-d');
        $simpaninputfi->jam_finance = date('H:i:s');
        $simpaninputfi->nota_lama = Input::get('nota_lama');
        $simpaninputfi->status_fi = 'FAILED';
        $simpaninputfi->jml_finance = Input::get('jml_finance');
        $simpaninputfi->id_user_finance = '1';
        $simpaninputfi->save();

        $update = tb_si::where('id_buat_ba','=',Input::get('id_buat_ba'))
            ->update([
                'status_si' => 'FAILED'
        ]);

        $updatemonitoring = tb_proses_ba::where('id_cr','=',Input::get('id_cr'))
            ->update([
                'pro_fi' => '2'
        ]);


        $update_rptmonitoring = tb_rpt_monitoring::where('nota_lama','=',Input::get('nota_lama'))
            ->update([
                'tgl_kirim_keuangan' => date('Y-m-d')
            ]);
        
        return Redirect::back()
            ->with('sukses', 'Data berhasil tersimpan');
    }

    public function chatt_cs(){
        $table = new chatt_cs;
        $table->nama = Auth::user()->name;
        $table->date = date('Y-m-d');
        $table->foto = Auth::user()->foto;
        $table->chatt = Input::get('chatt');
        $table->save();

        return Redirect::back();
    }

    public function chatt_to(){
        $table = new chatt_to;
        $table->nama = Auth::user()->name;
        $table->date = date('Y-m-d');
        $table->foto = Auth::user()->foto;
        $table->chatt = Input::get('chatt');
        $table->save();

        return Redirect::back();
    }

    public function chatt_si(){
        $table = new chatt_si;
        $table->nama = Auth::user()->name;
        $table->date = date('Y-m-d');
        $table->foto = Auth::user()->foto;
        $table->chatt = Input::get('chatt');
        $table->save();

        return Redirect::back();
    }

    public function chatt_fi(){
        $table = new chatt_fi;
        $table->nama = Auth::user()->name;
        $table->date = date('Y-m-d');
        $table->foto = Auth::user()->foto;
        $table->chatt = Input::get('chatt');
        $table->save();

        return Redirect::back();
    }
}