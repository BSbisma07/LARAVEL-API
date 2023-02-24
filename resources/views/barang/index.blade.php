<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
<a href="/create" class="btn btn-primary mt-3">Tambah Barang</a>
<table class="table table-striped table-hover mt-5">
  <thead class="table-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Deskripsi Barang</th>
      <th scope="col">Harga</th>
      <th scope="col">Opsi Barang</th>
    </tr>
  </thead>
  <tbody>
    @php
      $no = 1;
    @endphp

    @foreach($data as $row)
    <tr>      
      <td scope='col'>{{$no++}}</td>
      <td>{{ $row->namaBarang }}</td>
      <td>{{ $row->deskripsiBarang }}</td>
      <td>{{ $row->harga }}</td>
      <td>
        <a href="/edit/{{ $row->id }}" class="btn btn-warning">Edit</a>
        <a href="/hapus/{{ $row->id }}" class="btn btn-warning">Hapus</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>