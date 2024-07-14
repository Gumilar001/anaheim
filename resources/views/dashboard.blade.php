<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <title>Dashboard</title>
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
    <!-- Main Content -->
    <div class="content">
        <main>
            <div class="header">
                <li><i class='bx bx-dollar-circle'></i>
                    <span class="info">
                        <p>Total HPP Keseluruhan</p>
                        <h3>
                            Rp.1.000.000.000
                        </h3>
                        <p>Total Project</p>
                        <h3>
                            10
                        </h3>
                    </span>
                </li>
                <a href="/pencatatan" class="report">
                    <i class='bx bx-plus'></i>
                    <span>Tambah Project</span>
                </a>
            </div>

            <!-- Insights -->
            <ul class="insights">
                <li>
                    <i class='bx bx-calendar-check'></i>
                    <span class="info">
                        <p>Project berjalan</p>
                        <h3>
                            Rp.1.000.000
                        </h3>
                        <p>Total Project</p>
                        <h3>
                            10
                        </h3>
                    </span>
                </li>
                <li><i class='bx bx-show-alt'></i>
                    <span class="info">
                        <p>Project Selesai</p>
                        <h3>
                            Rp.1.000.000
                        </h3>
                        <p>Total Project</p>
                        <h3>
                            10
                        </h3>
                    </span>
                </li>
                <li><i class='bx bx-line-chart'></i>
                    <span class="info">
                        <p>Panding</p>
                        <h3>
                            Rp.1.000.000
                        </h3>
                        <p>Total Project</p>
                        <h3>
                            10
                        </h3>
                    </span>
                </li>
            </ul>
            <!-- End of Insights -->

            <div class="bottom-data">
                <div class="orders">
                    <div class="header">
                        <i class='bx bx-receipt'></i>
                        <h3>Project keseluruhan</h3>
                        <i class='bx bx-search'></i>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Nama</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>14-08-2023</td>
                                <td>
                                    <p>Project 1</p>
                                </td>
                                <td>Rp.10.0000.000</td>
                            </tr>
                            <tr>
                                <td>14-08-2023</td>
                                <td>
                                    <p>Project 2</p>
                                </td>
                                <td>Rp.10.0000.000</td>
                            </tr>
                            <tr>
                                <td>14-08-2023</td>
                                <td>
                                    <p>Project 3</p>
                                </td>
                                <td>Rp.10.0000.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Reminders -->
                <div class="reminders">
                    <div class="charts-card">
                        <h2 class="chart-title">Grafik Project</h2>
                        <div id="bar-chart"></div>
                      </div>
                </div>

                <!-- End of Reminders-->

            </div>

        </main>

    </div>

    <script src="{{ asset('js/index.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.5/apexcharts.min.js"></script>
    <!-- Custom JS -->
    <script src="js/dashboard.js"></script>
</body>
</html>