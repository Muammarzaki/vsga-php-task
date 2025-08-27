<?php ob_start(); ?>
<div class="container my-5">
    <form action="controller/save.php" method="post">
        <fieldset>
            <h5>Form Pemesanan Paket Wisata</h5>
            <div class="mb-3">
                <label for="name-order" class="form-label">Nama Pesanan</label>
                <input type="text" id="name-order" class="form-control" name="name_order">
            </div>
            <div class="mb-3">
                <label for="phone_number" class="form-label">No Hp/Telp</label>
                <input type="text" id="phone_number" class="form-control" name="phone_number">
            </div>
            <div class="mb-3">
                <label for="order-date" class="form-label">Tanggal Pesan</label>
                <input type="date" id="order-date" class="form-control" name="date_order">
            </div>
            <div class="mb-3">
                <label for="days_order" class="form-label">Waktu Pelaksanaan Perjalanan</label>
                <input type="number" id="days_order" class="form-control" name="days_order">
            </div>

            <h5>Pelayanan Paket Perjalanan:</h5>
            <div class="mb-3 w-100 d-flex flex flex-column">
                <div class="justify-content-start">
                    <label for="home-stay" class="form-label ">Penginapan (Rp 1000.000)</label>
                </div>
                <div class="mx-auto">
                    <input type="checkbox" id="home-stay" class="form-check-input" name="accommodation">
                </div>
            </div>
            <div class="mb-3 w-100 d-flex flex flex-column">
                <div class="justify-content-start">
                    <label for="trans-check" class="form-label me-5">Transportasi (Rp 1200.000)</label>
                </div>
                <div class="mx-auto">
                    <input type="checkbox" id="trans-check" class="form-check-input" name="transportation">
                </div>
            </div>
            <div class="mb-3 w-100 d-flex flex flex-column">
                <div class="justify-content-start">
                    <label for="food-check" class="form-label me-5">Service dan Makanan (Rp 500.000)</label>
                </div>
                <div class="mx-auto">
                    <input type="checkbox" id="food-check" class="form-check-input" name="food">
                </div>
            </div>


            <h5>Makanan</h5>
            <div class="mb-3">
                <label for="entry-count" class="form-label">Jumlah Peserta</label>
                <input type="number" id="entry-count" class="form-control" name="entry_count">
            </div>
            <div class="mb-3">
                <label for="pack-price" class="form-label">Harga Paket Perjalanan</label>
                <input type="number" id="pack-price" class="form-control" name="pack_price" readonly>
            </div>
            <div class="mb-3">
                <label for="price-total" class="form-label">Jumlah Tagihan</label>
                <input type="number" id="price-total" class="form-control" name="price_total" readonly>
            </div>
        </fieldset>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<script>
    const accommodation = 1000_000;
    const transportation = 1200_000;
    const food = 500_000;

    let accommodationStatus = false;
    let transportationStatus = false;
    let foodStatus = false;

    function updatePrices() {
        const packageTotal = packetPrice();
        const entryCount = parseInt(document.getElementById('entry-count').value) || 0;

        document.getElementById('pack-price').value = packageTotal;
        document.getElementById('price-total').value = packageTotal * entryCount;
    }

    function packetPrice() {
        let total = 0;

        if (accommodationStatus) {
            total += accommodation;
        }

        if (transportationStatus) {
            total += transportation;
        }

        if (foodStatus) {
            total += food;
        }

        return total;
    }

    document.getElementById('home-stay').addEventListener('change', function () {
        accommodationStatus = this.checked;
        updatePrices();
    });

    document.getElementById('trans-check').addEventListener('change', function () {
        transportationStatus = this.checked;
        updatePrices();
    });

    document.getElementById('food-check').addEventListener('change', function () {
        foodStatus = this.checked;
        updatePrices();
    });

    document.getElementById('entry-count').addEventListener('input', function () {
        updatePrices();
    });

    updatePrices();
</script>
<?php $body = ob_get_clean();
include 'layout.php'; ?>
