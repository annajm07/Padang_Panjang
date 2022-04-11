<?php  

class Admin_model{
	private $db;

public function __construct(){
	$this->db = new Database;
}
	public function ubahNama($nama){
		$query = "UPDATE home SET nama = :nama";
		$this->db->query($query);
		$this->db->bind('nama',$nama);
		$this->db->execute();
		return $this->db->rowcount();

	}

	public function ubahPekerjaan($pekerjaan){
		$query = "UPDATE home SET pekerjaan = :pekerjaan";
		$this->db->query($query);
		$this->db->bind('pekerjaan',$pekerjaan);
		$this->db->execute();
		return $this->db->rowcount();
	}


	public function ubahLogo($logo){
		$nama = $logo['name'];
		$size = $logo['size'];
		$error = $logo['error'];
		$tmpFile = $logo['tmp_name'];

		$syarat = ['jpg','jpeg','png'];
		$ekstensi = explode('.', $nama);

		$type = strtolower(end($ekstensi));

		if($error == 4){
			echo "
				<script> alert('anda belum memasukkan gambar!');</script>
			";
			return false;
		}elseif($size > 1000000){
			echo "
				<script> alert('gambar yang anda masukkan terlalu besar!');</script>
			";
			return false;
		}elseif(!in_array($type, $syarat)){
			echo "
				<script> alert('yang anda masukkan bukan gambar!');</script>
			";
			return false;
		};

		$namaFileBaru = uniqid();
		$namaFileBaru .= '.';
		$namaFileBaru .= $type;

		move_uploaded_file($tmpFile, "img/logo/$namaFileBaru");
		return $namaFileBaru;

	
	}


	public function getLogo($logo){
		$this->db->query("UPDATE home SET logo = :logo");
		$this->db->bind('logo',$logo);
		$this->db->execute();
		return $this->db->rowcount();
	}



	public function ubahProfil($profil){
		$nama = $profil['name'];
		$size = $profil['size'];
		$error = $profil['error'];
		$tmpFile = $profil['tmp_name'];

		$syarat = ['jpg','jpeg','png'];
		$ekstensi = explode('.', $nama);

		$type = strtolower(end($ekstensi));

		if($error == 4){
			echo "
				<script> alert('anda belum memasukkan gambar!');</script>
			";
			return false;
		}elseif($size > 10000000){
			echo "
				<script> alert('gambar yang anda masukkan terlalu besar!');</script>
			";
			return false;
		}elseif(!in_array($type, $syarat)){
			echo "
				<script> alert('yang anda masukkan bukan gambar!');</script>
			";
			return false;
		};

		$namaFileBaru = uniqid();
		$namaFileBaru .= '.';
		$namaFileBaru .= $type;

		move_uploaded_file($tmpFile, "img/profil/$namaFileBaru");
		return $namaFileBaru;
	
	}


	public function getProfil($profil){
		$this->db->query("UPDATE home SET foto_profil = :profil");
		$this->db->bind('profil',$profil);
		$this->db->execute();
		return $this->db->rowcount();
	}




	public function getSkill(){
		$this->db->query("SELECT * FROM skill");
		return $this->db->resultSet();
	}


	public function inputSkill(){

		$keahlian = $_POST['keahlian'];
		$deskripsi = $_POST['deskripsi'];
		$gambar = $this->upload_image($_FILES['image']);

		$this->db->query("INSERT INTO skill VALUES ('',:gambar,:keahlian,:deskripsi)");
		$this->db->bind('gambar',$gambar);
		$this->db->bind('keahlian',$keahlian);
		$this->db->bind('deskripsi',$deskripsi);
		$this->db->execute();
		return $this->db->rowcount();
	}


	public function upload_image($image){
		$nama = $image['name'];
		$size = $image['size'];
		$error = $image['error'];
		$tmpFile = $image['tmp_name'];

		$syarat = ['jpg','jpeg','png'];
		$ekstensi = explode('.', $nama);

		$type = strtolower(end($ekstensi));

		if($error == 4){
			echo "
				<script> alert('anda belum memasukkan gambar!');</script>
			";
			return false;
		}elseif($size > 5000000){
			echo "
				<script> alert('gambar yang anda masukkan terlalu besar!');</script>
			";
			return false;
		}elseif(!in_array($type, $syarat)){
			echo "
				<script> alert('yang anda masukkan bukan gambar!');</script>
			";
			return false;
		};

		$namaFileBaru = uniqid();
		$namaFileBaru .= '.';
		$namaFileBaru .= $type;

		move_uploaded_file($tmpFile, "img/pekerjaan/$namaFileBaru");
		return $namaFileBaru;

	}




	public function hapusSkill($id){

		$this->db->query("DELETE FROM skill WHERE id = '$id'");
		$this->db->execute();
		return $this->db->rowcount();
	}



	public function getSkillById($id){
		$this->db->query("SELECT * FROM skill WHERE id = '$id'");
		return $this->db->single();
	}


	public function ubahSkill($id){
		$keahlian = $_POST['keahlian'];
		$deskripsi = $_POST['deskripsi'];
		
		$gambarlama = $_POST['gambarlama'];

		if($_FILES['image']['error'] === 4){
			$gambar = $gambarlama;
		}else{
			$gambar = $this->upload_image($_FILES['image']);
		}
		$this->db->query("UPDATE skill SET keahlian = :keahlian,
										   detail_keahlian = :deskripsi,
										   gambar = :gambar WHERE id = $id ");
		$this->db->bind('keahlian',$keahlian);
		$this->db->bind('deskripsi',$deskripsi);
		$this->db->bind('gambar',$gambar);
		$this->db->execute();
		return $this->db->rowcount();
	}



	public function getAbout(){
		$this->db->query("SELECT * FROM about");
		return $this->db->single();
	}


	public function ubahAbout($data){
		$query = "UPDATE about SET deskripsi = :data";
		$this->db->query($query);
		$this->db->bind('data',$data);
		$this->db->execute();
		return $this->db->rowcount();
	}



	public function getContact(){
		$this->db->query("SELECT * FROM contact");
		return $this->db->single();
	}


	public function ubahTelepon(){
		$this->db->query("UPDATE contact SET telepon = :telepon,
											 small_telepon = :small_tlp");

		$this->db->bind('telepon',$_POST['telepon']);
		$this->db->bind('small_tlp',$_POST['ket_tlp']);

		$this->db->execute();
		return $this->db->rowcount();
	}


	public function ubahEmail(){
		$this->db->query("UPDATE contact SET email = :email,
											 small_email = :small_email");

		$this->db->bind('email',$_POST['email']);
		$this->db->bind('small_email',$_POST['ket_eml']);

		$this->db->execute();
		return $this->db->rowcount();
	}


	public function ubahAlamat(){
		$this->db->query("UPDATE contact SET alamat = :alamat,
											 small_alamat = :small_alamat");

		$this->db->bind('alamat',$_POST['alamat']);
		$this->db->bind('small_alamat',$_POST['ket_alt']);

		$this->db->execute();
		return $this->db->rowcount();
	}


}

?>