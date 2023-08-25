@extends('layout.admin')

@push('css')
 <!-- Bootstrap CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 {{-- Fontawesome --}}
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
 {{-- toastr --}}
 <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.css" rel="stylesheet">
@endpush

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><b>Page</b>&nbsp;Update Data Siswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Dashboard Data Siswa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

			<div class="card mt-2">
				<div class="card-header">
					Halaman Tambah Data Siswa
				</div>
				<div class="card-body justify-">
					<form action="/updatesiswa/{{ $data->id }}" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="mb-3">
						  <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->nama }}">
						</div>
						<div class="mb-3">
							<input type="text" name="jeniskelamin" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->jeniskelamin }}">
						</div>
						<div class="mb-3">
							<select class="form-select" name="jurusan" arial-label="Default select example">
								<option selected>{{ $data->jurusan }}</option>
								<option value="RPL">Rekayasa Perangkat Lunak</option>
								<option value="Farmasi">Farmasi</option>
								<option value="TataBusana">Tata Busana</option>
						</div>
						<div class="mb-3">
							<input type="text" name="alamat" class="form-control mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->alamat }}">
						</div>
						<div class="mb-3">
							<input type="text" name="nomorhp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->nomorhp }}">
						</div>
						<button type="submit" class="btn btn-primary">Simpan</button>
					  </form>
				</div>
			  </div>

</div>
  </div>
    <!-- /.content-header -->
@endsection

@push('scripts')
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  {{-- script sweet alert --}}
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  {{-- end --}}
  {{-- script toastr --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
  {{-- end --}}
  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  -->
</body>

  <script>
	  @if (Session::has('success'))
	  toastr.success("{{Session::get('success')}}")
	  @endif
  </script> --}}


@endpush
