<?php
class ATM 
{
    private $saldo;
    
    public function __construct($saldoAwal)
    {
        $this->saldo = $saldoAwal;
    }

    public function cekSaldo()
    {
        echo "Saldo saat ini: Rp " . number_format($this->saldo, 0, ',', '.') . PHP_EOL;
    }

    public function tarikTunai($jumlah)
    {
        if($jumlah <= 0) {
            echo "Jumlah penarikan tidak valid" . PHP_EOL;
            return;
        }

        if ($jumlah > $this->saldo) {
            echo "Saldo tidak mencukupi" . PHP_EOL;
            return;
        }

        $this->saldo -= $jumlah;
        echo "Penarikan tunai berhasil. Saldo Anda Sekarang: Rp " . number_format($this->saldo, 0, ',', '.') . PHP_EOL;
    }

    public function setorTunai($jumlah) 
    {
        if ($jumlah <= 0) {
            echo "Jumlah penyetoran tidak valid" . PHP_EOL;
            return;
        }

        $this->saldo += $jumlah;
        echo "Setoran tunai berhasil. Saldo Anda Sekarang: Rp " . number_format($this->saldo, 0, ',', '.') . PHP_EOL;
    }
}

$atm = new Atm(1000000);

$atm->cekSaldo();

$atm->tarikTunai(500000);
$atm->cekSaldo();

$atm->setorTunai(200000);
$atm->cekSaldo();

$atm->setorTunai(1000000);
$atm->cekSaldo();
?>