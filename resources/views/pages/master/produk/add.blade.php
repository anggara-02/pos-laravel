<x-app-layout title="Input Produk">
    <x-header-page>
        Input Produk
    </x-header-page>

    <div class="row">
        <div class="col-sm-7">
            <div class="card" style="border-radius: 7px;">
                <div class="card-header">
                    <h4>General</h4>
                </div>
                <div class="card-body">
                    <form class="form-floating" method="POST" action="{{ route('produk.store') }}">
                        @csrf
                        <div class="form-group row">
                            <label class="col-form-label ml-3 for=" tanggal_input">Tanggal
                                Input </label>
                            <div class="col-sm-12">
                                <input id="tanggal_input" name="tanggal_input" type="text" class="form-control"
                                    value="12 September 2005" disabled>
                                <div class="invalid-feedback">
                                    Tanggal Input
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label ml-3" for="category_product">Category
                                Produk</label>
                            <div class="col-sm-12">
                                <input id="category_product" name="category_product" type="text"
                                    class="form-control @error('category_product') is-invalid @enderror"
                                    value="{{ old('category_product') }}">
                                @error('category_product')
                                <div class="invalid-feedback">
                                    <span class="text-danger">{{ $message }}</span>
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label ml-3" for="name_product">Nama
                                Produk</label>
                            <div class="col-sm-12">
                                <input id="name_product" name="name_product" type="text"
                                    class="form-control mb-2 @error('name_product') is-invalid @enderror"
                                    value="{{ old('name_product')}}">
                                @error('name_product')
                                <div class="invalid-feedback">
                                    <span class="text-danger">{{ $message }}</span>
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label ml-3" for="price_product">Harga
                                Produk (HPP)</label>
                            <div class="col-sm-12">
                                <input id="price_product" name="price_product" type="text"
                                    class="form-control @error('price_product') is-invalid @enderror"
                                    value="{{ old('price_product') }}" placeholder="0" value="0">
                                @error('price_product')
                                <div class="invalid-feedback">
                                    <span class="text-danger">{{ $message }}</span>
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label ml-3" for="price_sale_product">Harga
                                Jual</label>
                            <div class="col-sm-12">
                                <input id="price_sale_product" name="price_sale_product" type="text"
                                    class="form-control @error('price_sale_product') is-invalid @enderror"
                                    value="{{ old('price_sale_product') }}" placeholder="0" value="0">
                                @error('price_sale_product')
                                <div class="invalid-feedback">
                                    <span class="text-danger">{{ $message }}</span>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <!-- <div class="form-group row">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Variant Size</label>
                            <div class="col-sm-12 col-md-6">
                                <select
                                    class="form-select @error('tags_product') is-invalid @enderror tags_productAdd form-control p-1"
                                    name="tags_product[]" id="tags_productAdd" multiple="multiple" style="width: 100%;">

                                    @foreach ($product_size as $key => $val)
                                    <option value="{{ $val->id}}"
                                        {{ (collect(old("tags_product"))->contains($val->id)) ? "selected" : "" }} />
                                    {{ $val->size }}</option>
                                    @endforeach

                                </select>

                                @error('tags_product')
                                <div class="invalid-feedback">
                                    <span class="text-danger">{{ $message }}</span>
                                </div>
                                @enderror
                            </div>
                            <div class="p-0">
                                <button class="btn btn-info" type="button">Tambah</button>
                            </div>
                        </div> -->

                        <div class="form-group row">
                            <label class="col-form-label ml-3">Variant Size</label>
                            <div class="input-group col-sm-12">
                                <input type="text" class="form-control" placeholder="Add variant"
                                    aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-info" type="button" id="add_variant">Add</button>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12">
                                <table class="table table-sm">
                                    <thead>
                                        <tr style="text-align:center;">
                                            <th>Action</th>
                                            <th width="15%">Variant</th>
                                            <th>Stock</th>
                                            <th>Price(Rp.)</th>
                                            <th>Price Selling(Rp.)</th>
                                            <th>Disc(%)</th>
                                            <th>Weight(gr)</th>
                                        </tr>
                                    </thead>
                                    <tbody id="table_variant">

                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- <div class="form-group row">
                            <label class="col-form-label ml-3" for="qty_product">Jumlah
                                Produk</label>
                            <div class="col-sm-12">
                                <input id="qty_product" name="qty_product" type="number"
                                    class="form-control @error('qty_product') is-invalid @enderror" min="1"
                                    placeholder="Minimal 1">
                                @error('qty_product')
                                <div class="invalid-feedback">
                                    <span class="text-danger">{{ $message }}</span>
                                </div>
                                @enderror
                            </div>
                        </div> -->
                        <div class="card-footer text-right col-sm-12 pr-0">
                            <button class="btn btn-primary" type="submit">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-5">
            <div class="card">
                <div class="card-header">
                    <h4>Supplier</h4>
                </div>
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>

    <!-- Javascript -->
    @push('custom-js')
    <script src="{{ asset('assets/js/produk/produk-add.js') }}"></script>
    @endpush
</x-app-layout>