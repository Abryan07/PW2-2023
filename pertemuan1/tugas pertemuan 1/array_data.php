<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Tabel Aneka Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>Id</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
         <?php

            $Fruits = [
                [
                      "Id" => 1,
                      "Nama" => 'Salak',
                      "Warna" => 'Coklat',
                      "Stok"  => 100,
                      "Harga" => 15000,
                      "Deskripsi" => 'Salak adalah buah tropis yang juga dikenal dengan nama snake fruit. Buah ini memiliki kulit berwarna cokelat dan berbintik-bintik, yang menyerupai kulit ular, dan biasanya dikupas sebelum dimakan. Daging buah salak berwarna putih, renyah, dan memiliki rasa manis serta asam yang khas. Salak kaya akan vitamin C, serat, dan mineral seperti kalium dan besi. Buah ini bisa dimakan segar, dijadikan bahan olahan, atau diolah menjadi minuman.'
                ],
                [
                    "Id" => 2,
                    "Nama" => 'Anggur',
                    "Warna" => 'Unggu',
                    "Stok"  => 100,
                    "Harga" => 50000,
                    "Deskripsi" => 'Buah anggur adalah buah yang tumbuh dalam kelompok-kelompok besar, biasanya berwarna hijau atau ungu tergantung pada varietasnya. Anggur biasanya dikonsumsi segar, dimakan sebagai buah, atau digunakan untuk membuat minuman anggur dan jus.',
                ],
                [
                    "Id" => 3,
                    "Nama" => 'Stroberi',
                    "Warna" => 'Merah',
                    "Stok"  => 100,
                    "Harga" => 40000,
                    "Deskripsi" => 'Buah stroberi adalah buah kecil, bulat, dan berwarna merah cerah. Rasanya manis dengan sedikit keasaman. Stroberi sering dimakan segar atau diolah menjadi berbagai produk makanan, seperti selai dan es krim. Buah stroberi mengandung vitamin C, serat, dan antioksidan.',
                ],
                [
                  "Id" => 4,
                  "Nama" => 'Pisang',
                  "Warna" => 'Kuning',
                  "Stok"  => 100,
                  "Harga" => 20000,
                  "Deskripsi" => 'Buah Pisang adalah buah berkulit kuning atau hijau yang tumbuh dalam tandan besar. Buah ini manis, lunak, dan kaya akan gula alami, serta mengandung vitamin dan mineral penting seperti vitamin C, vitamin B6, kalium, dan magnesium.',
              ],
              [
                "Id" => 5,
                "Nama" => 'Nanas',
                "Warna" => 'Kuning',
                "Stok"  => 100,
                "Harga" => 15000,
                "Deskripsi" => 'Buah nanas adalah buah tropis yang tumbuh di tanaman nanas. Bentuknya mirip buah berlapis yang dikelilingi oleh daun berbentuk segitiga dengan kulit tebal dan berduri. Daging buah nanas adalah kuning keemasan, sangat manis, dan memiliki aroma yang khas. Buah nanas kaya akan vitamin C dan mangan, serta mengandung enzim bromelin yang dapat membantu dalam pencernaan.',
            ],
            ];
  
            foreach ($Fruits as $fruit) {
                echo "<tr>";
                   echo "<td>" . $fruit['Id'] . "</td>"; 
                   echo "<td>" . $fruit['Nama'] . "</td>"; 
                   echo "<td>" .  $fruit['Warna'] . "</td>"; 
                   echo  "<td>" . $fruit['Stok'] . "</td>"; 
                   echo  "<td>" . $fruit['Harga'] . "</td>"; 
                   echo "<td>" . $fruit['Deskripsi']. "</td>";
                   
                echo "</tr>";
            }   
            
        ?>  
      </tbody>
    </table>
  </div>
</body>
</html>