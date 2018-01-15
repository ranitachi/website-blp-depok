<div id="canvas-holder" style="width:100%">
    <!--<canvas id="chart-area" />-->
    <div class="block-content">
        <canvas id="myChart" width="400" height="120"></canvas>               
    </div>
</div>

@php
    $tgl=$data='';
    for($i=1;$i<=$jlhhari;$i++)
    {
        $wkt=date('Y-m-d',strtotime($tahun.'-'.$bulan.'-'.$i));
        $tgl.="$i,";
        if(isset($vis[$wkt]))
        {
                $data.=count($vis[$wkt]).',';
        }
        else
            $data.='0,';
    }
    $tgl=substr($tgl,0,-1);
    $data=substr($data,0,-1);
    //dd($vis);    
@endphp
<script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: [{{$tgl}}],
            datasets: [{
                label: '# Jumlah Pengunjung {{bulan($bulan)}} - {{$tahun}} ',
                data: [{{$data}}],
                backgroundColor: [
                              'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
    
    </script>