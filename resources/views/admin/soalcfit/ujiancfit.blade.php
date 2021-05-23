@extends('layouts.backend')
@section('title')
SAHABAT PSIKOLOGI
@endsection

@section('content')
{{-- @include('flash-message') --}}
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<div class="container-fluid">
    <section class="content" >
        <div class="row">
          <div class="col-md-12">
              <div class="box box-success box-solid">
                  <div class="box-header with-border" style="background-color:#485f6a">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
          <div class="sidebar-brand-icon">
            <img src="{{ asset('temp/assets/gambar/sahabatkarir.png')}}" width="50px">
          </div>
          <div class="sidebar-brand-text mx-3">Sahabat Karir</div>
        </a>
                    <center> <h3 class="box-title">Soal Ujian</h3> </center>
                  </div><!-- /.box-header -->
                  <div class="box-body" style="overflow-y: scroll;height: 525px;">
                      <form id="formSoal" role="form" action="" method="post" onsubmit="return confirm('Anda Yakin Mengakhiri Ujian ini ?')">
                        <center> <h3>TES 1</h3> </center>  
                        <?php foreach ($sub1 as $sub1) :?>
                              <div class="form-group">
                                  <table class="table table-bordered table-striped">
                                      <tbody>
                                          <tr>
                                            <input type="hidden" name="id_tes" class="form-control" value="{{$sub1->id_tes}}"required>
                                              <td width="1%"><?php echo $sub1->id_soalcfit;?> </td>
                                              <td><?php echo $sub1->pertanyaan;?> </td>
                                              <td>
                                                <div class="form-group" style="color: black">
                                                    <select class="form-control" name="jawaban">
                                                        <?php for($n=1;$n<13;$n++){ ?>
                                                            <option value="{{$n,$a->id_soalrmib,$a->id_tes}}"><?php echo $n?></option>
                                                            <?php } ?>
                                                    </select>
                                                </div>
                                              </td>
                                          </tr>
                                      </tbody>
                                  </table>
                              </div>
                          <?php endforeach ?>

                          <center> <h3>B</h3> </center>  
                        <?php foreach ($b as $b) :?>
                              <div class="form-group">
                                  <table class="table table-bordered table-striped">
                                      <tbody>
                                          <tr>
                                            <input type="hidden" name="id_tes" class="form-control" value="{{$b->tes->id_tes}}"required>
                                              <td width="50%"><?php echo $b->pekerjaan;?> </td>
                                              <td>
                                                <div class="form-group" style="color: black">
                                                    <select class="form-control" name="jawaban">
                                                        <?php for($n=1;$n<13;$n++){ ?>
                                                            <option value="{{$n,$b->id_soalrmib,$b->id_tes}}"><?php echo $n?></option>
                                                            <?php } ?>
                                                    </select>
                                                </div>
                                              </td>
                                          </tr>
                                      </tbody>
                                  </table>
                              </div>
                          <?php endforeach ?>
                          <center> <h3>C</h3> </center>  
                          <?php foreach ($c as $c) :?>
                                <div class="form-group">
                                    <table class="table table-bordered table-striped">
                                        <tbody>
                                            <tr>
                                              <input type="hidden" name="id_tes" class="form-control" value="{{$c->tes->id_tes}}"required>
                                                <td width="50%"><?php echo $c->pekerjaan;?> </td>
                                                <td>
                                                  <div class="form-group" style="color: black">
                                                      <select class="form-control" name="jawaban">
                                                          <?php for($n=1;$n<13;$n++){ ?>
                                                              <option value="{{$n,$c->id_soalrmib,$c->id_tes}}"><?php echo $n?></option>
                                                              <?php } ?>
                                                      </select>
                                                  </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            <?php endforeach ?>
  
                            <center> <h3>D</h3> </center>  
                          <?php foreach ($d as $d) :?>
                                <div class="form-group">
                                    <table class="table table-bordered table-striped">
                                        <tbody>
                                            <tr>
                                              <input type="hidden" name="id_tes" class="form-control" value="{{$d->tes->id_tes}}"required>
                                                <td width="50%"><?php echo $d->pekerjaan;?> </td>
                                                <td>
                                                  <div class="form-group" style="color: black">
                                                      <select class="form-control" name="jawaban">
                                                          <?php for($n=1;$n<13;$n++){ ?>
                                                              <option value="{{$n,$d->id_soalrmib,$d->id_tes}}"><?php echo $n?></option>
                                                              <?php } ?>
                                                      </select>
                                                  </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            <?php endforeach ?>
                            <center> <h3>E</h3> </center>  
                        <?php foreach ($e as $e) :?>
                              <div class="form-group">
                                  <table class="table table-bordered table-striped">
                                      <tbody>
                                          <tr>
                                            <input type="hidden" name="id_tes" class="form-control" value="{{$e->tes->id_tes}}"required>
                                              <td width="50%"><?php echo $e->pekerjaan;?> </td>
                                              <td>
                                                <div class="form-group" style="color: black">
                                                    <select class="form-control" name="jawaban">
                                                        <?php for($n=1;$n<13;$n++){ ?>
                                                            <option value="{{$n,$e->id_soalrmib,$e->id_tes}}"><?php echo $n?></option>
                                                            <?php } ?>
                                                    </select>
                                                </div>
                                              </td>
                                          </tr>
                                      </tbody>
                                  </table>
                              </div>
                          <?php endforeach ?>

                          <center> <h3>F</h3> </center>  
                        <?php foreach ($f as $f) :?>
                              <div class="form-group">
                                  <table class="table table-bordered table-striped">
                                      <tbody>
                                          <tr>
                                            <input type="hidden" name="id_tes" class="form-control" value="{{$f->tes->id_tes}}"required>
                                              <td width="50%"><?php echo $f->pekerjaan;?> </td>
                                              <td>
                                                <div class="form-group" style="color: black">
                                                    <select class="form-control" name="jawaban">
                                                        <?php for($n=1;$n<13;$n++){ ?>
                                                            <option value="{{$n,$f->id_soalrmib,$f->id_tes}}"><?php echo $n?></option>
                                                            <?php } ?>
                                                    </select>
                                                </div>
                                              </td>
                                          </tr>
                                      </tbody>
                                  </table>
                              </div>
                          <?php endforeach ?>
                          <center> <h3>G</h3> </center>  
                          <?php foreach ($g as $g) :?>
                                <div class="form-group">
                                    <table class="table table-bordered table-striped">
                                        <tbody>
                                            <tr>
                                              <input type="hidden" name="id_tes" class="form-control" value="{{$g->tes->id_tes}}"required>
                                                <td width="50%"><?php echo $g->pekerjaan;?> </td>
                                                <td>
                                                  <div class="form-group" style="color: black">
                                                      <select class="form-control" name="jawaban">
                                                          <?php for($n=1;$n<13;$n++){ ?>
                                                              <option value="{{$n,$g->id_soalrmib,$g->id_tes}}"><?php echo $n?></option>
                                                              <?php } ?>
                                                      </select>
                                                  </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            <?php endforeach ?>
  
                            <center> <h3>H</h3> </center>  
                          <?php foreach ($h as $h) :?>
                                <div class="form-group">
                                    <table class="table table-bordered table-striped">
                                        <tbody>
                                            <tr>
                                              <input type="hidden" name="id_tes" class="form-control" value="{{$h->tes->id_tes}}"required>
                                                <td width="50%"><?php echo $h->pekerjaan;?> </td>
                                                <td>
                                                  <div class="form-group" style="color: black">
                                                      <select class="form-control" name="jawaban">
                                                          <?php for($n=1;$n<13;$n++){ ?>
                                                              <option value="{{$n,$h->id_soalrmib,$h->id_tes}}"><?php echo $n?></option>
                                                              <?php } ?>
                                                      </select>
                                                  </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            <?php endforeach ?>
                            <center> <h3>I</h3> </center>  
                        <?php foreach ($i as $i) :?>
                              <div class="form-group">
                                  <table class="table table-bordered table-striped">
                                      <tbody>
                                          <tr>
                                            <input type="hidden" name="id_tes" class="form-control" value="{{$i->tes->id_tes}}"required>
                                              <td width="50%"><?php echo $i->pekerjaan;?> </td>
                                              <td>
                                                <div class="form-group" style="color: black">
                                                    <select class="form-control" name="jawaban">
                                                        <?php for($n=1;$n<13;$n++){ ?>
                                                            <option value="{{$n,$i->id_soalrmib,$i->id_tes}}"><?php echo $n?></option>
                                                            <?php } ?>
                                                    </select>
                                                </div>
                                              </td>
                                          </tr>
                                      </tbody>
                                  </table>
                              </div>
                          <?php endforeach ?>

                        <?php  
                        foreach ($j as $j) :
                        ?>
                              <div class="form-group">
                                  <table class="table table-bordered table-striped">
                                      <tbody>
                                          <tr>
                                            <input type="hidden" name="id_tes" class="form-control" value="{{$j->tes->id_tes}}"required>
                                              <td width="1%"><?php echo $j->pekerjaan;?> </td>
                                              <td> <?php echo $j->tes->petunjuktes ?> </td>
                                              <td> <input type="text" name="jawaban" class="form-control" required></td>
                                          </tr>
                                      </tbody>
                                  </table>
                              </div>
                          <?php endforeach ?>
                          <button type="submit" class="btn btn-primary btn-flat pull-right">Simpan</button>
                      </form>
                      <div class="box-footer">
      
                      </div>
                  </div><!-- /.box-body -->
              </div>
          </div>    
      </div>
          
      
      </section><!-- /.content -->
      
</div>
@endsection