@extends('admin.layouts.main')
@section('content')
<div class="container-fluid py-4">
    <div class="card ">
      <div class="card-header pb-0 p-3">
          <div class="d-flex justify-content-between">
              <h6 class="mb-2">Beranda</h6>
          </div>

          <div class="col-lg-7 mb-lg-0 mb-4">
            <div class="card z-index-2 h-100">
              <div class="card-header pb-0 pt-3 bg-transparent">
                <h6 class="text-capitalize">Grafik Permohonan</h6>
              </div>
              <div class="card-body p-3">
                <div class="chart">
                  <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
                </div>
              </div>
            </div>
          </div>

      </div>
    </div>
</div>

        @endsection('content')