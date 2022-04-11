// tombol tambah
$('.tambahData').on('click',function(){
$('.ubahData').html('Tambah Data Mahasiswa');
$('#nama').val('');
$('#semester').val('');
});


// tombol ubah
$('.ubahDataMahasiswa').on('click', function(){
$('.ubahData').html('Ubah Data Mahasiswa');
const id = $(this).data('id');
$('.url').attr('action','http://localhost/BELAJAR WEB/Belajar PHP/3.mvc PHP/public/mahasiswa/ubah');

$.ajax({
	url:'http://localhost/BELAJAR WEB/Belajar PHP/3.mvc PHP/public/mahasiswa/getUbah',
	data: {id: id},
	method:'post',
	dataType:'json',
	success: function(data){
		$('#nama').val(data.nama);
		$('#jurusan').val(data.jurusan);
		$('#semester').val(data.semester);
		$('#id').val(data.id);
		
	}

});

});








