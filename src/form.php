<?php ob_start(); ?>
<div class="container mt-5">
    <form>
        <fieldset>
            <h5>Form Pemesanan Paket Wisata</h5>
            <div class="mb-3">
                <label for="name-order" class="form-label">Nama Pesanan</label>
                <input type="text" id="name-order" class="form-control" placeholder="Disabled input">
            </div>
            <div class="mb-3">
                <label for="hp-number" class="form-label">No Hp/Telp</label>
                <input type="text" id="hp-number" class="form-control" placeholder="Disabled input">
            </div>
            <div class="mb-3">
                <label for="order-date" class="form-label">Tanggal Pesan</label>
                <input type="date" id="order-date" class="form-control" placeholder="Disabled input">
            </div>
            <div class="mb-3">
                <label for="travel-time" class="form-label">Waktu Pelaksanaan Perjalanan</label>
                <input type="time" id="travel-time" class="form-control" placeholder="Disabled input">
            </div>

            <h5>Pelayanan Paket Perjalanan:</h5>
            <div class="mb-3 w-100 d-flex flex flex-column">
                <div class="justify-content-start">
                    <label for="home-stay" class="form-label ">Penginapan (Rp 1000.000)</label>
                </div>
                <div class="mx-auto">
                    <input type="checkbox" id="home-stay" class="form-check-input" placeholder="Disabled input">
                </div>
            </div>
            <div class="mb-3 w-100 d-flex flex flex-column">
                <div class="justify-content-start">
                    <label for="trans-check" class="form-label me-5">Transportasi (Rp 1200.000)</label>
                </div>
                <div class="mx-auto">
                    <input type="checkbox" id="trans-check" class="form-check-input" placeholder="Disabled input">
                </div>
            </div>
            <div class="mb-3 w-100 d-flex flex flex-column">
                <div class="justify-content-start">
                    <label for="food-check" class="form-label me-5">Service dan Makanan (Rp 500.000)</label>
                </div>
                <div class="mx-auto">
                    <input type="checkbox" id="food-check" class="form-check-input" placeholder="Disabled input">
                </div>
            </div>


            <h5>Makanan</h5>
            <div class="mb-3">
                <label for="entry-count" class="form-label">Jumlah Peserta</label>
                <input type="time" id="entry-count" class="form-control" placeholder="Disabled input">
            </div>
            <div class="mb-3">
                <label for="pack-price" class="form-label">Harga Paket Perjalanan</label>
                <input type="time" id="pack-price" class="form-control" placeholder="Disabled input">
            </div>
            <div class="mb-3">
                <label for="price-total" class="form-label">Jumlah Tagihan</label>
                <input type="time" id="price-total" class="form-control" placeholder="Disabled input">
            </div>
        </fieldset>
    </form>
</div>
<?php $body = ob_get_clean();
include 'layout.php'; ?>
