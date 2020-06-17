
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  width: 600px;
  margin: auto;
}
</style>
</head>
<body>

<h3 align="center">Form Penilaian Pengajuan</h3>

<div class="container">
    @foreach($data as $masuk)
  <form action="{{ url('yoi').'/'.$masuk->waktu}}" method="POST">
    {{ csrf_field()  }}
  
    <label for="subject" >Kententuan Penilaian</label>
    <textarea disabled id="subject" name="subject" 
    placeholder="Sebagai Berikut

    1
    2
    3
    4
    5" 
    style="height:125px"></textarea>
  
  <label for="country">Permintaan Direksi</label>
    <select id="gie" name="gie[1]">
      <option value="1">1 point</option>
      <option value="2">2 point</option>
      <option value="3">3 point</option>
      <option value="4">5 point</option>
      <option value="5">6 point</option>
    </select>
    
    <label for="country">Security</label>
    <select id="gie" name="gie[2]">
      <option value="1">1 point</option>
      <option value="2">2 point</option>
      <option value="3">3 point</option>
      <option value="4">5 point</option>
      <option value="5">6 point</option>
     </select>

    <label >Pendanaan</label>
    <select id="c" name="gie[3]">
      <option value="1">1 point</option>
      <option value="2">2 point</option>
      <option value="3">3 point</option>
      <option value="4">5 point</option>
      <option value="5">6 point</option>
     </select>

    <label for="country">Pelayanan</label>
    <select id="d" name="gie[4]">
      <option value="1">1 point</option>
      <option value="2">2 point</option>
      <option value="3">3 point</option>
      <option value="4">5 point</option>
      <option value="5">6 point</option>
     </select>

    <label for="country">Tambahan</label>
    <select id="e" name="gie[5]">
      <option value="1">1 point</option>
      <option value="2">2 point</option>
      <option value="3">3 point</option>
      <option value="4">5 point</option>
      <option value="5">6 point</option>
     </select>

     <button type="submit">Proses!</button>
  </form>
  @endforeach
</div>

</body>
</html>
