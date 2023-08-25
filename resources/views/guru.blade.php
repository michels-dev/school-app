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
            <h1 class="m-0"><b>Page</b>&nbsp;Data Guru</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Dashboard Data Guru</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
	<div class="container mb-5">
		{{-- upload file --}}
		<div class="row g-3 align-items-center mt-2">
		<div class="col-auto">
			<a href="/pdfguru" class="btn btn-secondary"><i class="fa-solid fa-file-pdf"></i>Export PDF</a>
			<a href="/dltallguru" class="btn btn-warning"><i class="fa-regular fa-trash-can"></i>Delete All</a>
		</div>
		</div>

			<div class="card mt-4">
				<div class="card-header">
					Halaman Tampilan Data Guru
				</div>
				<div class="card-body justify-">
					<a href="/tdguru" type="button" class="btn btn-success fw-bold">Guru +</a>
					<div class="row g-3 align-items-center mt-2">
						<div class="col-auto">
						<form action="/guru" method="GET">
							<input type="search" name="search" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Search Data Guru">
						</form>
						</div>
					</div>
					{{-- @if ($message = Session::get('success'))
					<div class="alert alert-success" role="alert">
						{{ $message }}
					  </div>
					@endif --}}
					<table class="table table-striped">
						<thead>
						  <tr>
							<th>NO</th>
							<th>Nama</th>
							<th>Jenis Kelamin</th>
							<th>Bidang</th>
							<th>Nomor Hp</th>
							<th>Status</th>
							<th>Aksi</th>
						  </tr>
						</thead>
						<tbody>
						@php
							$no = 1;
						@endphp
						@foreach ($data as $guru => $row)
						 <tr>
							<th scope="row">{{ $guru + $data->firstItem( ) }}</th>
							<td>{{ $row->nama }}</td>
							<td>{{ $row->jeniskelamin }}</td>
							<td>{{ $row->bidang }}</td>
							<td>{{ $row->nomorhp }}</td>
							<td>{{ $row->status }}</td>
							<td>
								<a href="/tampildata2/{{ $row->id }}" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
								<a href="#" class="btn btn-danger delete" data-id="{{ $row->id }}" data-nama="{{ $row->nama }}"><i class="fa-solid fa-trash"></i></a>
							</td>
						  </tr>
						@endforeach
						</tbody>
					  </table>
					  {{$data->links()}}
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

{{-- sweet alert delete --}}
	<script>
		$('.delete').click(function(){
			var guruid = $(this).attr('data-id');
			var nama = $(this).attr('data-nama');
			swal({
				title: "Anda Yakin?",
				text: "Data akan terhapus berdasarkan Nama "+nama+" ",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				if (willDelete) {
					window.location = "/deleteguru/"+guruid+""
					swal("Data Berhasil Di Hapus", {
					icon: "success",
				});
				} else {
			swal("Data Tidak Jadi Di Hapus!");
				}
			});
				})
	</script>

  {{-- notifikasi toast --}}
  <script>
	  @if (Session::has('success'))
	  toastr.success("{{Session::get('success')}}")
	  @endif
  </script>


@endpush
