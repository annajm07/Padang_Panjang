<?php  

class Admin extends Controller{

	public function __construct(){
		if(!isset($_SESSION['aktif'])){
			header('Location:'.BASEURL. '/login');
		}
	}

	public function index(){
		// ubah nama
		if(isset($_POST['nama'])){
			if ($this->model('Admin_model')->ubahNama($_POST['nama']) > 0){
				Flasher::setFlash('berhasil','diubah','success');
				header('Location:'.BASEURL. '/admin');
				exit;
			}
				else{
				Flasher::setFlash('gagal','diubah','danger');
				header('Location:'.BASEURL. '/admin');
				exit();
				}
		}
			// ubah pekerjaan
			elseif (isset($_POST['pekerjaan'])) {
				if ($this->model('Admin_model')->ubahPekerjaan($_POST['pekerjaan']) > 0){
					Flasher::setFlash('berhasil','diubah','success');
					header('Location:'.BASEURL. '/admin');
					exit;
				}
					else{
					Flasher::setFlash('gagal','diubah','danger');
					header('Location:'.BASEURL. '/admin');
					exit();
					}
			}


			// ubah logo
			elseif (isset($_FILES['logo'])) {

				$namaLogo = $this->model('Admin_model')->ubahLogo($_FILES['logo']);

				if ($this->model('Admin_model')->getLogo($namaLogo) > 0){
					Flasher::setFlash('berhasil','diubah','success');
					header('Location:'.BASEURL. '/admin');
					exit;
				}
					else{
					Flasher::setFlash('gagal','diubah','danger');
					header('Location:'.BASEURL. '/admin');
					exit();
					}
			}

			// ubah foto profil
			elseif (isset($_FILES['foto_profil'])) {

				$namaProfil = $this->model('Admin_model')->ubahProfil($_FILES['foto_profil']);

				if ($this->model('Admin_model')->getProfil($namaProfil) > 0){
					Flasher::setFlash('berhasil','diubah','success');
					header('Location:'.BASEURL. '/admin');
					exit;
				}
					else{
					Flasher::setFlash('gagal','diubah','danger');
					header('Location:'.BASEURL. '/admin');
					exit();
					}
			}



		else{
		$dt['home'] = $this->model('Home_model')->getHome();
		$this->view('admin/index',$dt);
		}
	}



	public function skill(){
		if(isset($_POST['submit'])){
		
		if($this->model('Admin_model')->inputSkill() > 0){
			Flasher::setFlash('berhasil','ditambahkan','success');
			header('Location:'.BASEURL. '/admin/skill');
			exit;
			}
			else{
			Flasher::setFlash('gagal','gagal','danger');
			header('Location:'.BASEURL. '/admin/skill');
			exit();
					}
		}
	

		$dt['home'] = $this->model('Admin_model')->getSkill();
		$this->view('admin/skill',$dt);
	}


	public function ubah($id){
		$data['ubah'] = $this->model('Admin_model')->getSkillById($id);

		if(isset($_POST['submit'])){
				if($this->model('Admin_model')->ubahSkill($id) > 0){
				Flasher::setFlash('berhasil','diubah','success');
				header('Location:'.BASEURL. '/admin/skill');
				exit;
				}
				else{
				Flasher::setFlash('gagal','diubah','danger');
				header('Location:'.BASEURL. '/admin/skill');
				exit();
				}
			
	}else{
		$this->view('admin/ubah',$data);
	}
	}


	public function hapus($id){

		if($this->model('Admin_model')->hapusSkill($id) > 0){
			Flasher::setFlash('berhasil','dihapus','success');
			header('Location:'.BASEURL. '/admin/skill');
			exit;
			}
			else{
			Flasher::setFlash('gagal','dihapus','danger');
			header('Location:'.BASEURL. '/admin/skill');
			exit();
		}
	}


	public function about(){
		if(isset($_POST['about'])){
			if($this->model('Admin_model')->ubahAbout($_POST['about']) > 0){
				Flasher::setFlash('berhasil','diubah','success');
				header('Location:'.BASEURL. '/admin/about');
				exit;
				}
				else{
				Flasher::setFlash('gagal','diubah','danger');
				header('Location:'.BASEURL. '/admin/about');
				exit();
				}
			
		}else{
		$dt['about'] = $this->model('Admin_model')->getAbout();
		$this->view('admin/about',$dt);
		}
	}



	public function contact(){

		if(isset($_POST['telepon'])){
			if($this->model('Admin_model')->ubahTelepon() > 0){
				Flasher::setFlash('berhasil','diubah','success');
				header('Location:'.BASEURL. '/admin/contact');
				exit;
				}
				else{
				Flasher::setFlash('gagal','diubah','danger');
				header('Location:'.BASEURL. '/admin/contact');
				exit();
				}
		}

		elseif(isset($_POST['email'])){
			if($this->model('Admin_model')->ubahEmail() > 0){
				Flasher::setFlash('berhasil','diubah','success');
				header('Location:'.BASEURL. '/admin/contact');
				exit;
				}
				else{
				Flasher::setFlash('gagal','diubah','danger');
				header('Location:'.BASEURL. '/admin/contact');
				exit();
			}
		}


		elseif(isset($_POST['alamat'])){
			if($this->model('Admin_model')->ubahAlamat() > 0){
				Flasher::setFlash('berhasil','diubah','success');
				header('Location:'.BASEURL. '/admin/contact');
				exit;
				}
				else{
				Flasher::setFlash('gagal','diubah','danger');
				header('Location:'.BASEURL. '/admin/contact');
				exit();
			}
		}
		$dt['kontak'] = $this->model('Admin_model')->getContact();
		$this->view('admin/contact',$dt);
	}



	public function logout(){
		$this->view('admin/logout');
	}


}

?>