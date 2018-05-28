<html>
<head>
<title> peminjaman gedung polije </title>
    
    <style>
    /* style yang akan digunakan */
    
   div.ABC {
    width: 100%;
   
    } /* ukuran, border */
    
    header, footer {
        padding: 1em;
        color: Black;
        background-color: #eef1f4;
        clear: left;
        text-align: center;
        border: 3px solid #387dbc;
    }
    /* warna footer dan header tidak ada */
    
    nav{
        float: left;
        max-width: 250px;
        margin: 0;
        padding: 1em;
        background-color: #eef1f4;
        border: 2px solid #387dbc;
    } /* menu akan berada di bagian atas setelah header */
    
    nav ul{
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
    } /* menu akan memiliki bullet dan agak lebar */
    
    nav ul a{
        display: block;
        color: black;
        padding: 16px;
        text-decoration: none;
    } /* jika tak ada maka lisan seperti link dan tak ada line spacing serta ada underline */
    
    nav ul a:hover{
        background-color: #7abce9;
        color: #fffdfd;
    }
    
    article {
        margin-right: 0px;
        border-right: 3px solid black;
        padding:inherit;
    overflow: hidden;
    } /* untuk article penempatannya jika tak ada maka menu sama atikel jadi satu */
    
   
    

    </style>
</head>
    
<body style="background-image: url(img/bg.jpg)">
<div class="ABC">
    <header>
     <h2 style="center"><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/logo-politeknik-negeri-jember.png" width="200" height="200"/>
     SISTEM INFORMASI PEMINJAMAN GEDUNG POLIJE </a></h2>
    </header>
 
        <nav>
        <ul>
            <li><a>MENU</a></li>
            <li><a href="http://localhost/CodeIgniter/menu/diajukan"><img alt="logo" src="<?php echo base_url(); ?>assets/images/office.png" width="40" height="40"/>Pengajuan </a></li>
            <li><a href="http://localhost/CodeIgniter/menu/info"><img src="<?php echo base_url(); ?>assets/images/calendar.png" width="40" height="40"/>Info Jadwal</a></li>
            <li><a href="#">Master Data</a></li>
            <li><a href="<?php echo base_url('/masterDataCR/dataPengguna'); ?>"><img alt="logo" src="office.png" width="20" height="20"/>		Data Pengguna </a></li>
            <li><a href="<img alt="logo" src="calendar.png" />	Data Petugas</a></li>
            <li><a href="#"><img alt="logo" src="office.png" />		Data Gedung </a></li>
            <li><a href="#"><img alt="logo" src="calendar.png" />	Data Fasilitas</a></li>
            <li><a href="CodeIgniter/laporan"><img alt="logo" src="<?php echo base_url(); ?>assets/images/check-mark.png" width="40" height="40" />Laporan</a></li>
         </ul>
       </nav>
