@extends('layouts.backend')
@section('title')
Dashboard
@endsection

@section('content')
<div class="container-fluid">
    <div class="row mt-3">
                     <div class="col-xl-3 col-md-6 mb-4">
                       <div class="card border-left-primary shadow h-100 py-2">
                         <div class="card-body">
                           <div class="row no-gutters align-items-center">
                             <div class="col mr-2">
                              <a href={{route('siswa.index')}}><div class="h7 mb-0 font-weight-bold text-gray-800">
                                Total Siswa Keseluruhan </div></a>
                             </div>
                             <div class="col-auto">
                              <i class="fas fa-fw fa-users"></i>
                             </div>
                           </div>
                           {{ count($data_siswa)}}
                         </div>
                       </div>
                     </div>
                     
                      <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                          <div class="card-body">
                            <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                <a href={{route('rekap.indexx')}}><div class="h7 mb-0 font-weight-bold text-gray-800">
                                  Total Siswa yang Habis Pertemuan </div></a>
                              </div>
                              <div class="col-auto">
                                <i class="fas fa-fw fa-users"></i>
                              </div>
                            </div>
                            {{ count($x)}}
                          </div>
                        </div>
                      </div>

                      <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                          <div class="card-body">
                            <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                <a href={{route('rekap.index')}}><div class="h7 mb-0 font-weight-bold text-gray-800">
                                  Total Siswa yang Masih Ada Pertemuan <br>{{ count($y)}}</div></a>
                              </div>
                              <div class="col-auto">
                                <i class="fas fa-fw fa-users"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                          <div class="card-body">
                            <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                <a href={{route('pengajar.index')}}><div class="h7 mb-0 font-weight-bold text-gray-800">
                                  Total Pengajar <br>{{ count($data_pengajar)}}</div></a>
                              </div>
                              <div class="col-auto">
                                <i class="fas fa-chalkboard-teacher"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                          <div class="card-body">
                            <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                <a href={{route('paket.index')}}><div class="h7 mb-0 font-weight-bold text-gray-800">Total Paket </div></a>
                              </div>
                              <div class="col-auto">
                                <i class="fas fa-fw fa-boxes"></i>
                              </div>
                            </div>
                            {{ count($data_paket)}}
                          </div>
                        </div>
                      </div>

                      <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                          <div class="card-body">
                            <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                <a href={{route('pelajaran.index')}}><div class="h7 mb-0 font-weight-bold text-gray-800">Total Pelajaran </div></a>
                              </div>
                              <div class="col-auto">
                                <i class="fas fa-book-open"></i>
                              </div>
                            </div>
                            {{ count($data_pelajaran)}}
                          </div>
                        </div>
                      </div>

                      <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                          <div class="card-body">
                            <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                <a href={{route('tes.index')}}><div class="h7 mb-0 font-weight-bold text-gray-800">Total Tes </div></a>
                              </div>
                              <div class="col-auto">
                                <i class="fas fa-diagnoses"></i>
                              </div>
                            </div>
                            {{ count($data_tes)}}
                          </div>
                        </div>
                      </div>
  </div>
    @endsection