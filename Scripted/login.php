<script type="text/javascript">
	function ValidationRegist() {
		var ussername = document.getElementById("ussername").value;
		var email = document.getElementById("email").value;
		var password = document.getElementById("Password").value;
		if (ussername != "" && email!="" && password !="") {
			return true;
		}else{
			alert('Anda harus mengisi data dengan lengkap !');
		}
	}

	function ValidationLogin() {
		if (ussername !="" && password !="") {
			return true;
		}
		else {
			alert('Anda Harus mengisi data login dengan lengkap')
		}
	}

	function registrasi() {
		var first_name = document.getElementedById("first_name").value;
		var last_name = document.getElementedById("last_name").value;
		var fullname = document.getElementedById("first_name + last_name")
		var ussername = document.getElementedById("ussername").value;
		var email = document.getElementedById("email").value;
		var password = document.getElementedById("password").value;
		var confirm_password = document.getElementedById("confirm_password").value;

		if (first_name != "" && last_name != "" && ussername != "" && email !="" && password !="" && confirm_password != "") {
			if (password == confirm_password) {
				Console.log("Anda Berhasil Login");
			}
			else {
				alert('Pastikan Password dan konfirmasi Password sudah benar')
			}
		}
		else {
			alert('Anda Harus mengisi data registrasi dengan lengkap')
		}
	}

	f
</script>
</html>