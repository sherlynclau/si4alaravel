@extends('layout.main')
@section('title', 'Fakultas')    

@section('content')
     <!--begin::Row-->
     <div class="row">
        <div class="col-12">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">List Fakultas</h3>
              <div class="card-tools">
                <button
                  type="button"
                  class="btn btn-tool"
                  data-lte-toggle="card-collapse"
                  title="Collapse"
                >
                  <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                  <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                </button>
                <button
                  type="button"
                  class="btn btn-tool"
                  data-lte-toggle="card-remove"
                  title="Remove"
                >
                  <i class="bi bi-x-lg"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
                <table class = "table">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Singkatan</th>
                            <th>Dekan</th>
                            <th>Wakil Dekan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $fakultas->nama }}</td>
                            <td>{{ $fakultas->singkatan }}</td>
                            <td>{{ $fakultas->dekan }}</td>
                            <td>{{ $fakultas->wakil_dekan }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
          </div>
        </div>
        @endsection