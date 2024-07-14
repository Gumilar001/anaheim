<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/laporan.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <title>Laporan</title>
</head>
<body>
    <div class="sidebar">
        <div class="user-info">
            <div class="avatar"></div>
            <p><div class="Auth">{{ Auth::user()->name }}</div></p>
        </div>
        <div class="menu">
            @if(auth()->user()->role =='super_admin')         
        <div class="menu">
            <a href="/dashboard"><i class="bx bx-home"></i> Home</a>
            <a href="/pencatatan"><i class="bx bx-book"></i> Pencatatan</a>
            <a href="/laporan"><i class="bx bx-line-chart"></i> Laporan</a>
            <a href="/tambahAkun"><i class="bx bx-user-plus"></i> Tambah Akun</a>
        </div>         
        @elseif(auth()->user()->role == 'admin')
        <div class="menu">
            <a href="/dashboard"><i class="bx bx-home"></i> Home</a>
            <a href="/pencatatan"><i class="bx bx-book"></i> Pencatatan</a>
            <a href="/laporan"><i class="bx bx-line-chart"></i> Laporan</a>
        </div> 
        @elseif(auth()->user()->role=='executive')
        <div class="menu">
            <a href="/dashboard"><i class="bx bx-home"></i> Home</a>
            <a href="/laporan"><i class="bx bx-line-chart"></i> Laporan</a>
        </div> 
        @else
        <div class="menu">
            <a href="/dashboard"><i class="bx bx-home"></i> Home</a>
            <a href="/pencatatan"><i class="bx bx-book"></i> Pencatatan</a>
            <a href="/laporan"><i class="bx bx-line-chart"></i> Laporan</a>
        </div>     
        @endif
        </div>
        <div class="keluar">
            <a href="logout"><i class="bx bx-log-out"></i> Keluar</a>
        </div>
    </div>
    <div class="main-content">
        @if (session('status'))
            <div class="result">
                <div class="alert alert-primary">{{ session('status') }}</div>
            </div>

        @endif
        <form class="form-add-account" method="post" action="{{ route('tambahAkun.create') }}">
            @csrf
            <label for="role_id">Jenis akun</label>
            <select id="role_id" name="role_id" required>
                <option value="admin">Admin</option>
                <option value="executive">executive</option>
            </select>

            <label for="name">Nama</label>
            <input type="text" id="name" name="name">

            <label for="username">Username</label>
            <input type="text" id="username" name="username">

            <label for="password">Password</label>
            <input type="password" id="password" name="password">

            <button type="submit">Simpan</button>
        </form>
    </div>
</body>
</html>