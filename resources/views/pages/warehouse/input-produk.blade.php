@push('custom-css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">
@endpush
<x-app-layout title="List Produk">
    <x-header-page>
        List Produk
    </x-header-page>

    <!-- Alert -->
    @if(Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ Session::get('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @elseif(Session::has('warning'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ Session::get('warning') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <!-- Alert message (end) -->

    <div class="row">
        <div class="col-md-12">
            <div class="card p-3" style="border-radius: 7px;">
                <div class="col-12 mb-4 d-flex">
                    <a href="{{ url('produk/create')}}" class="btn btn-primary">Tambah
                        Produk</a>
                    <!-- <button class="btn btn-primary" data-toggle="modal" data-target="#modalInputProduk">Tambah
                        Produk</button> -->

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <table id="table-produk" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Kategori Produk</td>
                                    <td>Kode Produk</td>
                                    <td>Nama Produk</td>
                                    <td>Harga Produk</td>
                                    <td>Variant</td>
                                    <td>Stok</td>
                                    <td class="text-center">Action</td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal Add -->
    <div class="modal fade" tabindex="-1" role="dialog" id="modalInputProduk">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Input Produk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="produk">
                        @csrf
                        <div class="form-group">
                            <label for="kategori" class="col-form-label">Kategori</label>
                            <input type="text" class="form-control @error('kategori') is-invalid @enderror"
                                name="kategori" value="{{ old('kategori')}}">
                            @error('kategori')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama-produk" class="col-form-label">Nama Produk</label>
                            <input type="text" class="form-control @error('produk_name') is-invalid @enderror"
                                name="produk_name" value="{{old('produk_name')}}">
                            @error('produk_name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="harga-produk" class="col-form-label">Harga Produk</label>
                            <input type="text" class="form-control @error('produk_price') is-invalid @enderror"
                                name="produk_price" value="{{old('produk_price')}}">
                            @error('produk_price')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tags" class="col-form-label">Tags</label>
                            <select class="form-control is-invalid tagsInputAdd" name="produk_variant[]"
                                id="tagsInputAdd" multiple="multiple" style="width: 100%;">
                                <option value="S">S</option>
                                <option value="M">M</option>
                                <option value="L">L</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                            </select>
                            <!-- <input type="text" id="tagsInput" data-role="tagsinput" class="form-control inputtags"
                                name="produk-variant" value="{{old('produk-variant')}}"> -->
                            <small>S, M, L, XL</small>
                            @error('produk_size')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama-produk" class="col-form-label">Jumlah Produk</label>
                            <input type="number" class="form-control @error('produk_qty') is-invalid @enderror"
                                name="produk_qty" value="{{old('produk_qty')}}">
                            @error('produk_qty')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="modal-footer p-0">
                            <button type="button" class="btn btn-secondary m-2" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" id="simpan_data" value="Simpan Data"></input>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit -->
    <div class="modal fade" tabindex="-1" role="dialog" id="modalEditProduk">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Edit Produk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form_edit" method="POST" action="">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="kategori" class="col-form-label">Kategori</label>
                            <input type="text" class="form-control @error('kategori') is-invalid @enderror"
                                id="kategori_edit" name="kategori" value="{{ old('kategori')}}">
                            @error('kategori')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama-produk" class="col-form-label">Nama Produk</label>
                            <input type="text" class="form-control @error('produk_name') is-invalid @enderror"
                                id="nama_produk_edit" name="produk_name" value="{{old('produk_name')}}">
                            @error('produk_name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="harga-produk" class="col-form-label">Harga Produk</label>
                            <input type="number" class="form-control @error('produk_price') is-invalid @enderror"
                                id="harga_produk_edit" name="produk_price" value="{{old('produk_price')}}">
                            @error('produk_price')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tagsinputEdit" class="col-form-label">Tags</label>
                            <select class="form-control" name="produk_variant[]" multiple="multiple" id="tagsinputEdit"
                                style="width: 100%;">
                                <option value="S">S</option>
                                <option value="M">M</option>
                                <option value="L">L</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                            </select>
                            <small>S, M, L, XL</small>
                        </div>
                        <div class="form-group">
                            <label for="nama_produk" class="col-form-label">Jumlah Produk</label>
                            <input min="1" type="number" class="form-control @error('produk_qty') is-invalid @enderror"
                                id="jumlah_produk_edit" name="produk_qty" value="{{old('produk_qty')}}">
                            @error('produk_qty')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="modal-footer p-0">
                            <button type="button" class="btn btn-secondary m-2" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" value="Update Data">Update Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Javascript -->
    @push('custom-js')
    <script src="{{ asset('assets/modules/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
    <script src='https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js'></script>

    <script type="text/javascript">
    $(document).ready(function() {
        $("#tagsInputAdd").select2();

        $("#tagsInputAdd").select2({
            tags: true,
            tokenSeparators: [',', ' '],
        });

        // Load Function
        LoadData();
        editData();
    })

    // Funtion Here
    function editData() {
        $('body').on('click', '.editProduk', function() {
            var id = $(this).data('id');
            $.ajax({
                url: "{{ url('produk') }}" + '/' + id + '/edit',
                dataType: 'JSON',
                success: function(data) {
                    $('#form_edit').attr('action', "{{ url('produk') }}" + '/' + id);
                    $("#modalEditProduk").modal('show');

                    let arrValue = [];
                    data.product_size.split((/[\s,]+/)).forEach(res => {
                        let setValue = res.toUpperCase();
                        arrValue.push(setValue);
                        if ($('#tagsinputEdit').find('option[value="' + setValue +
                                '"]').length <= 0) {
                            $('#tagsinputEdit').append(`<option value="${setValue}">
                                       ${setValue}
                                  </option>`);
                        }
                    });

                    $('#tagsinputEdit').val(arrValue);
                    $('#tagsinputEdit').trigger(
                        'change');

                    $("#tagsinputEdit").select2({
                        tags: true,
                        tokenSeparators: [',', ' '],
                    });

                    $("#kategori_edit").val(data.product_category_name);
                    $(
                        "#nama_produk_edit").val(data.product_name);
                    $("#harga_produk_edit")
                        .val(data.product_price.split('.')[0]);
                    $("#harga_produk_edit").val(
                        format($("#harga_produk_edit").val()));
                },

            });
        });
    }

    $(function() {
        $("#harga_produk_edit").keyup(function(e) {
            $(this).val(format($(this).val()));
        });
    });

    var format = function(num) {
        var str = num.toString().replace("", ""),
            parts = false,
            output = [],
            i = 1,
            formatted = null;
        if (str.indexOf(".") > 0) {
            parts = str.split(".");
            str = parts[0];
        }
        str = str.split("").reverse();
        for (var j = 0, len = str.length; j < len; j++) {
            if (str[j] != ",") {
                output.push(str[j]);
                if (i % 3 == 0 && j < (len - 1)) {
                    output.push(",");
                }
                i++;
            }
        }
        formatted = output.reverse().join("");
        return ("" + formatted + ((parts) ? "." + parts[1].substr(0, 2) : ""));
    };

    function LoadData() {
        $('#table-produk').DataTable({
            processing: false,
            serverSide: true,
            ajax: '{{ url()->current() }}',
            order: [
                // [0, 'asc']
            ],
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false,
                    width: '10px'
                },
                {
                    data: 'product_category_name',
                    name: 'product_category_name',
                    width: '100px',
                    searchable: true
                },
                {
                    data: 'produk_sku_id',
                    name: 'produk_sku_id',
                    orderable: false
                },
                {
                    data: 'product_name',
                    name: 'product_name',
                    orderable: true,
                    searchable: true
                },
                {
                    data: 'product_price',
                    name: 'product_price',
                    searchable: false
                },
                {
                    data: 'product_size',
                    name: 'product_size',
                    width: '100px',
                    orderable: false,
                    searchable: false,
                    className: 'dt-body-right'
                },
                {
                    data: 'product_stock',
                    name: 'product_stock',
                    width: '50px',
                    orderable: true,
                    searchable: false,
                    className: 'dt-body-right'
                },
                {
                    data: 'action',
                    name: 'action',
                    width: '200px',
                    orderable: false,
                    searchable: false,
                    className: 'dt-body-center'
                }
            ]
        });
    }

    // Jika terdapat error di form -> open modal
    @if(count($errors) > 0) $('#modalInputProduk').modal('show');
    @endif
    </script>
    @endpush
</x-app-layout>