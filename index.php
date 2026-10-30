<?php

//panggil file propetyconstant
require('./property-constant.php');

use Pbo\Marketplace\produk;

//object
$produk = new produk('P0001','laptop',1000000,5);

$produk->kode = 'P0001';
$produk->nama = 'laptop';
$produk->harga = 10000000;
$produk->stok = 5;


//hasil
echo "Produk: ", $produk->nama;
echo "<br/>";
echo "Harga: ", $produk->harga;
echo "<br/>";
echo "Stok: ", $produk->stok;
echo "<br/>";
echo "Pajak: ", $produk->pajak()."%";
echo "<br/>";
echo "<br/>";
echo "Total Harga Setelah Pajak: Rp.", $produk->total();
