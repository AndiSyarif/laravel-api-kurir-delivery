@extends('template.main')
@section('title', 'Ongkos Kirim')
@section('content')

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">@yield('title')</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">@yield('title')</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-md-12 d-flex">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="text-center">
                                        <b>Asal / Origin</b>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="province">Provinsi</label>
                                                <select name="province"
                                                    class="form-control select2bs4 select2-hidden-accessible @error('province') is-invalid @enderror"
                                                    id="origin_province" required>
                                                    <option value="">Select Province</option>
                                                </select>
                                                @error('province')
                                                    <span class="invalid-feedback text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="city">Kabupaten / Kota</label>
                                                <select name="city"
                                                    class="form-control @error('city') is-invalid @enderror"
                                                    id="origin_city" required>
                                                    <option value="">Select City</option>
                                                </select>
                                                @error('city')
                                                    <span class="invalid-feedback text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="text-center">
                                        <b>Tujuan / Destination</b>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="province">Provinsi</label>
                                                <select name="province"
                                                    class="form-control @error('province') is-invalid @enderror"
                                                    id="destination_province" required>
                                                    <option value="">Select Province</option>
                                                </select>
                                                @error('province')
                                                    <span class="invalid-feedback text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="city">Kabupaten / Kota</label>
                                                <select name="city"
                                                    class="form-control @error('city') is-invalid @enderror"
                                                    id="destination_city" required>
                                                    <option value="">Select City</option>
                                                </select>
                                                @error('city')
                                                    <span class="invalid-feedback text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="weight">Berat Barang / Weight (gram)</label>
                                            <input type="number" min="1" name="weight" id="weight"
                                                class="form-control @error('weight') is-invalid @enderror" required>
                                            @error('weight')
                                                <span class="invalid-feedback text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="courier">Kurir / Courier</label>
                                            <select name="courier"
                                                class="form-control @error('courier') is-invalid @enderror" id="courier">
                                                <option value="">Select Courier</option>
                                                <option value="jne">JNE</option>
                                                <option value="pos">POS</option>
                                                <option value="tiki">TIKI</option>
                                            </select>
                                            @error('courier')
                                                <span class="invalid-feedback text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <button class="btn btn-dark mr-1" type="button" id="reset"><i
                                    class="fa-solid fa-arrows-rotate"></i>
                                Reset</button>
                            <button class="btn btn-success" type="button" id="cekcost"><i
                                    class="fa-solid fa-floppy-disk"></i>
                                Process</button>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <div class="text-center">
                                    <b>Hasil / Result</b>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-hover table-bordered table-striped text-center">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Courier</th>
                                            <th>Service</th>
                                            <th>Cost</th>
                                            <th>Estime Time Delivery</th>
                                        </tr>
                                    </thead>
                                    <tbody id="container_courir">
                                        
                                    <tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /.content -->
                </div>
                <!-- /.content -->
            </div>
        </div>
    </div>

    <script>
        //get origin and destination province
        $(document).ready(function() {

            $.ajax({
                url: '/getprovince',
                method: 'GET',
                success: function(response) {
                    if (response.rajaongkir.results) {

                        response.rajaongkir.results.forEach(function(result) {

                            var container = '<option value="' + result.province_id + '">' +
                                result.province +
                                '</option>';
                            $('#origin_province').append(container);
                            $('#destination_province').append(container);
                        });

                    }

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error('Error:', textStatus, errorThrown);
                }
            });

            // get origin city 
            $('#origin_province').change(function() {
                var origin_province = $('#origin_province').val();
                $('#origin_city').empty();
                $('#origin_city').append('<option value="">Select City</option>');

                $.ajax({
                    url: '/getorigincity',
                    method: 'GET',
                    data: {
                        province_id: origin_province
                    },
                    success: function(response) {
                        if (response.rajaongkir.results) {

                            response.rajaongkir.results.forEach(function(result) {

                                var container = '<option value="' + result.city_id +
                                    '">' + result.city_name +
                                    '</option>';
                                $('#origin_city').append(container);
                            });

                        }

                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.error('Error:', textStatus, errorThrown);
                    }

                });

            });

            // get destination city 
            $('#destination_province').change(function() {
                var destination_province = $('#destination_province').val();
                $('#destination_city').empty();
                $('#destination_city').append('<option value="">Select City</option>');

                $.ajax({
                    url: '/getdestinationcity',
                    method: 'GET',
                    data: {
                        province_id: destination_province
                    },
                    success: function(response) {
                        if (response.rajaongkir.results) {

                            response.rajaongkir.results.forEach(function(result) {

                                var container = '<option value="' + result.city_id +
                                    '">' + result.city_name +
                                    '</option>';
                                $('#destination_city').append(container);
                            });

                        }

                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.error('Error:', textStatus, errorThrown);
                    }

                });

            });

            // cek cost
            $('#cekcost').click(function() {

                var origin_city = $('#origin_city').val();
                var destination_city = $('#destination_city').val();
                var weight = $('#weight').val();
                var courier = $('#courier').val();
                var token = $("meta[name='csrf-token']").attr("content");

                $('#container_courir').empty();

                if (!origin_province) {
                    alert('Province Origin cant empty');
                    return false
                }
                if (!origin_city) {
                    alert('City Origin cant empty');
                    return false
                }

                if (!destination_province) {
                    alert('Province Destination cant empty');
                    return false
                }
                if (!destination_city) {
                    alert('City Destination cant empty');
                    return false
                }

                if (!weight) {
                    alert('Wight Origin cant empty');
                    return false
                }

                if (!courier) {
                    alert('Courier Origin cant empty');
                    return false
                }

                if (origin_city && destination_city && weight && courier) {
                    $.ajax({
                        url: '/getcost',
                        method: 'POST',
                        data: {
                            origin: origin_city,
                            destination: destination_city,
                            weight: weight,
                            courier: courier
                        },
                        headers: {
                            'X-CSRF-TOKEN': token
                        },
                        success: function(response) {
                            if (response.rajaongkir.results) {

                                var index = 1;

                                response.rajaongkir.results.forEach(function(result) {

                                    result.costs.forEach(function(cost) {

                                        var container =
                                        '<tr>' +
                                            '<td>' + index++ + '</td><td>' +
                                            result
                                            .name + '</td><td>' + cost
                                            .service + '</td><td>' + 'Rp. ' + cost.cost[
                                                0].value.toLocaleString() + '</td><td>' + cost
                                            .cost[0].etd + '</td>' +
                                        '</tr>';
                                        $('#container_courir').append(
                                            container);
                                    });

                                });
                            }
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            console.error('Error:', textStatus, errorThrown);
                        }

                    });
                }

            });

            $('#reset').click(function() {
                location.reload();
            })
        });
    </script>

@endsection
