@extends('template.template')
@section('content')
<div class="d-flex justify-center align-items-center flex-column">
    <h1 class="mt-1 font-poppins">Struktur Organisasi Kami</h1>
    <div class="container d-flex justify-center align-items-center my-5">
        <img id="organisation_logo" src="{{asset('assets/aboutus/StrukturOrganisasiMargaLie.jpeg')}}" width="50%" alt="struktur organisasi marga lie" loading=”lazy”>
    </div>
</div> 
  <div class="chartContainer">
    <h1 class="mb-1">Struktur Organisasi</h1>
    <div id="chart_div"></div>
  </div>
</section>
@endsection
@section('script')
  <script>
    let datajson = JSON.parse('{!! $json !!}');
    console.log(datajson);
    datajson.map( (data) =>{
      let newobj = {v : data[0], f: `${data[0]}<div style="color:red; font-style:italic">${data[2]}</div>`};
      data[0] = newobj;
    } )
    google.charts.load('current', {packages:["orgchart"]});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      let data = new google.visualization.DataTable();
      data.addColumn('string', 'Name');
      data.addColumn('string', 'Manager');
      data.addColumn('string', 'ToolTip');
      
      var options ={
        title: 'Struktur Organisasi Marga Lie Pekanbaru',
        size: 'large',
        allowHtml: 'true'
      }

      data.addRows([...datajson]);
      var chart = new google.visualization.OrgChart(document.getElementById('chart_div'));
      chart.draw(data, options);
}
  </script>
@endsection