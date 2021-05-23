<html>

<head>
    <title>Sahabat Karir</title>
</head>

<body>
    @include('templates/header')
    <div style="margin-top: 20px; margin-bottom: 20px">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
      <div class="container-fluid">
        <section class="content" >
            <div class="row">
                <div class="col-md-12">
                  @if($petunjuk != null)
                           <center> <h4>{{$petunjuk->petunjuk_subtes}}</h4> </center>
                           @endif
                    <div class="box box-success box-solid" style="border-block-color: black">
                        <div class="box-header" style="background-color: #87CEFA">
                          
                           <center> <h3>{{$var}}</h3> </center>
                           <form method="get" action="{{route('simpan.jawaban', Auth::guard('peserta')->id())}}"  enctype="multipart/form-data"style="width: 100%" enctype="multipart/form-data">
                            @csrf
                           <div class="box-body" style="overflow-y: scroll;height: 530px;background-color: #F0F8FF">
                              <?php foreach ($a as $a) :?>
                                    <div class="form-group">
                                        <table class="table table-bordered table-striped">                                            
                                                <tr>
                                                  <input type="hidden" name="id_tes" class="form-control" value="{{$a->id_tes}}"required>
                                                  <input type="hidden" name="id_subtes" class="form-control" value="{{$a->id_subtes}}"required>
                                                  
                                                  @if($a->id_subtes < 10)                                  
                                                  <td width="50%" class="font-weight-bold"><?php echo $a->pertanyaan;?> </td>
                                                  @for ($i = 1; $i <= 12; $i++)
                                                  <td align ="center">                                                          
                                                    <input type="radio" name="jawaban[{{ $a->id_soal }}]" value="{{ $i }}" required>{{ $i }}
                                                  </td>                                                        
                                                  @endfor    
                                                  @elseif($a->id_subtes == 10)     
                                                  <td width="5%" class="font-weight-bold"><?php echo $a->pertanyaan;?> </td>
                                                  <td width="50%" class="font-weight-bold"><?php echo $petunjuk->petunjuk_subtes;?> </td>
                                                      <td>                                                          
                                                        <input type="text" name="jawaban[{{ $a->id_soal }}]"required>
                                                      </td>    
                                                  @endif        
                                                </tr>
                                        </table>
                                    </div>
                                <?php endforeach ?>
                           
                            <div class="box-footer">
            
                            </div>
                        </div><!-- /.box-body -->
                        <br>
                        <button type="submit" class="btn btn-primary btn-flat pull-right mr-4 font-weight-bold" style="float: right">SIMPAN & LANJUTKAN</button>
                        <br>
                        <br>
                    </div>
                  </form>
                </div>    
            </div>      
          </section><!-- /.content -->
    
      </div>
    </div>

    @include("templates/footer")    
    @stack('script-after')
</body>
