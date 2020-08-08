<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/Mysite" method="post">
        @csrf
        <br><input type="text" placeholder="nama" name="nama">
        <br><input type="text" placeholder="nisn" name="nisn">
        <br><input type="text" placeholder="email_user" name="email_user" value="{{Auth::user()->email}}" readonly>
        <br><input type="text" placeholder="alamat_tinggal" name="alamat_tinggal">
        <br><input type="text" placeholder="no_hp" name="no_hp">
        <br><input type="text" placeholder="nama_orang_tua" name="nama_orang_tua">
        <br><input type="text" placeholder="jurusan" name="jurusan">
        <br><input type="text" placeholder="tampat_pkl" name="tampat_pkl">
        <br><input type="text" placeholder="lama_pkl" name="lama_pkl">
        <button type="submit">kirim data</button>
    </form>
</body>
</html>
