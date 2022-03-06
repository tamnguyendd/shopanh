@extends('admin.app')
@section('title') {{ $pageTitle }} @endsection
@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-microchip"></i> {{ $pageTitle }} - {{ $subTitle }}</h1>
        </div>
    </div>
    @include('admin.partials.flash')
    <div class="row user">
        <div class="col-md-2">
            <div class="tile p-0">
                <ul class="nav flex-column nav-tabs user-tabs">
                    <li class="nav-item"><a class="nav-link active" href="#general" data-toggle="tab">General</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-10">
            <div class="tab-content">
                <div class="tab-pane active" id="general">
                    <div class="tile">
                        <form action="{{ route('admin.products.store') }}" method="POST" role="form">
                            @csrf
                            <h3 class="tile-title">Product Information</h3>
                            <hr>{{-- 
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    {{ $error }}
                                @endforeach
                            @endif --}}

                            <div class="tile-body">
                                <div class="form-group">
                                    <label class="control-label" for="name">Name</label>
                                    <input
                                        class="form-control @error('name') is-invalid @enderror"
                                        type="text"
                                        placeholder="Enter product name"
                                        id="name"
                                        name="name"
                                        value="{{ old('name') }}"
                                    />
                                    <div class="invalid-feedback active">
                                        <i class="fa fa-exclamation-circle fa-fw"></i> @error('name') <span>{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="sku">SKU</label>
                                            <input
                                                class="form-control @error('sku') is-invalid @enderror"
                                                type="text"
                                                placeholder="Enter product sku"
                                                id="sku"
                                                name="sku"
                                                value="{{ old('sku') }}"
                                            />
                                            <div class="invalid-feedback active">
                                                <i class="fa fa-exclamation-circle fa-fw"></i> @error('sku') <span>{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="brand_id">Brand</label>
                                            <select name="brand_id" id="brand_id" class="form-control @error('brand_id') is-invalid @enderror">
                                                <option value="0">Select a brand</option>
                                                @foreach($brands as $brand)
                                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                                @endforeach
                                            </select>
                                            <div class="invalid-feedback active">
                                                <i class="fa fa-exclamation-circle fa-fw"></i> @error('brand_id') <span>{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label" for="categories">Categories</label>
                                            <select name="categories[]" id="categories" class="form-control @error('categories') is-invalid @enderror" multiple>
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                            <div class="invalid-feedback active">
                                                <i class="fa fa-exclamation-circle fa-fw"></i> @error('categories') <span>{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="price">Price</label>
                                            <input
                                                class="form-control @error('price') is-invalid @enderror"
                                                type="text"
                                                placeholder="Enter product price"
                                                id="price"
                                                name="price"
                                                value="{{ old('price') }}"
                                            />
                                            <div class="invalid-feedback active">
                                                <i class="fa fa-exclamation-circle fa-fw"></i> @error('price') <span>{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="sale_price">Special Price</label>
                                            <input
                                                class="form-control"
                                                type="text"
                                                placeholder="Enter product special price"
                                                id="sale_price"
                                                name="sale_price"
                                                value="{{ old('sale_price') }}"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="quantity">Quantity</label>
                                            <input
                                                class="form-control @error('quantity') is-invalid @enderror"
                                                type="number"
                                                placeholder="Enter product quantity"
                                                id="quantity"
                                                name="quantity"
                                                value="{{ old('quantity') }}"
                                            />
                                            <div class="invalid-feedback active">
                                                <i class="fa fa-exclamation-circle fa-fw"></i> @error('quantity') <span>{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="shipping_fee">Shipping Fee</label>
                                            <input
                                                class="form-control"
                                                type="text"
                                                placeholder="Enter product shipping fee"
                                                id="weight"
                                                name="shipping_fee"
                                                value="{{ old('shipping_fee') }}"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label" for="summary">Summary</label>
                                            <input
                                                class="form-control @error('summary') is-invalid @enderror"
                                                type="text"
                                                placeholder="Enter product summary"
                                                id="weight"
                                                name="summary"
                                                value="{{ old('summary') }}"
                                            />
                                            <div class="invalid-feedback active">
                                                <i class="fa fa-exclamation-circle fa-fw"></i> @error('summary') <span>{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group @error('overview') overview-invalid @enderror">
                                    <label class="control-label" for="overview">Overview</label>
                                    <span class="text-danger"> * </span>
                                    <a href="#" data-toggle="collapse" data-target="#collapse11">
                                        <i class="icon-control fa fa-caret-down"></i>
                                    </a>
                                    <div class="collapse @error('overview') show @enderror" id="collapse11">
                                        <textarea class="ckeditor form-control" name="overview" id="overview"">{{ old('overview') }}</textarea> <!--  name="wysiwyg-editor" -->
                                    
                                    </div> <!-- collapse .// -->
                                        
                                    <div class="invalid-feedback">
                                        <i class="fa fa-exclamation-circle fa-fw"></i> @error('overview') <span>{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="form-group @error('description') overview-invalid @enderror">
                                    <label class="control-label" for="description">Description</label>
                                    <span class="text-danger"> * </span>
                                    <a href="#" data-toggle="collapse" data-target="#collapse12">
                                        <i class="icon-control fa fa-caret-down"></i>
                                    </a>
                                    <div class="collapse @error('description') show @enderror" id="collapse12">
                                        <textarea class="ckeditor form-control" name="description" id="description">{{ old('description') }}</textarea> <!--  name="wysiwyg-editor" -->
                                    </div> <!-- collapse .// -->
                                        
                                    <div class="invalid-feedback">
                                        <i class="fa fa-exclamation-circle fa-fw"></i> @error('description') <span>{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="specification">Specification</label>
                                    <a href="#" data-toggle="collapse" data-target="#collapse13">
                                        <i class="icon-control fa fa-caret-down"></i>
                                    </a>
                                    <div class="collapse" id="collapse13">
                                        <textarea class="ckeditor form-control" name="specification" id="specification">{{ old('specification') }}</textarea> <!--  name="wysiwyg-editor" -->
                                    </div> <!-- collapse .// -->
                                </div>
                                <!--
                                <div class="form-group">
                                    <label class="control-label" for="description">Description</label>
                                    <textarea name="description" id="description" rows="8" class="form-control"></textarea>
                                </div>
                                -->
                                <div class="form-group">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input"
                                                   type="checkbox"
                                                   id="status"
                                                   name="status"
                                                />Status
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input"
                                                   type="checkbox"
                                                   id="featured"
                                                   name="featured"
                                                />Featured
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="tile-footer">
                                <div class="row d-print-none mt-2">
                                    <div class="col-12 text-right">
                                        <button class="btn btn-success self_button" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save Product</button>
                                        <a class="btn btn-danger" href="{{ route('admin.products.index') }}"><i class="fa fa-fw fa-lg fa-arrow-left"></i>Go Back</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/12.3.0/classic/ckeditor.js"></script>
    
    <script>
        ClassicEditor
            .create( document.querySelector( '#overview' ) )
            .catch( error => {
                console.error( error );
            } );
        ClassicEditor
            .create( document.querySelector( '#description' ) )
            .catch( error => {
                console.error( error );
            } );
        ClassicEditor
            .create( document.querySelector( '#specification' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <script>
        $( document ).ready(function() {
            $('#categories').select2();
        });
    </script>
@endpush