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
        <h1 class="my-3">Toko Serba Ada</h1>
        <div class="card" style="width: 18rem;">
        <img src="{{asset('assets/img/porsche.png')}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Porsche 911</h5>
            <p class="card-text">Porsche 911 Irish Green Rp.100,000 per pcs</p>
            <form action="/checkout" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="qty" class="form-label">Jumlah Pesanan</label>
                    <input type="number" min="0" value="0" name="qty" class="form-control" id="qty" placeholder="Jumlah yang dipesan">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Pelanggan</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Masukkan nama pelanggan">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Nomor Telepon</label>
                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Masukkan no telepon">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Alamat</label>
                    <textarea name="address" id="address" class="form-control" rows="3" placeholder="Alamat pengiriman/Alamat rumah"></textarea>
                </div>
                <button type="submit" class="btn btn-primary" oninput="validateQTY()">Checkout</button>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>