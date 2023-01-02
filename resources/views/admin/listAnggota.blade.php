@extends('template.dashtemplate')

@section('title', 'List Anggotas')

@section('content')
  <h1 class="my-3"><i class="fa-solid fa-list" data-fa-transform="down-1"></i>  List Anggota</h1>
  <hr>
  <table id="datatablesSimple" class="my-3 table table-striped" style="width:100%">
    <thead class="table-dark">
      <tr>
          <th>Email</th>
          <th>Nama Depan</th>
          <th>Nama Belakang</th>
          <th>Tanggal Lahir</th>
          <th>Jenis Kelamin</th>
          <th>Agama</th>
          <th>NIK</th>
          <th>Tanggal Join</th>
          <th>Alamat</th>
          <th>Pas Foto</th>
          <th>Foto KTP</th>
          <th>Action</th>
        </tr>
      </thead>
  <tbody>
    @foreach($list as $key => $data)
    <tr>
      <td>{{$data->email}}</td>
      <td>{{$data->nama_depan}}</td>
      <td>{{$data->nama_belakang}}</td>
      <td>{{$data->tanggal_lahir}}</td>
      <td>{{$data->jenis_kelamin}}</td>
      <td>{{$data->agama}}</td>
      <td>{{$data->NIK}}</td>
      <td>{{$data->tanggal_join}}</td>
      <td>{{$data->alamat}}</td>
      <td>
        <a href="{{asset($data->pasfoto)}}" target="_blank" rel="noopener noreferrer">link</a>
      </td>
      <td>
        <a href="{{asset($data->fotoktp)}}" target="_blank" rel="noopener noreferrer">link</a>
      </td>
      <td>
        <a href="/anggota/edit/{{$data->id}}" class="btn btn-secondary">Edit</a>
        <a href="/anggota/delete/{{$data->id}}" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>

  </table>

  @if($delete = Session::get('delete'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    <strong>Hapus Berhasil</strong>
  </div>
  @endif
  
  

@endsection

@section('script')
<script>
//fungsi untuk filtering data berdasarkan tanggal 
            var start_date;
            var end_date;
            var DateFilterFunction = (function (oSettings, aData, iDataIndex) {
               var dateStart = new Date(start_date);
               var dateEnd = new Date(end_date);
               //Kolom tanggal yang akan kita gunakan berada dalam urutan 2, karena dihitung mulai dari 0
               //nama depan = 0
               //nama belakang = 1
               //tanggal terdaftar =2
               var evalDate= new Date(aData[7]);
            //    console.log(evalDate);
                 if ( ( isNaN( dateStart ) && isNaN( dateEnd ) ) ||
                      ( isNaN( dateStart ) && evalDate <= dateEnd ) ||
                      ( dateStart <= evalDate && isNaN( dateEnd ) ) ||
                      ( dateStart <= evalDate && evalDate <= dateEnd ) )
                 {
                     return true;
                 }
                 return false;
           });

           $( document ).ready(function() {
           //konfigurasi DataTable pada tabel dengan id example dan menambahkan  div class dateseacrhbox dengan dom untuk meletakkan inputan daterangepicker
            var $dTable = $('#datatablesSimple').DataTable({
             "dom": "<'row'<'col-sm-4'l><'col-sm-5' <'datesearchbox'>><'col-sm-3'f>>" +
               "<'row'<'col-sm-12'tr>>" +
               "<'row'<'col-sm-5'i><'col-sm-7'p>>"
            });
           
            //menambahkan daterangepicker di dalam datatables
            $("div.datesearchbox").html('<div class="input-group"> <span class="input-group-text" id="basic-addon1"> <i class="fa fa-calendar" aria-hidden="true"></i> </span><input type="text" class="form-control pull-right" id="datesearch" placeholder="Search by date range.."> </div>');
           
            document.getElementsByClassName("datesearchbox")[0].style.textAlign = "right";
           
            //konfigurasi daterangepicker pada input dengan id datesearch
            $('#datesearch').daterangepicker({
               autoUpdateInput: false
             });
           
            //menangani proses saat apply date range
             $('#datesearch').on('apply.daterangepicker', function(ev, picker) {
                $(this).val(picker.startDate.format('DD/MM/YYYY') + ' - ' + picker.endDate.format('DD/MM/YYYY'));
                start_date=picker.startDate.format('DD/MM/YYYY');
                end_date=picker.endDate.format('DD/MM/YYYY');
                $.fn.dataTableExt.afnFiltering.push(DateFilterFunction);
                $dTable.draw();
             });
           
             $('#datesearch').on('cancel.daterangepicker', function(ev, picker) {
               $(this).val('');
               start_date='';
               end_date='';
               $.fn.dataTable.ext.search.splice($.fn.dataTable.ext.search.indexOf(DateFilterFunction, 1));
               $dTable.draw();
             });
           });
         </script>
@endsection