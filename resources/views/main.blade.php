<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Submission 1 Dicoding Azure</title>
</head>
<body>
  <h1>Daftar Disini !</h1>
  <div>Masukan data yang diperlukan</div>
  <br>
  <form name="pengguna" method="post" onsubmit="return validateForm()" action="{{ url('/store') }}">
    @csrf
    Nama : <input type="text" name="nama"> <br> <br>
    Email : <input type="email" name="email"> <br> <br>
    Pekerjaan : <input type="text" name="pekerjaan"> <br> <br>
    <input type="submit" value="Kirim">
  </form>
  <br>
  <table width="60%">
    <thead>
      <tr align="left">
        <th>ID</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Pekerjaan</th>
        <th>Tanggal Daftar</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $item)
      <tr align="left">
        <td>{{ $item->id }}</td>
        <td>{{ $item->nama }}</td>
        <td>{{ $item->email }}</td>
        <td>{{ $item->pekerjaan }}</td>
        <td>{{ $item->created_at }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <script>
    function validateForm() {
      var x = document.forms['pengguna']['nama'].value
      var y = document.forms['pengguna']['email'].value
      var z = document.forms['pengguna']['pekerjaan'].value
      if (x == '' || y == '' || z == '') {
        alert("Lengkapi form terlebih dahulu")
        return false
      }
    }
  </script>
</body>
</html>