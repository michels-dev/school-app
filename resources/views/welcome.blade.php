@extends('layout.admin')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-8">
            <h1 class="m-0"><b>Dashboard</b> Data School-App</h1>
            <h2 class="mt-5">Data Siswa</h2>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4">
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h2 class="card-title fw-bold">Jumlah Data Seluruh</h2>
                  <a href="/stroke">Lihat Data</a>
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex">
                  <p class="d-flex flex-column">
                    <span class="text-bold text-lg">
                      {{ $jumlahsiswa }}
                    <small>Data</small>
                    </span>
                  </p>
                </div>
                <!-- /.d-flex -->
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col-md-6 -->

          {{-- Tampil Data Male --}}
          <div class="col-lg-4">
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h2 class="card-title fw-bold">Jumlah Data Laki-Laki</h2>
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex">
                  <p class="d-flex flex-column">
                    <span class="text-bold text-lg">
                      {{ $jenkell }}
                    <small>Data</small>
                    </span>
                  </p>
                </div>
                <!-- /.d-flex -->
              </div>
            </div>
            <!-- /.card -->
          </div>

          {{-- Tampil Data Female --}}
          <div class="col-lg-4">
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h2 class="card-title fw-bold">Jumlah Data Perempuan</h2>
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex">
                  <p class="d-flex flex-column">
                    <span class="text-bold text-lg">
                      {{ $jenkelp }}
                    <small>Data</small>
                    </span>
                  </p>
                </div>
                <!-- /.d-flex -->
              </div>
            </div>
            <!-- /.card -->
          </div>

          <div class="col-sm-10">
            <h2 class="mt-3">Data Guru</h2>
          </div>

          <div class="col-lg-4">
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h2 class="card-title fw-bold">Jumlah Data Seluruh</h2>
                  <a href="/stroke">Lihat Data</a>
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex">
                  <p class="d-flex flex-column">
                    <span class="text-bold text-lg">
                      {{ $jumlahguru }}
                    <small>Data</small>
                    </span>
                  </p>
                </div>
                <!-- /.d-flex -->
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col-md-6 -->

          {{-- Tampil Data Male --}}
          <div class="col-lg-4">
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h2 class="card-title fw-bold">Jumlah Data Laki-Laki</h2>
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex">
                  <p class="d-flex flex-column">
                    <span class="text-bold text-lg">
                      {{ $jumlahl }}
                    <small>Data</small>
                    </span>
                  </p>
                </div>
                <!-- /.d-flex -->
              </div>
            </div>
            <!-- /.card -->
          </div>

          {{-- Tampil Data Female --}}
          <div class="col-lg-4">
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h2 class="card-title fw-bold">Jumlah Data Perempuan</h2>
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex">
                  <p class="d-flex flex-column">
                    <span class="text-bold text-lg">
                      {{ $jumlahp }}
                    <small>Data</small>
                    </span>
                  </p>
                </div>
                <!-- /.d-flex -->
              </div>
            </div>
            <!-- /.card -->
          </div>

          <div class="col-lg-6">
            <div class="card">
              <div class="panel">
                <div id="piechart"></div>
              </div>
            </div>
          </div>
            <!-- /.card -->

        <div class="col-lg-6">
              <div class="card">
                <div class="panel">
                  <div id="donutchart"></div>
                </div>
              </div>
        </div>

        <div class="col-lg-6">
          <div class="card">
            <div class="panel">
              <div id="halfpiechart"></div>
            </div>
          </div>
    </div>

        <div class="col-lg-6">
          <div class="card">
            <div class="panel">
              <div id="chart_div"></div>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="card">
            <div class="panel">
              <div id="chart_ver"></div>
            </div>
          </div>
        </div>


        <div class="col-lg-6">
          <div class="card">
            <div class="panel">
              <div id="curve_chart"></div>
            </div>
          </div>
        </div>

          <div id="emailHelp" class="form-text">Klik link berikut untuk mengetahui langkah-langkah dalam menggunakan Website ini
          <a href="/panduan" class="brand-text"><b>Pedoman</b></a>
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection



