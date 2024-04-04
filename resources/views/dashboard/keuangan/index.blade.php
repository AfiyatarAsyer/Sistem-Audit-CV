
@extends('dashboard.layouts.mainsb')
<link href="/css/stylessb.css" rel="stylesheet"/>

@section('container')

<html>
<head>
  <title>Data Keuangan</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>

<div id="content-wrapper" class="d-flex flex-column">
<div id="content">

    <!-- Topbar -->
    
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    
    

   


    <body>
    <div class="container shadow">
			<h2>Cetak Data Keuangan</h2>
			{{-- <h4>(ber)</h4> --}}
				<div class="data-tables datatable-dark">
					
					<!-- Masukkan table nya disini, dimulai dari tag TABLE -->
                    <table class="table table-bordered" id="mauexport" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>nama keuangan</th>
                                <th>pemasukan</th>
                                <th>pengeluaran</th>
                                <th>tanggal di buat</th>
                                

                                
                                {{-- <th>Total</th> --}}
                            </tr>
                        </thead>
                        <tbody>
              
                            @foreach ($exports as $keuangan)
    
                           
                            
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $keuangan->name }}</td>
                                <td>Rp.{{ number_format($keuangan->pemasukan,2,',','.') }}</td>
                                <td>Rp.{{ number_format($keuangan->pengeluaran,2,',','.') }}</td>
                                <td>{{ $keuangan->created_at }}</td>
                         
                                {{-- <td></td> --}}
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
					
				</div>
</div>
	
<script>
$(document).ready(function() {
    $('#mauexport').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy','csv','excel', 'pdf', 'print'
        ]
    } );
} );

</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

	

</body>
<div class="d-flex justify-content-center">
    {{ $exports->links() }}
</div>

</html>
@endsection