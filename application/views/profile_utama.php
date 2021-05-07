<div style="background-color:#8cc454;height: 80px"></div>
<div>
    <div class="col-sm-3" style="background-color: ;float: left;padding-top: 1%"> 
        <div style="background-color: #76C7EF;height: 150px;position: relative;border-top-right-radius: 20px;border-top-left-radius: 20px">

            <center>
               <div style="margin-top: 10%;position: absolute;left: 30%;bottom: -100">
                    <p style="font-family: Poppins-Regular;color: #FFF;font-size: 12pt"><?php echo $_SESSION['nama_lengkap'] ?></p>
                    <div style="display: flex;width: 150px;height: 150px;background-color: #FFF;border-radius: 75px;justify-content: center;align-items: center;">
                        <i class="fa fa-user fa-3x"></i>
                    </div>
               </div>
            </center>


            
        </div>
        <div style="height: 100px"></div>
        <div>
            <div class="row">
                <div class="col-sm-6" style="border-right: 1px solid #EEEEEE">
                    <center>
                        <p style="font-family: Poppins-SemiBold;color: #000;">10 ORDER</p>
                    </center>
                    <a href="#" class="badge badge-success">8 SELESAI</a>
                     <a href="#" class="badge badge-secondary">2 ON PROGRESS</a>
                </div>
                <div class="col-sm-6" style="border-right: 1px solid #EEEEEE"   >
                         <center><p style="font-family: Poppins-SemiBold;color: #000;">PEMBAYARAN</p>
                    </center>
                    <a href="#" class="badge badge-success">9 LUNAS</a><br/>
                     <a href="#" class="badge badge-danger">1 TERTUNDA</a>
                </div>
              
               <div class="col-sm-12" style="border-right: 1px solid #EEEEEE;margin-top: 2%" >
                         <center><p style="font-family: Poppins-SemiBold;color: #000;">KELENGKAPAN PROFILE</p>
                    </center>
                   <div class="progress">
                      <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%
                      </div>
                    </div>
                </div>
              
            </div>
        </div>
        <table class="table" style="margin-top: 2%">
            <tr>
                <td>
                    <p style="font-family: Poppins-Regular;color: #000;">Data Customer</p>
                </td>
                <td>
                    <a href="" class="btn btn-success">Lengkapi Profile Anda</a>
                </td>
            </tr>
        </table>
        
        <?php 

        // print_r($_SESSION);

        ?>
        <div>
            <label style="font-family: Poppins-SemiBold;color: #000;font-size: 12pt">Nama Lengkap</label>
             <p style="font-family: Poppins-Regular;color: #000;font-size: 12pt"><?php echo $_SESSION['nama_lengkap'] ?></p>
        </div>
         <div>
            <label style="font-family: Poppins-SemiBold;color: #000;font-size: 12pt">Alamat Email</label>
             <p style="font-family: Poppins-Regular;color: #000;"><?php echo $_SESSION['email'] ?></p>
        </div>
         <div>
            <label style="font-family: Poppins-SemiBold;color: #000;font-size: 12pt">No WhatsApp</label>
             <p style="font-family: Poppins-Regular;color: #000;"><?php echo $_SESSION['telepon'] ?></p>
        </div>
         <div>
            <label style="font-family: Poppins-SemiBold;color: #000;font-size: 12pt">Alamat Pengiriman</label>
             <p style="font-family: Poppins-Regular;color: #000;"><?php echo $_SESSION['alamat'] ?></p>
        </div>
        <div>
            <label style="font-family: Poppins-SemiBold;color: #000;font-size: 12pt">Provisnsi</label>
             <p style="font-family: Poppins-Regular;color: #000;">Jawa Barat</p>
        </div>
        <div>
            <label style="font-family: Poppins-SemiBold;color: #000;font-size: 12pt">Kota/Kabupaten</label>
             <p style="font-family: Poppins-Regular;color: #000;">Bandung</p>
        </div>
         <div>
            <label style="font-family: Poppins-SemiBold;color: #000;font-size: 12pt">Kode POS</label>
             <p style="font-family: Poppins-Regular;color: #000;">40294</p>
        </div>
          <div>
            <label style="font-family: Poppins-SemiBold;color: #000;font-size: 12pt">Tanggal Lahir</label>
             <p style="font-family: Poppins-Regular;color: #000;">15 November 1995</p>
        </div>
         <div>
            <label style="font-family: Poppins-SemiBold;color: #000;font-size: 12pt">Jenis Kelamin</label>
             <p style="font-family: Poppins-Regular;color: #000;">Laki - laki</p>
        </div>
       
    </div>