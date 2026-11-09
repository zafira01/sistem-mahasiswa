<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Mahasiswa</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #0f172a;
            color: #f8fafc;
        }

        nav {
            background: #111c32;
            padding: 20px 7%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #334155;
        }

        nav h2 {
            margin: 0;
            color: #38bdf8;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
        }

        .container {
            max-width: 1100px;
            margin: 35px auto;
            padding: 0 20px;
        }

        .card {
            background: #1e293b;
            border: 1px solid #334155;
            border-radius: 16px;
            padding: 25px;
            margin-bottom: 25px;
        }

        h1, h3 {
            margin-top: 0;
        }

        h1 {
            color: #38bdf8;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #cbd5e1;
        }

        input, select, textarea {
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #475569;
            background: #0f172a;
            color: white;
        }

        textarea {
            resize: vertical;
        }

        .full {
            grid-column: 1 / -1;
        }

        button {
            background: #0284c7;
            color: white;
            border: 0;
            padding: 12px 22px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
        }

        button:hover {
            background: #0369a1;
        }

        .success {
            padding: 12px;
            border-radius: 8px;
            background: #14532d;
            margin-bottom: 18px;
        }

        .error {
            color: #fca5a5;
            font-size: 13px;
            margin-top: 5px;
        }

        .table-wrap {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 700px;
        }

        th, td {
            text-align: left;
            padding: 13px;
            border-bottom: 1px solid #334155;
        }

        th {
            color: #38bdf8;
            background: #162238;
        }

        @media (max-width: 650px) {
            .form-grid {
                grid-template-columns: 1fr;
            }

            .full {
                grid-column: auto;
            }

            nav {
                padding: 18px;
            }
        }
    </style>
</head>

<body>

<nav>
    <h2>SIMA.</h2>
    <div>
        <a href="#beranda">Beranda</a>
        <a href="#form">Tambah Data</a>
        <a href="#data">Data Mahasiswa</a>
    </div>
</nav>

<div class="container" id="beranda">

    <h1>Sistem Informasi Mahasiswa</h1>
    <p>Kelola data mahasiswa dengan mudah dan rapi.</p>

    <section class="card" id="form">
        <h3>Formulir Mahasiswa</h3>

        @if (session('success'))
            <div class="success">{{ session('success') }}</div>
        @endif

        @if ($errors->any())
            <div class="success" style="background:#7f1d1d">
                Periksa kembali data yang diisi.
            </div>
        @endif

        <form action="{{ url('/mahasiswa') }}" method="POST">
            @csrf

            <div class="form-grid">
                <div>
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama"
                        value="{{ old('nama') }}"
                        placeholder="Masukkan nama lengkap" required>
                    @error('nama')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label>NPM</label>
                    <input type="text" name="npm"
                        value="{{ old('npm') }}"
                        placeholder="Masukkan NPM" required>
                    @error('npm')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label>Jenis Kelamin</label>
                    <select name="jenis_kelamin" required>
                        <option value="">Pilih jenis kelamin</option>
                        <option value="Perempuan"
                            {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>
                            Perempuan
                        </option>
                        <option value="Laki-laki"
                            {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>
                            Laki-laki
                        </option>
                    </select>
                    @error('jenis_kelamin')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label>Tanggal Pengisian</label>
                    <input type="text" id="tanggal" readonly>
                </div>

                <div class="full">
                    <label>Alamat</label>
                    <textarea name="alamat" rows="3"
                        placeholder="Masukkan alamat lengkap"
                        required>{{ old('alamat') }}</textarea>
                    @error('alamat')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="full">
                    <button type="submit">Simpan Data Mahasiswa</button>
                </div>
            </div>
        </form>
    </section>

    <section class="card" id="data">
        <h3>Daftar Mahasiswa</h3>

        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>NPM</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Tanggal Pengisian</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($mahasiswas as $mahasiswa)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $mahasiswa->nama }}</td>
                            <td>{{ $mahasiswa->npm }}</td>
                            <td>{{ $mahasiswa->jenis_kelamin }}</td>
                            <td>{{ $mahasiswa->alamat }}</td>
                            <td>
                                {{ $mahasiswa->created_at
                                    ->timezone('Asia/Jakarta')
                                    ->locale('id')
                                    ->translatedFormat('l, d F Y H:i') }}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">
                                Belum ada data mahasiswa. Silakan isi formulir.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>
</div>

<script>
    function tampilkanTanggal() {
        const sekarang = new Date();

        document.getElementById('tanggal').value =
            new Intl.DateTimeFormat('id-ID', {
                timeZone: 'Asia/Jakarta',
                weekday: 'long',
                day: '2-digit',
                month: 'long',
                year: 'numeric',
                hour: '2-digit',
                minute: '2-digit',
                hour12: false
            }).format(sekarang);
    }

    tampilkanTanggal();
</script>

</body>
</html>