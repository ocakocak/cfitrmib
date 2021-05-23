<script>
    const startingMinutes = 1;
    let time = startingMinutes * 60;
    setInterval(updateCountdown,1000);
    function updateCountdown(){
        const minutes = Math.floor(time/60);
        let seconds = time % 60;
        seconds = seconds < 10 ? '0' + seconds : seconds;
        document.getElementById("demo").innerHTML = minutes+":"+seconds;
        if(time == 0) {
            // in minute
            //   document.location.href="{!! route('simpan.jawaban',Auth::guard('peserta')->id()); !!}";
        }else{
            time--;
        }
    }
</script>

<div style="margin-top: 20px; margin-bottom: 20px">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
    <div class="row">
        <div class="col-md-12">
            <div class="box box-success box-solid" style="border-block-color: black">
                <center><p id="demo"></p></center>
                <center><p id="tes"></p></center>
                <div class="box-header" style="background-color: #87CEFA">
                    <center> <h3>CFIT TES {{$var}}</h3> </center>
                    <div class="box-body" style="overflow-y: scroll;height: 530px;background-color: #F0F8FF">
                        <form id="formSoal" role="form" action="{{route("simpan.jawaban",Auth::guard('peserta')->id())}}" method="get">
                            @csrf
                            <?php $no=1;foreach ($sub1 as $sub1) :?>
                            <div class="form-group">
                                <table class="table table-bordered table-striped">
                                    <tbody>
                                        <tr>
                                            <input type="hidden" name="id_tes" class="form-control" value="{{$sub1->id_tes}}"required>
                                            <input id ="id_subtes"type="hidden" name="id_subtes" class="form-control" value="{{$sub1->id_subtes}}"required>
                                            <input type="hidden" name="id_soal" class="form-control" value="{{$sub1->id_soal}}"required>
                                            
                                            <td align ="center" style="font-weight:bold"width="5%">{{ $no++}}</td>
                                            
                                            {{-- Pertanyaan --}}
                                            <td align ="center"><img src="{{ asset('soalcfit/'.$sub1->pertanyaan) }}" style="width: 300px;" ></td>
                                            
                                            @if($sub1->id_subtes==11)
                                            <td align ="center">    
                                                {{-- <input type="radio" name="jawaban[{{ $sub1->id_soal }}]" value="A"/><img src="{{ asset('soalcfit/'.$sub1->pilgan_a) }}" style="width: 80px;" > --}}
                                                <input type="radio" name="jawaban[{{ $sub1->id_soal }}]" value="A" wire:model="jawaban.{{ $sub1->id_soal }}"/><img src="{{ asset('soalcfit/'.$sub1->pilgan_a) }}" style="width: 80px;" >
                                            </td>              
                                            <td align ="center">
                                                <input type="radio" name="jawaban[{{ $sub1->id_soal }}]" value="B" />  <img src="{{ asset('soalcfit/'.$sub1->pilgan_b) }}" style="width: 80px;" >
                                            </td>
                                            <td align ="center">
                                                <input type="radio" name="jawaban[{{ $sub1->id_soal }}]" value="C" />  <img src="{{ asset('soalcfit/'.$sub1->pilgan_c) }}" style="width: 80px;" >
                                            </td>
                                            <td align ="center">
                                                <input type="radio" name="jawaban[{{ $sub1->id_soal }}]" value="D" />  <img src="{{ asset('soalcfit/'.$sub1->pilgan_d) }}" style="width: 80px;" >
                                            </td>
                                            <td align ="center">
                                                <input type="radio" name="jawaban[{{ $sub1->id_soal }}]" value="E" />  <img src="{{ asset('soalcfit/'.$sub1->pilgan_e) }}" style="width: 80px;" >
                                            </td>
                                            <td align ="center">
                                                <input type="radio" name="jawaban[{{ $sub1->id_soal }}]" value="F" />  <img src="{{ asset('soalcfit/'.$sub1->pilgan_f) }}" style="width: 80px;" >
                                            </td>
                                            @endif
                                        </td>
                                        
                                        @if($sub1->id_subtes==12)
                                        @for ($i = 1; $i <= 5; $i++)
                                        @if($i==1)
                                        <?php $var2="A" ?>
                                        @elseif ($i==2) 
                                        <?php $var2="B" ?>
                                        @elseif ($i==3) 
                                        <?php $var2="C" ?>
                                        @elseif ($i==4) 
                                        <?php $var2="D" ?>
                                        @elseif ($i==5) 
                                        <?php $var2="E" ?>
                                        @endif
                                        
                                        <td align ="center">                                                          
                                            {{-- <input type="checkbox" name="jawaban[{{ $sub1->id_soal }}]" value="{{$var2}}" id="check1" onclick="setChecks(this)">{{$var2}} --}}
                                            <select class="form-control" name="jawaban1[{{ $sub1->id_soal }}]">
                                                @for ($i = 1; $i <= 5; $i++)
                                                @if($i==1)
                                                <?php $pilgan="A" ?>
                                                @elseif ($i==2) 
                                                <?php $pilgan="B" ?>
                                                @elseif ($i==3) 
                                                <?php $pilgan="C" ?>
                                                @elseif ($i==4) 
                                                <?php $pilgan="D" ?>
                                                @elseif ($i==5) 
                                                <?php $pilgan="E" ?>
                                                @endif
                                                <option value="{{$pilgan}}" required>{{$pilgan}}</option>
                                                @endfor
                                            </select>
                                            &
                                            <select class="form-control" name="jawaban2[{{ $sub1->id_soal }}]">
                                                @for ($i = 1; $i <= 5; $i++)
                                                @if($i==1)
                                                <?php $pilgan="A" ?>
                                                @elseif ($i==2) 
                                                <?php $pilgan="B" ?>
                                                @elseif ($i==3) 
                                                <?php $pilgan="C" ?>
                                                @elseif ($i==4) 
                                                <?php $pilgan="D" ?>
                                                @elseif ($i==5) 
                                                <?php $pilgan="E" ?>
                                                @endif
                                                <option value="{{$pilgan}}" required>{{$pilgan}}</option>
                                                @endfor
                                            </select>
                                        </td>                                                       
                                        @endfor    
                                        @endif
                                        <td align ="center">
                                            @if($sub1->id_subtes==13)
                                            <td align ="center">    
                                                <input type="radio" name="jawaban[{{ $sub1->id_soal }}]" value="A" /><img src="{{ asset('soalcfit/'.$sub1->pilgan_a) }}" style="width: 80px;" >
                                            </td>              
                                            <td align ="center">
                                                <input type="radio" name="jawaban[{{ $sub1->id_soal }}]" value="B" />  <img src="{{ asset('soalcfit/'.$sub1->pilgan_b) }}" style="width: 80px;" >
                                            </td>
                                            <td align ="center">
                                                <input type="radio" name="jawaban[{{ $sub1->id_soal }}]" value="C" />  <img src="{{ asset('soalcfit/'.$sub1->pilgan_c) }}" style="width: 80px;" >
                                            </td>
                                            <td align ="center">
                                                <input type="radio" name="jawaban[{{ $sub1->id_soal }}]" value="D" />  <img src="{{ asset('soalcfit/'.$sub1->pilgan_d) }}" style="width: 80px;" >
                                            </td>
                                            <td align ="center">
                                                <input type="radio" name="jawaban[{{ $sub1->id_soal }}]" value="E" />  <img src="{{ asset('soalcfit/'.$sub1->pilgan_e) }}" style="width: 80px;" >
                                            </td>
                                            <td align ="center">
                                                <input type="radio" name="jawaban[{{ $sub1->id_soal }}]" value="F" />  <img src="{{ asset('soalcfit/'.$sub1->pilgan_f) }}" style="width: 80px;" >
                                            </td>
                                            @endif
                                        </td>
                                        <td align ="center">
                                            @if($sub1->id_subtes==14)
                                            <td align ="center">    
                                                <input type="radio" name="jawaban[{{ $sub1->id_soal }}]" value="A" /><img src="{{ asset('soalcfit/'.$sub1->pilgan_a) }}" style="width: 80px;" >
                                            </td>              
                                            <td align ="center">
                                                <input type="radio" name="jawaban[{{ $sub1->id_soal }}]" value="B" />  <img src="{{ asset('soalcfit/'.$sub1->pilgan_b) }}" style="width: 80px;" >
                                            </td>
                                            <td align ="center">
                                                <input type="radio" name="jawaban[{{ $sub1->id_soal }}]" value="C" />  <img src="{{ asset('soalcfit/'.$sub1->pilgan_c) }}" style="width: 80px;" >
                                            </td>
                                            <td align ="center">
                                                <input type="radio" name="jawaban[{{ $sub1->id_soal }}]" value="D" />  <img src="{{ asset('soalcfit/'.$sub1->pilgan_d) }}" style="width: 80px;" >
                                            </td>
                                            <td align ="center">
                                                <input type="radio" name="jawaban[{{ $sub1->id_soal }}]" value="E" />  <img src="{{ asset('soalcfit/'.$sub1->pilgan_e) }}" style="width: 80px;" >
                                            </td>
                                            <td align ="center">
                                                <input type="radio" name="jawaban[{{ $sub1->id_soal }}]" value="F" />  <img src="{{ asset('soalcfit/'.$sub1->pilgan_f) }}" style="width: 80px;" >
                                            </td>
                                            @endif
                                        </td>
                                        
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <?php endforeach ?>
                        
                        
                        <div class="box-footer" style="float: right">
                            
                        </div>
                        
                    </div><!-- /.box-body -->
                    <br>
                    <button type="submit" class="btn btn-primary btn-flat pull-right mr-4 
                    font-weight-bold" style="float: right">SIMPAN&LANJUTKAN</button>
                    <br>
                    <br>
                    <div >
                        
                    </form>
                </div>
            </div>
        </div>    
    </div>
    
    
</section><!-- /.content -->       
</div>
</div>