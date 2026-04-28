<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PENGUMUMAN KELULUSAN - SMA PGRI 1 SUBANG</title>
<style>
    @page {
        size: A4;
        margin: 0; 
    }

    @media print {
        body { 
            background: none !important; 
            padding: 0 !important; 
            margin: 0 !important; 
        }
        .container-print { 
            box-shadow: none !important; 
            margin: 0 !important; 
            width: 210mm !important; 
            height: 297mm !important; 
            padding: 10mm 20mm !important; 
            overflow: hidden !important; 
            page-break-after: avoid;
        }
        .nav-fixed { display: none !important; }
    }

    body { 
        background-color: #525659; 
        margin: 0; 
        padding: 20px; 
        font-family: "Times New Roman", Times, serif; 
    }
    
    .container-print {
        background-color: white;
        width: 210mm;
        min-height: 297mm;
        margin: 0 auto;
        padding: 15mm 20mm;
        box-sizing: border-box;
        box-shadow: 0 0 10px rgba(0,0,0,0.5);
        position: relative;
    }

    .header-table { width: 100%; border-bottom: 5px double black; margin-bottom: 15px; padding-bottom: 8px; }
    .logo-col { width: 15%; text-align: left; }
    .logo-pgri { width: 85px; height: auto; }
    .text-col { width: 85%; text-align: center; }
    .text-col h4 { margin: 0; font-size: 13pt; font-weight: bold; line-height: 1.2; }
    .text-col h3 { margin: 2px 0; font-size: 17pt; font-weight: bold; }
    .text-col p { margin: 0; font-size: 8.5pt; }

    .nomor-surat { text-align: center; margin: 15px 0; }
    .nomor-surat h2 { text-decoration: underline; margin-bottom: 5px; font-size: 15pt; text-transform: uppercase; }
    .nomor-surat p { margin: 0; font-size: 11pt; }

    .isi-surat { text-align: justify; font-size: 11pt; line-height: 1.3; margin-bottom: 10px; }
    .isi-surat ol { margin-top: 5px; margin-bottom: 5px; padding-left: 25px; }

    .tabel-identitas { width: 100%; margin: 10px 0; font-size: 11pt; border-collapse: collapse; }
    .tabel-identitas td { padding: 3px 0; vertical-align: top; }
    .tabel-identitas td:first-child { width: 30%; }
    .tabel-identitas td:nth-child(2) { width: 3%; text-align: center; }

    .pernyataan-kiri { text-align: left; font-size: 11pt; margin: 15px 0 5px 0; }

    .kotak-hasil {
        border: 3px solid black;
        width: fit-content;
        margin: 10px auto 25px auto;
        padding: 6px 45px;
        font-size: 20pt;
        font-weight: bold;
        text-align: center;
        text-transform: uppercase;
    }

    .wrapper-ttd { width: 100%; margin-top: 10px; }
    .ttd-kanan { float: right; width: 45%; text-align: left; font-size: 11pt; }
    .nama-kepsek { margin-top: 60px; font-weight: bold; text-decoration: underline; }

    .nav-fixed { position: fixed; bottom: 20px; right: 20px; display: flex; gap: 10px; z-index: 9999; }
    .btn-aksi { padding: 12px 24px; border-radius: 30px; border: none; cursor: pointer; font-weight: bold; color: white; text-decoration: none; box-shadow: 0 4px 10px rgba(0,0,0,0.3); }
    .btn-blue { background: #1a73e8; }
    .btn-gray { background: #5f6368; }
</style>

</head>
<body>

<div class="nav-fixed">
    <button onclick="window.print()" class="btn-aksi btn-blue">CETAK SEKARANG</button>
    <a href="<?= base_url('/') ?>" class="btn-aksi btn-gray">KEMBALI</a>
</div>

<div class="container-print">
    <table class="header-table">
        <tr>
            <td class="logo-col">
                <img src="<?= base_url('logo%20pgri.png') ?>" class="logo-pgri">
            </td>
            <td class="text-col">
                <h4>YAYASAN PEMBINA LEMBAGA PENDIDIKAN</h4>
                <h4>PENDIDIKAN DASAR DAN MENENGAH (YPLP DIKDASMEN PGRI)</h4>
                <h3>SMA PGRI 1 SUBANG</h3>
                <p>TERAKREDITASI "A" (AMAT BAIK)</p>
                <p>Jl. Otto Iskandardinata No. 83 Kel. Karanganyar Subang 41211 Website: www.smapgri1subang.com</p>
            </td>
        </tr>
    </table>

    <div class="nomor-surat">
        <h2>PENGUMUMAN KELULUSAN</h2>
        <p>Nomor: 158/SATDIK-SMA / 11.2 / Μ. 2026</p>
    </div>

    <div class="isi-surat">
        Kepala SMA PGRI 1 Subang selaku Ketua Penyelenggara Penilaian Sumatif Akhir Jenjang (PSAJ) Tahun Pelajaran 2025/2026, berdasarkan :
        <ol>
            <li>Ketuntasan dari seluruh program pembelajaran pada kurikulum 2013</li>
            <li>Kriteria kelulusan dari satuan pendidikan sesuai dengan Kurikulum Tingkat Satuan Pendidikan dan Peraturan Perundang-undangan yang berlaku.</li>
            <li>Rapat Pleno Dewan Guru tentang Kelulusan Siswa Siswi SMA PGRI 1 Subang Tahun Pelajaran 2025 - 2026 pada Hari Jumat Tanggal 02 Mei 2026.</li>
        </ol>
        Menerangkan Bahwa :
    </div>

    <table class="tabel-identitas">
        <tr><td>Nama Peserta Didik</td><td>:</td><td><strong><?= strtoupper($siswa['nama_siswa']) ?></strong></td></tr>
        <tr><td>Kelas</td><td>:</td><td>XII MIPA 2</td></tr>
        <tr><td>Tempat dan Tanggal Lahir</td><td>:</td><td>Subang, 16 Januari 2005</td></tr>
        <tr><td>Nama Orang Tua</td><td>:</td><td>Dadan Gunawan</td></tr>
        <tr><td>NISN</td><td>:</td><td><?= $siswa['nisn'] ?></td></tr>
        <tr><td>Peminatan</td><td>:</td><td>Matematika</td></tr>
    </table>

    <div class="pernyataan-kiri">
        Dengan ini siswa yang bersangkutan dinyatakan :
    </div>

    <div class="kotak-hasil">
        <?= strtoupper($siswa['status_kelulusan']) ?>
    </div>

    <div class="isi-surat">
        Demikian Pengumuman Kelulusan ini kami sampaikan, atas segala perhatian kami ucapkan terima kasih.
    </div>

    <div class="wrapper-ttd">
        <div class="ttd-kiri">.</div>
        <div class="ttd-kanan">
            <p>Subang, 05 Mei 2026</p>
            <p>Kepala SMA PGRI 1 Subang,</p>
            
            <p class="nama-kepsek">Drs. H. Asep Kahlan Husen, M.MPd.</p>
            <p>NIP. 19680111 199403 1 006</p>
        </div>
        <div style="clear: both;"></div>
    </div>
</div>

</body>
</html>