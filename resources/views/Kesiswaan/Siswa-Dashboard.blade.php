@extends('Layout.apps.PageLayout')
@section('isi-konten')
<style>
    .bg-danger-cristall{
        background: linear-gradient(to bottom, rgba(248,80,50,1) 0%,rgba(241,111,92,1) 50%,rgba(246,41,12,1) 51%,rgba(240,47,23,1) 71%,rgba(231,56,39,1) 100%);
    }
    .bg-cristall {
  background-image: linear-gradient(to right top, #ff0033, #ff8c00, #ffd700, #00bfff);
  background-size: cover;
  background-repeat: no-repeat;
  background-blend-mode: screen;
}
.bg-cristall-merah {
  background: linear-gradient(to right top, #ff0033, #ff3366);
  background-size: cover;
  background-repeat: no-repeat;
  background-blend-mode: screen;
  box-shadow: inset 1 2 10px 5px rgba(255, 255, 255, 0.3);
  color: #fff;
}

.bg-cristall-kuning {
  background: linear-gradient(to right top, #ffd700, #ffcc00);
  background-size: cover;
  background-repeat: no-repeat;
  background-blend-mode: screen;
  box-shadow: inset 0 0 10px 5px rgba(255, 255, 255, 0.3);
    color: #fff;
}
.bg-cristall-orange {
  background: linear-gradient(to right top, #ffae00, #ff8800);
  background-size: cover;
  background-repeat: no-repeat;
  background-blend-mode: screen;
  box-shadow: inset 0 0 10px 5px rgba(255, 255, 255, 0.3);
  color: #fff;
}

.bg-cristall-hijau {
  background: linear-gradient(to right top, #00ff00, #00cc00);
  background-size: cover;
  background-repeat: no-repeat;
  background-blend-mode: screen;
  box-shadow: inset 0 0 10px 5px rgba(255, 255, 255, 0.3);
  color: #fff;
}

.bg-cristall-biru {
  background: linear-gradient(to right top, #00bfff, #0099ff);
  background-size: cover;
  background-repeat: no-repeat;
  background-blend-mode: screen;
  box-shadow: inset 0 0 10px 5px rgba(255, 255, 255, 0.3);
  color: #fff;
}

.bg-cristall-pink {
  background: linear-gradient(to right top, #ff69b4, #ff1493);
  background-size: cover;
  background-repeat: no-repeat;
  background-blend-mode: screen;
  box-shadow: inset 0 0 10px 5px rgba(255, 255, 255, 0.3);
  color: #fff;
}

.bg-cristall-cyan {
  background: linear-gradient(to right top, #00ffff, #00ced1);
  background-size: cover;
  background-repeat: no-repeat;
  background-blend-mode: screen;
  box-shadow: inset 0 0 10px 5px rgba(255, 255, 255, 0.3);
  color: #fff;
}


</style>
<section class=" mt-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-6">

                <div class="small-box bg-cristall-merah shadow">
                    <div class="inner">
                        <h3>{{ $jmlKelas1 }}</h3>
                        <table>
                            <tbody>
                                <tr>
                                    <td>Laki-Laki</td>
                                    <td>:</td>
                                    <td>{{ $Kelas1L }}</td>
                                </tr>
                                <tr>
                                    <td>Perempuan</td>
                                    <td>:</td>
                                    <td>{{ $Kelas1P }}</td>
                                </tr>
                            </tbody>
                        </table>
                       
                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <a href="#" class="small-box-footer">KELAS 1 <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-6">

                <div class="small-box bg-cristall-kuning shadow">
                    <div class="inner">
                        <h3>-</h3>
                        <p>Jumlah SPJ</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-file-invoice"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-6">

                <div class="small-box bg-indigo shadow">
                    <div class="inner">
                        <h3>-</h3>
                        <p>Jumlah Order BOP</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-6">

                <div class="small-box bg-cristall-pink shadow "> 
                    <div class="inner">
                        <h3>-<sup style="font-size: 20px"></sup></h3>
                        <p>Jumlah Order BOS</p>
                    </div>
                    <div class="icon ">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer ">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-6">

                <div class="small-box bg-cristall-orange shadow "> 
                    <div class="inner">
                        <h3>-<sup style="font-size: 20px"></sup></h3>
                        <p>Jumlah Order BOS</p>
                    </div>
                    <div class="icon ">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer ">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-6">

                <div class="small-box bg-cristall-cyan shadow "> 
                    <div class="inner">
                        <h3>-<sup style="font-size: 20px"></sup></h3>
                        <p>Jumlah Order BOS</p>
                    </div>
                    <div class="icon ">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer ">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
        
        
        <div class="row">


            <div class="col">
                <div class="card">
                    <div class="card-header border-0">
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title">Pendapatan</h3>
                            <a>View Report</a>
                        </div>
                    </div>
                    <div class="card-body" >
                        <div >
                            <canvas id="SpjChart" width="400" height="100"></canvas>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>





<script src="{{ asset('assets/js/chart-cdn.js') }}"></script>


<script>
    const ctx = document.getElementById('SpjChart');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: "LABEL",
            datasets: [
                {
                label: 'Pembelian',
                data: "DATA",
                borderColor: '#36A2EB',
                backgroundColor: '#9BD0F5',
                borderWidth: 1
                
               
            },
            
        ]},
       
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
@endsection