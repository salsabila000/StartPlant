<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/paymen.css">
    <link href="<?php echo base_url()?>assets/img/logo.png" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Pembayaran</title>
</head>
<body>
    <div class="card shadow-sm p-3 mb-5 bg-body rounded tengah" style="width: 50%">
        <div class="pertama ">
            <h2>Pembayaran</h2>
            
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Pilih Pembayaran
                </button>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Pembayaran Via Dana, Gopay, Ovo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    
                    <div class="modal-body">
                        <p> 
                            <h3 class=" harga">jumlah Rp 5000 </h3>
                            <br>Order IDf89c9200-55a8-11ec-aefd-d1d0e2719e7b <br>

                            Cara Pembayaran :
                        
                            <ol>
                                <li>Kirim uang ke nomer Dana 085774564720 sejumlah yang akan dibayarkan </li>
                                <li>Kirim bukti transfer berupa screenshoot ke nomer Whatsapp 0807261675 </li>
                                <li>Klik konfirmasi pembayaran </li>
                                <li>Minta request ke link donwload </li>
                                
                            </ol>

                        </p> 
                        syarat dan ketentuan berlaku 
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <a href="<?php echo base_url().'user/download'?>" class="btn btn-primary">Konfirmasi Pembayaran</a>
                    </div>
                </div>
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>
</html>