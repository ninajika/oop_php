<?php

class Produk {
    private $id;
    private $name;
    private $harga;
    private $deskripsi;

    public function __construct($id, $name, $harga, $deskripsi) {
        $this->id = $id;
        $this->name = $name;
        $this->harga = $harga;
        $this->deskripsi = $deskripsi;
    }

    public function tampilkan() {
        echo "<h2>{$this->name}</h2>";
        echo "<p>{$this->deskripsi}</p>";
        echo "<p>Harga: Rp{$this->harga}</p>";
    }
}

class keranjang {
    private $items = [];

    public function tambahProduk(Produk $produk, $jumlah) {
        $this->items[] = [ 'produk' => $produk, 'jumlah' => $jumlah ];
    }

    public function tampilkan() {
        foreach ($this->items as $item) {
            $item['produk']->tampilkan();
            echo "<p>Jumlah: {$item['jumlah']}</p>";
            echo "<hr>";
        }
    }
}

$produk1 = new Produk(1, 'kemeja', 150000, 'Kemeja lengan panjang dengan motif kotak-kotak.');
$produk2 = new Produk(2, 'Celana Jeans', 250000, 'Celana jeans slim fit dengan bahan denim berkualitas');

$keranjang = new Keranjang();
$keranjang->tambahProduk($produk1, 2);
$keranjang->tambahProduk($produk2, 1);

$keranjang->tampilkan();
?>