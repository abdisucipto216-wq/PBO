<?php

class Produk {

//Property
public string $kode;
public string $nama;
public float $harga;
public int $stok;

//Constant
public const PAJAK = 0.11;  

public function pajak(){
    return self ::PAJAK * 100;
}
public function total(){
    return $this->harga + ($this->harga * self::PAJAK);
}
}
    
//object
$produk = new produk();

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
