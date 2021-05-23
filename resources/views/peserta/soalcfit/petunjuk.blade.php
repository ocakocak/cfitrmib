<div class="w-100 d-flex justify-content-center  align-items-center" style="height: 100vh;">
    <div class="card w-50">
        <div class="card-header">
            <h3><strong>Petunjuk CFIT {{ $var }}</strong></h3>
        </div>
        <div class="card-body">
            {{ $petunjuk->petunjuk_subtes }}
        </div>
        <div class="card-footer">
            <a href="{{ route('pindah.soal', $petunjuk->id_subtes) }}"
                class="btn btn-primary float-right">Lanjut</button>
            </a>
        </div>
    </div>
</div>

<div style="margin-top: 20px; margin-bottom: 20px">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-success box-solid" style="border-block-color: black">
                <center>
                    <p id="demo"></p>
                </center>
                <center>
                    <p id="tes"></p>
                </center>
                <div class="box-header" style="background-color: #87CEFA">
                    <center>
                        <h3>PETUNJUK CFIT TES {{ $var }}</h3>
                    </center>
                    <div class="box-body" style="overflow-y: scroll;height: 100px;background-color: #F0F8FF">
                        {{ $petunjuk->petunjuk_subtes }}
                    </div>
                    <br>
                    <a href="{{ route('pindah.soal', $petunjuk->id_subtes) }}" class="btn btn-sm btn-primary"
                        style="color: white; cursor: pointer;float: right;">Lanjut Tes </a>
                    <br>
                    <br>
                </div>
            </div>
        </div>


        </section><!-- /.content -->
    </div>
</div>
