<x-app-layout title="Dashboard">
    <x-header-page>
        Dashboard
    </x-header-page>

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <strong>Log Activity Realtime</strong>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive table-invoice">
                        <table class="table table-striped">
                            <tr>
                                <td>2023-03-21 15:01:09</td>
                                <td class="font-weight-600">Admin CS Online mengedit transaksi offline <strong>No
                                        CS93230014231
                                    </strong></td>
                            </tr>
                            <tr>
                                <td>2023-03-10 16:36:12</td>
                                <td class="font-weight-600">Admin Bos Muda mengganti status Admin atas nama CS AJENG
                                    menjadi tidak aktif</td>
                            </tr>
                            <tr>
                                <td>2023-03-17 02:43:12</td>
                                <td class="font-weight-600">Admin cso melakukan login ke sistem</td>
                            </tr>
                            <tr>
                                <td>2023-02-21 23:43:54</td>
                                <td class="font-weight-600">Admin bima melakukan login ke sistem</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-hero">
                <div class="card-header">
                    <div class="card-icon">
                        <i class="far fa-question-circle"></i>
                    </div>
                    <h4>Hi, Ujang Maman</h4>
                    <div class="card-description">{{ now()->format('d') }}
                        {{ now()->format('F') }}
                        {{ now()->year }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>