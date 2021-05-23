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
          <div class="col-md-9 center">
              <div class="box box-success box-solid">
                  <div class="box-header with-border" style="background-color:#485f6a">
                     <center> <h3 class="box-title">Soal Ujian</h3> </center>
                  </div><!-- /.box-header -->
                  <div class="box-body" style="overflow-y: scroll;height: 525px; align:center;">
                      <form id="formSoal" role="form" action="" method="post" onsubmit="return confirm('Anda Yakin Mengakhiri Ujian ini ?')">
                        <center> <h3>A</h3> </center>  
                        <?php foreach ($a as $a) :?>
                              <div class="form-group">
                                  <table class="table table-bordered table-striped">
                                      <tbody>
                                          <tr>
                                            <input type="hidden" name="id_tes" class="form-control" value="{{$a->id_tes}}"required>
                                              <td width="40%"><?php echo $a->pertanyaan;?> </td>
                                              <td>
                                                <input type="radio" name="jawaban" value="1" required />  <?php echo "1"; ?>
                                              </td>
                                              <td>
                                                <input type="radio" name="jawaban" value="2" required />  <?php echo "2"; ?>
                                            </td>
                                            <td>
                                                <input type="radio" name="jawaban" value="3" required />  <?php echo "3"; ?>
                                            </td>
                                            <td>
                                                <input type="radio" name="jawaban" value="4" required />  <?php echo "4"; ?>
                                            </td>
                                            <td>
                                                <input type="radio" name="jawaban" value="5" required />  <?php echo "5"; ?>
                                            </td>
                                            <td>
                                                <input type="radio" name="jawaban" value="6" required />  <?php echo "6"; ?>
                                            </td>
                                            <td>
                                                <input type="radio" name="jawaban" value="7" required />  <?php echo "7"; ?>
                                            </td>
                                            <td>
                                                <input type="radio" name="jawaban" value="8" required />  <?php echo "8"; ?>
                                            </td>
                                            <td>
                                                <input type="radio" name="jawaban" value="9" required />  <?php echo "9"; ?>
                                            </td>
                                            <td>
                                                <input type="radio" name="jawaban" value="10" required />  <?php echo "10"; ?>
                                            </td>
                                            <td>
                                                <input type="radio" name="jawaban" value="11" required />  <?php echo "11"; ?>
                                            </td>
                                            <td>
                                                <input type="radio" name="jawaban" value="12" required />  <?php echo "12"; ?>
                                            </td>
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
                                          <input type="hidden" name="id_tes" class="form-control" value="{{$b->id_tes}}"required>
                                            <td width="40%"><?php echo $b->pertanyaan;?> </td>
                                            <td>
                                              <input type="radio" name="jawaban" value="1" required />  <?php echo "1"; ?>
                                            </td>
                                            <td>
                                              <input type="radio" name="jawaban" value="2" required />  <?php echo "2"; ?>
                                          </td>
                                          <td>
                                              <input type="radio" name="jawaban" value="3" required />  <?php echo "3"; ?>
                                          </td>
                                          <td>
                                              <input type="radio" name="jawaban" value="4" required />  <?php echo "4"; ?>
                                          </td>
                                          <td>
                                              <input type="radio" name="jawaban" value="5" required />  <?php echo "5"; ?>
                                          </td>
                                          <td>
                                              <input type="radio" name="jawaban" value="6" required />  <?php echo "6"; ?>
                                          </td>
                                          <td>
                                              <input type="radio" name="jawaban" value="7" required />  <?php echo "7"; ?>
                                          </td>
                                          <td>
                                              <input type="radio" name="jawaban" value="8" required />  <?php echo "8"; ?>
                                          </td>
                                          <td>
                                              <input type="radio" name="jawaban" value="9" required />  <?php echo "9"; ?>
                                          </td>
                                          <td>
                                              <input type="radio" name="jawaban" value="10" required />  <?php echo "10"; ?>
                                          </td>
                                          <td>
                                              <input type="radio" name="jawaban" value="11" required />  <?php echo "11"; ?>
                                          </td>
                                          <td>
                                              <input type="radio" name="jawaban" value="12" required />  <?php echo "12"; ?>
                                          </td>
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
                                              <input type="hidden" name="id_tes" class="form-control" value="{{$c->id_tes}}"required>
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
                                              <input type="hidden" name="id_tes" class="form-control" value="{{$d->id_tes}}"required>
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
                                            <input type="hidden" name="id_tes" class="form-control" value="{{$e->id_tes}}"required>
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
                                            <input type="hidden" name="id_tes" class="form-control" value="{{$f->id_tes}}"required>
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
                                              <input type="hidden" name="id_tes" class="form-control" value="{{$g->id_tes}}"required>
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
                                              <input type="hidden" name="id_tes" class="form-control" value="{{$h->id_tes}}"required>
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
                                            <input type="hidden" name="id_tes" class="form-control" value="{{$i->id_tes}}"required>
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
                                            <input type="hidden" name="id_tes" class="form-control" value="{{$j->id_tes}}"required>
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