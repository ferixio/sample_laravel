<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Data Customer

    <form action="/customer" method="POST">
        @csrf
        <div>
            <label for="nama">Nama customer</label>
            <input type="text" name="nama" id="nama">
        </div>
        <div>
            <label for="alamat">Alamat customer</label>
            <input type="text" name="alamat" id="alamat">
        </div>
        <div>
            <label for="telp">Telp customer</label>
            <input type="text" name="telp" id="telp">
        </div>
        <button type="submit">simpan data</button>
    </form>

    @foreach ($data as $customer)
        <div> {{ $customer['nama'] }} # {{ $customer['alamat'] }}</div>
    @endforeach
</body>
</html>
