<div class="container">
  <h2>Data Mahasiswa</h2>
  <table class="table">
      <thead>
          <tr>
              <th>No</th>
              <th>Nama Lengkap</th>
              <th>Mata Kuliah</th>
              <th>UTS</th>
              <th>UAS</th>
              <th>Tugas</th>
              <th>Rerata</th>
              <th>Grade</th>
              <th>Predikat</th>
              <th>Keterangan</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td>1</td>
              <td>Dapz</td>
              <td>Statistika dan Probabilitas</td>
              <td>80</td>
              <td>90</td>
              <td>90</td>
              <td>86.66</td>
              <td>A</td>
              <td>Sangat Memuaskan</td>
              <td>Lulus</td>
          </tr>
          <tr>
              <td>2</td>
              <td>Yanz</td>
              <td>Statistika dan Probabilitas</td>
              <td>90</td>
              <td>90</td>
              <td>90</td>
              <td>90.00</td>
              <td>A</td>
              <td>Sangat Memuaskan</td>
              <td>Lulus</td>
          </tr>

          <?php
					/**
					* Task 3
					* 1. Import libfungsi.php
					* 2. Tampilkan data dalam bentuk table
					* 3. Berikan error handling untuk mengatasi ketika form belum disubmit
					* Note: Sesuaikan dengan isi table yang sudah ada						
					*/

          // Import libfungsi.php
          require_once 'libfungsi.php';

          // Error handling untuk form belum disubmit
          if (isset($_POST['submit'])) {
            // Ambil data dari formulir
            $nama_lengkap = $_POST['nama_lengkap'];
            $matkul = $_POST['matkul'];
            $nilai_uts = $_POST['nilai_uts'];
            $nilai_uas = $_POST['nilai_uas'];
            $nilai_tugas = $_POST['nilai_tugas']; 

            // Hitung rerata dan grada
            $rerata = hiyungRerata($nilai_uts, $nilai_uas, $nilai_tugas);
            $grada = tentukanGrada($rerata);

            // Tampilkan data dalam bentuk tabel
            echo "<tr>";
            echo "<td>-</td>";
            echo "<td>$nama_lengkap</td>";
            echo "<td>$matkul</td>";
            echo "<td>$nilai_uts</td>";
            echo "<td>$nilai_uas</td>";
            echo "<td>$nilai_tugas</td>";
            echo "<td>$rerata</td>";
            echo "<td>$grade</td>";
            echo "<td>" . tentukanPredikat($grade) . "</td>";
            echo "<td>" . tentukanKetrangan($grade) . "</td>";
            echo "</tr>";
          }
          ?>
      </tbody>
  </table>
</div>