<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Tutorial Belajar JavaScript</title>
<script>
function tampilkan(){
  var id_user=document.getElementById("form1").kategori.value;
  if (id_user=="ID-100")
    {
        document.getElementById("tunai").value = '350000';
       
    }
  else if (id_user=="ID-200")
    {
       document.getElementById("tunai").value = '350000';
     
    }
	else
    {
       document.getElementById("tunai").value = '375000';
     
    }
}
</script>
</head>
<body>
<h2>Suckittrees.com</h2>
<form id="form1" name="form1" onsubmit="return false">
  <label>Pilih Kategori: </label>
  <select id="kategori" name="kategori" onchange="tampilkan()">
    <option value='0' disabled="disabled" selected/>Pilih</option>
    <option value="ID-100">TK</option>
    <option value="ID-200">SD</option>
    <option value="ID-300">SMP</option>
    <option value="ID-400">SMA</option>
  </select>
  <br/><br/>
   <label>tunai : </label> <input type='text' id="tunai" name="tunai"><br/><br/>
   
</form>

</body>
</html>