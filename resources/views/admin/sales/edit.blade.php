@extends('admin.app')
@section('title') {{ $pageTitle }} @endsection
@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-birthday-cake"></i> {{ $pageTitle }}</h1>
        </div>
    </div>
    @include('admin.partials.flash')
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="tile">
                <h3 class="tile-title">{{ $subTitle }}</h3>
                <form action="{{ route('admin.sales.update') }}" method="POST" role="form">
                    @csrf
                    <div class="tile-body">
                        <div class="form-group">
                            <label class="control-label" for="title">Title <span class="m-l-5 text-danger"> *</span></label>
                            <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" id="title" value="{{ old('title', $sale->title) }}"/>
                            <input type="hidden" name="id" value="{{ $sale->id }}">
                            @error('title') {{ $message }} @enderror
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label" for="sale_exp">Expiry Date <span class="m-l-5 text-danger"> *</span></label>
                            <input class="form-control @error('sale_exp') is-invalid @enderror" type="text" name="sale_exp" id="sale_exp" value="{{ old('sale_exp', $sale->sale_exp) }}"/>
                            @error('sale_exp') {{ $message }} @enderror
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="description">Description </label>
                            <textarea class="form-control" rows="4" name="description" id="description">{{ old('description', $sale->description) }}</textarea>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" id="active" name="active" {{ $sale->active == 1 ? 'checked' : '' }}/>Show this event in Homepage
                                </label><br>
                                <small class="text-danger">Notes: If this event is actived, all of the others will be invalid.<br>
                                The event will be not shown in homepage if expiry date over, even though 「Show this event in Homepage」is on.</small>
                            </div>
                        </div>

                    </div>
                    <div class="tile-footer">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save Sale Event</button>
                        &nbsp;&nbsp;&nbsp;
                        <a class="btn btn-secondary" href="{{ route('admin.sales.index') }}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('backend/css/bootstrap-datetimepicker.min.css') }}">
@endpush
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment.min.js" type="text/javascript"></script>
    <script src="{{ asset('backend/js/plugins/bootstrap-datetimepicker.min.js') }}?dt=2021082424"></script>
    <script type="text/javascript">
        $(function () {
            $('#sale_exp').datetimepicker({
                format:'Y-M-D H:m:s'
            });
        });
    </script>
@endpush