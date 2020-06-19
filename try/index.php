<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Latihan Ajax</title>
	<script type="text/javascript" src='../jquery-2.1.4.min.js'>
		
	</script>
</head>
<body>

<form action="simpan.php" method="POST">
	<input type="text" name="nama" placeholder="Nama Anda...">
	<input type="text" name="alamat" placeholder="Alamat Anda...">
	<button type="submit">Simpan</button>
</form>	
<hr/>
	<div id="content">

	</div>
<script type="text/javascript">
	$(document).ready(function(){
		//loadData adalah sebuah fungsion didalam jquery untuk menampikan data ke dalam id content nantinya
		loadData()

		$('form').on('submit',function(e){
			//cegah load sendiri
			e.preventDefault();
			//gunakan ajax untuk load
			$.ajax({
				type:$(this).attr('method'),
				url:$(this).attr('action'),
				data:$(this).serialize(),
				success:function(){
					loadData();
					resetData();
				}
				
			});

		})
	})

	//pembuatan fungsion loadData
	function loadData(){
		//fungsion ajax untukmengambila data dari file data.phpdan ditampilkan di contenrt
		$.get('data.php',function(data){
			$('#content').html(data);
			//untuk mendengarkan event dari url hapus
			$('.hapusData').click(function(e){
						e.preventDefault();
					//gunakan ajax untuk load
					$.ajax({
						//gunakanget karna sudah pasti get
						type:'get',
						//karnam atribut nya href(link atributntya href) berhubungan juga dengan type:'get' di atas
						url:$(this).attr('href'),
						// data:$(this).serialize(), kita tidak gunakan karna datnya sudah ada di link get
						success:function(){
							loadData();

						}
						
					});
					})
			$('.ubahData').click(function(e){
				e.preventDefault();
				$('[name=nama]').val($(this).attr('nama'));
				$('[name=alamat]').val($(this).attr('alamat'));
				$('form').attr('action',$(this).attr('href'));
			})
		});
	}
	function resetData(){
		$('[type=text]').val('');
		$('[name=nama').focus();
		$('form').attr('action','simpan.php');
	}
</script>
</body>
</html>