<?php
     abstract class pegawai {
        public $no;
        public $nama;
        public $tempat_tanggal;
        public $jenis_kelamin;
        public $level;
        public $status;
        public $gaji;
    

    abstract public function get_name();
    abstract public function set_name($nama);

    }

    class parttime extends pegawai{
        public $status = "parttime";

        public function get_name(){
            return $this->nama;
        }

        public function set_name($nama){
            $this->nama = $nama;
        }

        function __construct($no, $nama, $tempat_tanggal, $jenis_kelamin, $level){
            $this->no = $no;
            $this->nama = $nama;
            $this->tempat_tanggal = $tempat_tanggal;
            $this->jenis_kelamin = $jenis_kelamin;
            $this->level = $level;

            if($this->level == "Junior"){
                $this->gaji = 2000000/2;
            }
            elseif($this->level == "Amature"){
                $this->gaji =  3500000/2;
            }
            else{
                $this->gaji = 5000000/2;
            }
        }
    }

    class fulltime extends pegawai{
        public $status = "fulltime";

        public function get_name(){
            return $this->nama;
        }

        public function set_name($nama){
            $this->nama = $nama;
        }

        function __construct($no, $nama, $tempat_tanggal, $jenis_kelamin, $level){
            $this->no = $no;
            $this->nama = $nama;
            $this->tempat_tanggal = $tempat_tanggal;
            $this->jenis_kelamin = $jenis_kelamin;
            $this->level = $level;

            if($this->level == "Junior"){
                $this->gaji = 2000000;
            }
            elseif($this->level == "Amature"){
                $this->gaji =  3500000;
            }
            else{
                $this->gaji = 5000000;
            }
        }

        


    }
    
    $arr = array();
    $arr[0] = $pegawai1 = new fulltime(1, "Anca", "Makassar 20, Januari 2001", "Laki-Laki", "Senior");
    $arr[1] = $pegawai2 = new fulltime(2, "Wayyu", "Bantaeng 26, Maret 2000", "Perempuan", "Junior");
    $arr[2] = $pegawai3 = new parttime(3, "Ikbal", "Sinjai 5, Mei 1999", "Laki-Laki", "Senior");
    $arr[3] = $pegawai4 = new parttime(4, "Tina", "Bone 23, Juni 1997", "Perempuan", "Junior");
    $arr[4] = $pegawai5 = new fulltime(5, "Andi", "Pinrang 1, Agustus 1998", "Laki-Laki", "Amature");  

?>
<!DOCTYPE html>
<html style="background-color:#191970;">
  <head>
    <style>
      * {
        font-family: sans-serif;
        color: white;
      }
    </style>
  </head>
  <body>
    <h2 style="text-align:center; margin-top : 80px;">Daftar Pegawai</h2>
    <h5 style="text-align:center; margin-top :">
      <label for="status">Filter Status:</label>
      <select style=" background-color:#222222; Color:#FFFFFF " name="status" id="status">
        <option value="all">all</option>
        <option value="parttime">parttime</option>
        <option value="fulltime">fulltime</option>
      </select>
    </h5>
    <br>
    <table class="tabel" border='1' style="border-radius:1px; margin-left: auto; margin-right: auto; margin-top :5px;">
      <tr>
        <td style="text-align:center; ">No</td>
        <td style="text-align:center; ">Nama</td>
        <td style="text-align:center;">Tempat Tanggal Lahir</td>
        <td style="text-align:center; ">Jenis Kelamin</td>
        <td style="text-align:center; ">Level</td>
        <td style="text-align:center; ">Status</td>
        <td style="text-align:center; ">Gaji</td>
      </tr> <?php for ($i=0; $i < 5; $i++) { ?> <tr>
        <td> <?php echo $arr[$i]->no; ?> </td>
        <td> <?php echo $arr[$i]->nama; ?> </td>
        <td> <?php echo $arr[$i]->tempat_tanggal; ?> </td>
        <td> <?php echo $arr[$i]->jenis_kelamin; ?> </td>
        <td> <?php echo $arr[$i]->level ?> </td>
        <td> <?php echo $arr[$i]->status; ?> </td>
        <td> <?php echo $arr[$i]->gaji; ?> </td>
      </tr> <?php } ?>
    </table>
    <h5 style="text-align:center; margin-top : 5px;">Nama: Tegar Alfalakh Thamrin <br>NIM: 105219025 </h5>
  </body>
</html>