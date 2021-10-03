    function Del(name){
		return confirm("Ban co chac chan muon xoa san pham "+ name +" ?");
	}
    function hanghoa(){
        document.getElementById("nd-1").style.display = 'block';
        document.getElementById("nd-2").style.display = 'none';
        document.getElementById("nd-3").style.display = 'none';
    }
    function khachhang(){
        document.getElementById("nd-1").style.display = 'none';
        document.getElementById("nd-2").style.display = 'block';
        document.getElementById("nd-3").style.display = 'none';
    }
    function hoadon(){
        document.getElementById("nd-1").style.display = 'none';
        document.getElementById("nd-2").style.display = 'none';
        document.getElementById("nd-3").style.display = 'block';
    }  