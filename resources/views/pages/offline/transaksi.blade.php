<x-app-layout title="Transaksi Offline">
    <x-header-page>
        Transaksi Offline
    </x-header-page>

    <div class="row">
        <div class="col-md-9">
            <div class="card p-3">
                <div class="col-12 mb-4 d-flex justify-content-between">
                    <a href="#" class="btn btn-primary mb">Cari Produk</a>
                    <a href="#" class="btn btn-info mb">Transaksi Baru</a>
                </div>
                <small class="text-muted pl-3 mb-4">* <b>spasi</b> = simpan transaksi &nbsp; | &nbsp; <i
                        class="fa fa-arrow-up"></i> =
                    jumlah &nbsp; | &nbsp; <b>Shift</b> = diskon &nbsp; | &nbsp; <b>C</b> = pembayaran kartu &nbsp; |
                    &nbsp; <b>Esc</b> = Keluar
                </small>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-resppnsive">
                            <thead>
                                <tr>
                                    <th style="width: 150px">Kode</th>
                                    <th style="width: 150px">Id</th>
                                    <th>Nama Barang</th>
                                    <th style="width: 150px">Harga Satuan</th>
                                    <th style="width: 150px">Jumlah</th>
                                    <th style="width: 150px;font-size: 12px;">Disc (%/nominal)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="p-1"><input type="text" class="form-control ui-autocomplete-input"
                                            autocomplete="off">
                                    </td>
                                    <td class="p-1"><input type="text" class="form-control" disabled></td>
                                    <td class="p-1"><input type="text" class="form-control" disabled></td>
                                    <td class="p-1"><input type="text" class="form-control" disabled></td>
                                    <td class="p-1"><input type="text" class="form-control"></td>
                                    <td class="p-1"><input type="text" class="form-control"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12 mt-2 mb-2">
                        <div class="printableArea d-flex" style="justify-content: flex-end;">
                            <h5> No Transaksi : <span id="invoice_number">TR293237572613</span></h5>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th style="width: 50px">#</th>
                                    <th>Nama Barang</th>
                                    <th class="text-right" style="width: 150px">Harga</th>
                                    <th class="text-right" style="width: 150px">Jumlah</th>
                                    <th class="text-right" style="width: 200px;font-size: 12px;">Disc (%/nominal)</th>
                                    <th class="text-right" style="width: 150px">Subtotal</th>
                                    <th style="width: 50px"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Product Tes S</td>
                                    <td class="text-right">50.000</td>
                                    <td><input type="text" value="1" min="1" class="form-control text-right"></td>
                                    <td class="text-right"><input type="text" value="0" min="0"
                                            class="form-control text-right" disabled>
                                    </td>
                                    <td class="text-right">50.000</td>
                                    <td><button class="btn btn-danger">Hapus</button></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>DOMPET STROWBERY ALL</td>
                                    <td class="text-right">70.000</td>
                                    <td><input type="text" value="1" min="1" class="form-control text-right"></td>
                                    <td class="text-right"><input type="text" value="0" min="0"
                                            class="form-control text-right" disabled>
                                    </td>
                                    <td class="text-right">70.000</td>
                                    <td><button class="btn btn-danger">Hapus</button></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>DOMPET STROWBERY ALL</td>
                                    <td class="text-right">50.000</td>
                                    <td><input type="text" value="1" min="1" class="form-control text-right"></td>
                                    <td class="text-right"><input type="text" value="0" min="0"
                                            class="form-control text-right" disabled>
                                    </td>
                                    <td class="text-right">50.000</td>
                                    <td><button class="btn btn-danger">Hapus</button></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>JOGJA ISTIMEWA FEMALE (BIRU MUDA) M</td>
                                    <td class="text-right">80.000</td>
                                    <td><input type="text" value="1" min="1" class="form-control text-right"></td>
                                    <td class="text-right"><input type="text" value="0" min="0"
                                            class="form-control text-right" disabled>
                                    </td>
                                    <td class="text-right">80.000</td>
                                    <td><button class="btn btn-danger">Hapus</button></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>JOGJA ISTIMEWA FEMALE (BIRU MUDA) L</td>
                                    <td class="text-right">80.000</td>
                                    <td><input type="text" value="1" min="1" class="form-control text-right"></td>
                                    <td class="text-right"><input type="text" value="0" min="0"
                                            class="form-control text-right" disabled>
                                    </td>
                                    <td class="text-right">80.000</td>
                                    <td><button class="btn btn-danger">Hapus</button></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="text-right">Total Item : 5</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-3">
                <form action>
                    <div class="form-group">
                        <label for="tour_leader">Tour Leader</label>
                        <select name="tour_leader" id="tour_leader" class="p-0 form-control" data-live-search="true">
                            <option value="0">Select TL</option>
                            <option value="tl_1">TL 1</option>
                            <option value="tl_2">TL 2</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tipe_pembeli_offline">Tipe Pembeli</label>
                        <select name="tipe_pembeli_offline" id="tipe_pembeli_offline" class="form-control">
                            <option value="umum">Umum</option>
                            <option value="karyawan">Karyawan</option>
                        </select>
                        <div class="form-check mt-2" hidden>
                            <input class="form-check-input" type="checkbox" value="" id="cut_salary">
                            <label class="form-check-label" for="cut_salary">
                                Cut Salary
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama_pemebeli_offline">Nama Pembeli</label>
                        <input type="text" class="form-control" id="nama_pembeli_offline">
                    </div>
                    <div class="form-group">
                        <label for="total_offline">Total Belanja</label>
                        <input type="text" class="form-control" value="0" placeholder="0" id="total_belanja_offline"
                            disabled>
                    </div>
                    <div class="form-group">
                        <label for="diskon_offline">Diskon (% / Nominal)</label>
                        <input type="text" class="form-control" value="0" placeholder="0" id="diskon_offline">
                    </div>
                    <div class="form-group">
                        <label for="biaya_tambahan_offline">Biaya Tambahan</label>
                        <input type="text" class="form-control" value="0" placeholder="0" id="biaya_tambahan_offline">
                    </div>
                    <div class="form-group">
                        <label for="harus_dibayar_offline">Harus Dibayar</label>
                        <input type="text" class="form-control" value="0" placeholder="0" id="harus_dibayar_offline"
                            disabled>
                    </div>
                    <div class="form-group">
                        <label for="bayar_offline">Bayar</label>
                        <input type="text" class="form-control" value="0" placeholder="0" id="bayar_offline">
                    </div>
                    <div class="form-group">
                        <label for="kembalian_offline">Kemablian</label>
                        <input type="text" class="form-control" value="0" placeholder="0" id="kembalian_offline"
                            disabled>
                    </div>
                    <div class="form-group">
                        <label for="sales_offline">Sales Offline</label>
                        <select name="sales_offline" id="sales_offline" class="form-control">
                            <option value="">Anda Sendiri</option>
                            <option value="1">Sales 1</option>
                            <option value="2">Sales 2</option>
                        </select>
                    </div>
                </form>
                <button class="btn btn-info mt-2 mb-3">Simpan Transaksi</button>
                <div class="form-group">
                    <div style="float: left;padding: 7px;font-size: 12px;">Diskon : <b>[Shift]</b> |
                        Pembayaran
                        Kartu :
                        <b>[C]</b>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>