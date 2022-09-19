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

<form method="POST" action="{{ route('data.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-md-12 d-flex align-items-stretch grid-margin">
            <div class="row flex-grow">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add New Data</h4>

                            <div class="form-group{{ $errors->has('perihaldata') ? ' has-error' : '' }}">
                                <label for="judul" class="col-md-4 control-label">Perihal Data</label>
                                <div class="col-md-6">
                                    <input id="perihaldata" type="text" class="form-control" name="perihaldata"
                                        value="{{ old('perihaldata') }}" required>
                                    @if ($errors->has('perihaldata'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('perihaldata') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('subdata') ? ' has-error' : '' }}">
                                <label for="subdata" class="col-md-4 control-label">Sub Data</label>
                                <div class="col-md-6">
                                    <input id="isbn" type="text" class="form-control" name="subdata"
                                        value="{{ old('subdata') }}" required>
                                    @if ($errors->has('subdata'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('subdata') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('subsubdata') ? ' has-error' : '' }}">
                                <label for="subsubdata" class="col-md-4 control-label">Sub Sub Data</label>
                                <div class="col-md-6">
                                    <input id="subsubdata" type="text" class="form-control" name="subsubdata"
                                        value="{{ old('subsubdata') }}" required>
                                    @if ($errors->has('subsubdata'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('subsubdata') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" id="submit">
                                Submit
                            </button>
                            <button type="reset" class="btn btn-danger">
                                Reset
                            </button>
                            <a href="{{route('data.index')}}" class="btn btn-light pull-right">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</form>
@endsection
