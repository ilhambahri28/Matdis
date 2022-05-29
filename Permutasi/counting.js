$('#hitung').on('click', function(){
    		var n = $('#n').val();
			var r = $('#r').val();
			const pilihan = $('#pilihan').val();
			const pengulangan = $('#pengulangan').val();

    		var hasil = "";

	function faktorial(a) {
	  if (a < 0) 
			return -1;
	  else if (a == 0) 
		  return 1;
	  else {
		  return (a * faktorial(a - 1));
	  }
	}

    		if (pilihan != "") {
    			n = parseFloat(n);
				r = parseFloat(r);
				if (pilihan == "kombinasi") {
					if (pengulangan == tanpa){					
					hasil = faktorial(n) / faktorial(r) * faktorial(n - r);
					}
					else {
					hasil = faktorial(n + r - 1) / faktorial(r) * faktorial(n - 1);					
					}
					
				}else if(pilihan == "permutasi") {
					if (pengulangan == tanpa){					
					hasil = faktorial(n) / (faktorial( n - r ));
					}
					else {
					hasil = Math.pow(n,r);					
					}
				}
				document.getElementById("thasil").innerHTML="Jika n = " + n + " dan r = " + r + ", Maka hasil dari " + pilihan + " adalah :" + hasil;
			}
    	});