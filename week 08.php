<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Minggu 08</title>
</head>
<body>

    <div>
        <label>Kuantitas: </label>
        <span id="labelKuantitas">0</span>
    </div>
    
    <br>

    <!-- Tombol untuk Menambah Kuantitas -->
    <button id="btnTambah">Tambah</button>

    <!-- Tombol untuk Mengurangi Kuantitas -->
    <button id="btnRemove">Remove</button>

    <script>
        const labelKuantitas = document.getElementById('labelKuantitas');
        const btnTambah = document.getElementById('btnTambah');
        const btnRemove = document.getElementById('btnRemove');

        // 1. Fungsi Tombol Tambah (Menambahkan kuantitas, tidak menimpa)
        btnTambah.addEventListener('click', function() {
            let nilaiSekarang = parseInt(labelKuantitas.textContent);
            labelKuantitas.textContent = nilaiSekarang + 1;
        });

        // 2. Fungsi Tombol Remove (Mengurangi kuantitas)
        btnRemove.addEventListener('click', function() {
            let nilaiSekarang = parseInt(labelKuantitas.textContent);
            // Mencegah nilai menjadi negatif (opsional, sesuai kebutuhan)
            if (nilaiSekarang > 0) {
                labelKuantitas.textContent = nilaiSekarang - 1;
            }
        });
    </script>

</body>
</html>