@extends('panel.layouts.app')

@section('title', 'Panel - Cadastrar Dica')

@section('main')

    <div class="row">
        <div class="col-12">
            <a href="{{ route('panel.tips') }}" class="btn btn-header indigo-hover">
                <i class="fas fa-list"></i> <span>Dicas</span>
            </a><!-- .btn-header -->
            <a href="{{ route('panel.tips.create') }}" class="btn btn-header blue-hover">
                <i class="fas fa-plus"></i> <span>Cadastrar</span>
            </a><!-- .btn-header -->
        </div><!-- .col-12 -->
    </div><!-- .row -->
    
    <form action="{{ route('panel.tips.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Cadastrar Dica</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool">
                                <a href=""><i class="fas fa-sync-alt"></i></a>
                            </button><!-- .btn-tool -->
                        </div><!-- .card-tools -->
                    </div><!-- .card-header -->
                    <div class="card-body">

                        <div class="row">

                            <div class="col-xl-6">
                                <div class="form-group ">
                                    <label class="form-label" for="inputVehicle">Veículo</label>
                                    <select name="vehicle" class="form-control @error('vehicle') is-invalid @enderror" id="inputVehicle">
                                        <option value="">Selecione</option>
                                        @foreach ($vehicles as $vehicle)
                                            <option {{ old('vehicle') == $vehicle->id ? 'selected' : '' }} value="{{ $vehicle->id }}">{{ __($vehicle->vehicle) }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">{{ $errors->first('vehicle') }}</div>
                                </div><!-- .form-group -->
                            </div><!-- .col-xl-6 -->

                            <div class="col-xl-6">
                                <div class="form-group ">
                                    <label class="form-label" for="inputBrand">Marca</label>
                                    <select name="brand" class="form-control @error('brand') is-invalid @enderror" id="inputBrand">
                                        <option value="">Selecione</option>
                                    </select><!-- .form-control -->
                                    <div class="invalid-feedback">{{ $errors->first('brand') }}</div>
                                </div><!-- .form-group -->
                            </div><!-- .col-xl-6 -->

                            <div class="col-xl-6">
                                <div class="form-group ">
                                    <label class="form-label" for="inputModel">Modelo</label>
                                    <select name="model" class="form-control @error('model') is-invalid @enderror" id="inputModel">
                                        <option value="">Selecione</option>
                                    </select><!-- .form-control -->
                                    <div class="invalid-feedback">{{ $errors->first('model') }}</div>
                                </div><!-- .form-group -->
                            </div><!-- .col-xl-6 -->

                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label for="inputVersion" class="form-label">Versão</label>
                                    <input type="text" name="version" class="form-control @error('version') is-invalid @enderror" value="{{ old('version') }}" id="inputVersion">
                                    <div class="invalid-feedback">{{ $errors->first('version') }}</div>
                                </div><!-- .form-group -->
                            </div><!-- .col-xl-6 -->

                            <div class="col-xl-12">
                                <label for="inputTip">Dica</label>
                                <textarea name="tip" class="form-control @error('tip') is-invalid @enderror" rows="5" id="inputTip">{{ old('tip') }}</textarea>
                                <div class="invalid-feedback">{{ $errors->first('tip') }}</div>
                            </div><!-- col-xl-12 -->
                        </div><!-- .row -->

                    </div><!-- .card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-block btn-primary">Salvar</button>
                    </div><!-- bard-footer -->

                </div><!-- .card -->
            </div><!-- .col-xl-12 -->
        </div><!-- .row -->
    </form>

@endsection

@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

            // SELECT OLD BRANDS OF VEHICLE
            var OldVehicle = '{{ old('vehicle') }}';
            if (OldVehicle !== '') {
                var vehicle = OldVehicle;
                var brand = '{{ old('brand') }}';
                $("#inputBrand").html('');
                $.ajax({
                    url: "{{ route('panel.tips.fetch.brand') }}",
                    type: "POST",
                    data: {
                        vehicle: vehicle,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(result) {
                        $('#inputBrand').html('<option value="">Selecione</option>');
                        $.each(result, function(key, value) {
                            $("#inputBrand").append('<option value="' + value.id + '">' + value.brand + '</option>');
                        });
                        $("#inputBrand").val(brand);
                    }
                });
            }

            // SELECT  BRANDS OF VEHICLE
            $('#inputVehicle').on('change', function() {
                var vehicle = this.value;
                $("#inputBrand").html('');
                $.ajax({
                    url: "{{ route('panel.tips.fetch.brand') }}",
                    type: "POST",
                    data: {
                        vehicle: vehicle,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(result) {
                        $('#inputBrand').html('<option value="">Selecione</option>');
                        $.each(result, function(key, value) {
                            $("#inputBrand").append('<option value="' + value.id + '">' + value.brand + '</option>');
                        });
                    }
                });
            });

            // SELECT OLD MODELS OF VEHICLE AND BRAND
            var OldBrand = '{{ old('brand') }}';
            if (OldBrand !== '') {
                var brand = OldBrand;
                var model = '{{ old('model') }}';
                $("#inputBrand").html('');
                $.ajax({
                    url: "{{ route('panel.tips.fetch.model') }}",
                    type: "POST",
                    data: {
                        vehicle: vehicle,
                        brand: brand,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(result) {
                        $('#inputModel').html('<option value="">Selecione</option>');
                        $.each(result, function(key, value) {
                            $("#inputModel").append('<option value="' + value.id + '">' + value.model + '</option>');
                        });
                        $("#inputModel").val(model);
                    }
                });
            }

            // SELECT MODELS OF VEHICLE AND BRAND
            $('#inputBrand').on('change', function() {
                var vehicle = $('#inputVehicle').val();
                var brand = this.value;
                $("#inputModel").html('');
                $.ajax({
                    url: "{{ route('panel.tips.fetch.model') }}",
                    type: "POST",
                    data: {
                        vehicle: vehicle,
                        brand: brand,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(result) {
                        $('#inputModel').html('<option value="">Selecione</option>');
                        $.each(result, function(key, value) {
                            $("#inputModel").append('<option value="' + value.id + '">' + value.model + '</option>');
                        });
                    }
                });
            });
        });
    </script>
@endsection
