@extends('layouts.userlayout')
@section('content')

        <div class="modal-body">
            <form class="form-group" action="{{ route('orders.store') }}" method="post"
                enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="form-group">Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="product_name"
                            id="product_name" placeholder="Name"
                            @error('name') is-invalid @enderror>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>


                <div class="form-group">
                    <label class="form-group">Product Description</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="product_description"
                            id="product_description" placeholder="Product Description"
                            @error('name') is-invalid @enderror>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="product_price">Preview Image1</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control" name="image"
                            @error('image') is-invalid @enderror>
                    </div>
                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="product_price">Preview Image2</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control" name="preimage2"
                            @error('preimage2') is-invalid @enderror>
                    </div>
                    @error('preimage2')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="product_price">File</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control" name="productfile"
                            @error('productfile') is-invalid @enderror>
                    </div>
                    @error('productfile')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="product_price">Product Price</label>
                    <input type="number" step="0.01" class="form-control" id="product_price"
                        name="product_price" required>

                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                <div class="form-group">
                    <label class="col-sm-3 col-form-label"></label>
                    <div class="col-sm-9">
                        <button type="submit"
                            class="btn btn-secondary btn-block text-danger">Submit</button>
                    </div>
                </div>
            </form>
        </div>

@endsection
