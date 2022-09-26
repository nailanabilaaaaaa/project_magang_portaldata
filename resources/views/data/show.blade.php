@section('js')

<script type="text/javascript">
    $(document).ready(function () {
        $(".users").select2();
    });

</script>

<script type="text/javascript">
    function readURL() {
        var input = this;
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $(input).prev().attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $(function () {
        $(".uploads").change(readURL)
        $("#f").submit(function () {
            // do ajax submit or just classic form submit
            //  alert("fake subminting")
            return false
        })
    })

</script>
@stop

@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-12 d-flex align-items-stretch grid-margin">
        <div class="row flex-grow">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Detail Data - <b>{{$data->perihaldata}}</b> </h4>
                        <form class="forms-sample">

                            <div class="form-group{{ $errors->has('perihaldata') ? ' has-error' : '' }}">
                                <label for="perihaldata" class="col-md-4 control-label">Perihal Data</label>
                                <div class="col-md-6">
                                    <input id="judul" type="text" class="form-control" name="perihaldata"
                                        value="{{ $data->perihaldata }}" readonly="">
                                    @if ($errors->has('perihaldata'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('perihaldata') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        <a href="{{route('data.index')}}" class="btn btn-light pull-right">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
