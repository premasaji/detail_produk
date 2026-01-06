<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>My Orders | Phyto Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/detail_produk.css">
</head>
<body>

<div class="app">

    <?php include 'partials/sidebar.php'; ?>

    <main class="main-content">

        <!-- PRODUCT CARD -->
        <section class="product-card">
            <img src="assets/img/giant-white.png" alt="Plant">

            <div class="product-detail">
                <h2>Giant White</h2>
                <p class="stars">★★★★★ <span>(76)</span></p>
                <p class="price">Rp. 46 k</p>

                <div class="quantity">
                    <button>-</button>
                    <span>1</span>
                    <button>+</button>
                </div>

                <div class="buttons">
                    <button class="cart">add to cart</button>
                    <button class="buy">Buy Now</button>
                </div>
            </div>
        </section>

        <!-- DESCRIPTION -->
        <section class="box">
            <h3>Deskripsi Produk</h3>
        </section>

        <!-- REVIEW -->
        <section class="box">
            <h3>Penilaian Produk</h3>

            <div class="review-wrapper">
                <div class="rating-left">
                    <div>★★★★★ <span>108</span></div>
                    <div>★★★★☆ <span>15</span></div>
                    <div>★★★☆☆ <span>5</span></div>
                    <div>★★☆☆☆ <span>2</span></div>
                    <div>★☆☆☆☆ <span>1</span></div>
                </div>

                <div class="rating-right">
                    <div class="comment">
                        <div class="comment-head">
                            <strong>user name</strong>
                            <small>28 Desember 2025</small>
                        </div>
                        <div class="stars">★★★★★</div>
                        <p>
                            Barang sudah sampai dengan baik.
                            Pengemasan aman dan pengiriman lumayan cepat.
                            Terima kasih.
                        </p>
                    </div>

                    <div class="comment">
                        <div class="comment-head">
                            <strong>user name</strong>
                            <small>28 Desember 2025</small>
                        </div>
                        <div class="stars">★★★★★</div>
                        <p>
                            Barang sudah sampai dengan baik.
                            Pengemasan aman dan pengiriman lumayan cepat.
                            Terima kasih.
                        </p>
                    </div>
                </div>
            </div>
        </section>

    </main>
</div>

</body>
</html>
