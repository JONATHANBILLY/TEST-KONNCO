<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Serba Ada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="my-3">Invoice</h1>
        <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Detail Pesanan</h5>
            <table>
                 <tr>
                    <td>ID</td>
                    <td> : {{$order->id}}</td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td> : {{$order->name}}</td>
                </tr>
                <tr>
                    <td>No Hp</td>
                    <td> : {{$order->phone}}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td> : {{$order->address}}</td>
                </tr>
                <tr>
                    <td>Quantity</td>
                    <td> : {{ number_format($order->qty, 0, ',', '.') }}</td>
                </tr>
                <tr>
                    <td>Total Harga</td>
                    <td> : : Rp. {{ number_format($order->total_price, 0, ',', '.') }}</td>
                </tr>
            </table>
            <form>
                <button type="reset" onclick="location.href='/'">Kembali Ke Halaman Utama</button>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Serba Ada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="my-3">Invoice</h1>
        <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Detail Pesanan</h5>
            <table>
                 <tr>
                    <td>ID</td>
                    <td> : {{$order->id}}</td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td> : {{$order->name}}</td>
                </tr>
                <tr>
                    <td>No Hp</td>
                    <td> : {{$order->phone}}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td> : {{$order->address}}</td>
                </tr>
                <tr>
                    <td>Quantity</td>
                    <td> : {{ number_format($order->qty, 0, ',', '.') }}</td>
                </tr>
                <tr>
                    <td>Total Harga</td>
                    <td> : : Rp. {{ number_format($order->total_price, 0, ',', '.') }}</td>
                </tr>
            </table>
            <form>
                <button type="reset" onclick="location.href='/'">Kembali Ke Halaman Utama</button>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>