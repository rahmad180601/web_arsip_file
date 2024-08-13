@extends('admin.page.master')
@section('content')
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-sm-6">
                <h3>Daftar Arsip</h3>
            </div>
            <div class="col-12 col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"> <i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Admin</li>
                    <li class="breadcrumb-item active">Daftar Arsip</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 project-list">
            <div class="card">
                <div class="row">
                    <div class="col-md-6 p-0">
                        <ul class="nav nav-tabs border-tab" id="top-tab" role="tablist">
                            <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-bs-toggle="tab" href="#top-home" role="tab" aria-controls="top-home" aria-selected="true" onclick="filterTable('all')"><i data-feather="target"></i>All</a></li>
                            {{-- <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-bs-toggle="tab" href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="false" onclick="filterTable('lunas')"><i data-feather="check-circle"></i> Lunas</a></li>
                            <li class="nav-item"><a class="nav-link" id="profile-top-tab" data-bs-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="false" onclick="filterTable('belum_lunas')"><i data-feather="info"></i>Belum Lunas</a></li> --}}
                        </ul>
                    </div>
                    <div class="col-md-6 p-0">
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#tambah_arsip" style="margin-left: 16px;">
                            <i data-feather="plus-square"></i> Create New
                        </button>
                        
                        <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#import_arsip">
                            <i data-feather="plus-square"></i> Import Data
                        </button>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="col-md-12 project-list">
            <div class="card">
                <div class="row d-sm-flex align-items-center justify-content-between">
                    <div class="col-md-4 p-0">
                        <div class="mb-3">
                            <label for="">Filter</label>
                            <select name="id_warung" id="filter_warung" style="color: #000"  class="form-control" required="">
                                <option value="">-- Pilih Warung --</option>
                                @foreach ($warung as $item)
                                    <option value="{{$item->id}}">{{$item->nama_warung}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-8 p-0" style="text-align: right">
                        <div class="form-group mb-0 me-0 subtot" style="font-weight: bold; font-size:20px;">Rp{{ number_format($pendapatan,  0, ',', '.') }}</div>
                    </div>
                </div>
            </div>
        </div> --}}
    
        <div class="col-sm-12">
            @if (session('success'))
            <div class="alert alert-success dark alert-dismissible fade show" role="alert"><strong>Berhasil ! </strong>
                {{ session('success') }}
                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            @if (session('error'))
            <div class="alert alert-danger dark alert-dismissible fade show" role="alert"><strong>Gagal ! </strong>
                {{ session('error') }}
                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            @endif
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="basic-1">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Rak</th>
                                    <th scope="col">Boks</th>
                                    <th scope="col">Indexs</th>
                                    <th scope="col">Kecamatan</th>
                                    <th scope="col">Tahun</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody id="table-body">
                                
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
{{-- impot arsip --}}
<div class="modal fade" id="import_arsip" tabindex="-1" role="dialog" aria-labelledby="import_arsip"
    aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">

            <form action="{{ route('arsip.import') }}" method="POST" class="needs-validation" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">Tambah Daftar Arsip</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form theme-form projectcreate">
                        <div class="row">
                            <div class="col-6 col-sm-6">
                                <div class="mb-3">
                                    <label for="">Import File</label>
                                    <input type="file" class="form-control" name="file" id="file" style="color: #000" >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- Tambah Arsip --}}
<div class="modal fade" id="tambah_arsip" tabindex="-1" role="dialog" aria-labelledby="tambah_arsip"
    aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">

            <form action="{{ route('arsip.store') }}" method="POST" class="needs-validation" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">Tambah Daftar Arsip</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form theme-form projectcreate">
                        <div class="row">
                            <div class="col-6 col-sm-6">
                                {{-- <div class="mb-3">
                                    <label for="">Nama Warung</label>
                                    <select name="id_warung" id="id_warung" style="color: #000"  class="form-control" required="">
                                        <option value="">-- Pilih Warung --</option>
                                        @foreach ($warung as $item)
                                            <option value="{{$item->id}}" data-type="{{$item->type_warung}}">{{$item->nama_warung}}</option>
                                        @endforeach
                                    </select>
                                </div> --}}
                                <div class="mb-3">
                                    <label for="">Rak</label>
                                    <input type="text" class="form-control" name="rak" id="rak"
                                        placeholder="Masukkan Data Rak" style="color: #000" >
                                    <div class="invalid-feedback">Data Rak tidak boleh kosong.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="">Boks</label>
                                    <input type="text" class="form-control" name="boks" id="boks"
                                        placeholder="Masukkan Data Boks" style="color: #000" >
                                    <div class="invalid-feedback">Data Boks tidak boleh kosong.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="">Indeks</label>
                                    <input type="text" class="form-control" name="indeks" id="indeks"
                                        placeholder="Masukkan Data Indeks" style="color: #000" >
                                    <div class="invalid-feedback">Data Indeks tidak boleh kosong.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="">Uraian Masalah</label>
                                    <textarea class="form-control" name="masalah" id="masalah"
                                    placeholder="Masukkan Uraian Masalah" style="color: #000"></textarea>
                                    <div class="invalid-feedback">Uraian Masalah tidak boleh kosong.</div>
                                </div>
                             
                                {{-- <div class="mb-3">
                                    <label for="">Harga</label>
                                    <input type="text" class="form-control" name="harga" id="harga"
                                        style="color: #000" disabled>
                                    <div class="invalid-feedback">Harga Penjualan tidak boleh kosong.</div>
                                </div> --}}
                            </div>
                            <div class="col-6 col-sm-6">
                                <div class="mb-3">
                                    <label for="">Kecamatan</label>
                                    <input type="text" class="form-control" name="kecamatan" id="kecamatan"
                                        placeholder="Masukkan Data Kecamatan" style="color: #000">
                                    <div class="invalid-feedback">Data Kecamatan tidak boleh kosong.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="tahun">Tahun</label>
                                    <select class="form-control" name="tahun" id="tahun" style="color: #000" required>
                                        
                                    </select>
                                    <div class="invalid-feedback">Tahun Arsip tidak boleh kosong.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="">File Arsip</label>
                                    <input type="file" class="form-control" name="file_arsip" id="file_arsip"
                                         style="color: #000">
                                    <div class="invalid-feedback">File Arsip tidak boleh kosong.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="">Keterangan</label>
                                    <textarea class="form-control" name="keterangan" id="keterangan"
                                    placeholder="Masukkan Keterangan" style="color: #000"></textarea>
                                    <div class="invalid-feedback">Keterangan Arsip tidak boleh kosong.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- Tambah Arsip --}}

{{-- Edit Arsip --}}
<div class="modal fade" id="edit_arsip" tabindex="-1" role="dialog" aria-labelledby="edit_arsip"
    aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">

            <form action="{{ route('arsip.update') }}" method="POST" class="needs-validation" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">Edit Arsip</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form theme-form projectcreate">
                        <div class="row">
                            <div class="col-6 col-sm-6">
                                <div class="mb-3">
                                    <label for="">Rak</label>
                                    <input type="text" class="form-control" name="id" id="id">
                                    <input type="text" class="form-control" name="tahun" id="tahun_update">
                                    <input type="text" class="form-control" name="rak" id="rak"
                                        placeholder="Masukkan Data Rak" style="color: #000" >
                                    <div class="invalid-feedback">Data Rak tidak boleh kosong.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="">Boks</label>
                                    <input type="text" class="form-control" name="boks" id="boks"
                                        placeholder="Masukkan Data Boks" style="color: #000" >
                                    <div class="invalid-feedback">Data Boks tidak boleh kosong.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="">Indeks</label>
                                    <input type="text" class="form-control" name="indeks" id="indeks"
                                        placeholder="Masukkan Data Indeks" style="color: #000" >
                                    <div class="invalid-feedback">Data Indeks tidak boleh kosong.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="">Uraian Masalah</label>
                                    <textarea class="form-control" name="masalah" id="masalah"
                                    placeholder="Masukkan Uraian Masalah" style="color: #000"></textarea>
                                    <div class="invalid-feedback">Uraian Masalah tidak boleh kosong.</div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6">
                                <div class="mb-3">
                                    <label for="">Kecamatan</label>
                                    <input type="text" class="form-control" name="kecamatan" id="kecamatan"
                                        placeholder="Masukkan Data Kecamatan" style="color: #000">
                                    <div class="invalid-feedback">Data Kecamatan tidak boleh kosong.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="tahun">Tahun</label>
                                    <select class="form-control" name="tahun" id="tahun_update" style="color: #000" required>
                                        
                                    </select>
                                    <div class="invalid-feedback">Tahun Arsip tidak boleh kosong.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="">File Arsip</label>
                                    <div id="file_arsip_update"></div>
                                    <input type="file" class="form-control" name="file_arsip" id="file_arsip"
                                         style="color: #000">
                                    <div class="invalid-feedback">File Arsip tidak boleh kosong.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="">Keterangan</label>
                                    <textarea class="form-control" name="keterangan" id="keterangan"
                                    placeholder="Masukkan Keterangan" style="color: #000"></textarea>
                                    <div class="invalid-feedback">Keterangan Arsip tidak boleh kosong.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- Edit Kota --}}
@endsection


@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/yearpicker/1.2.0/yearpicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/yearpicker/1.2.0/yearpicker.min.css">


<script>
$(document).ready(function () {
    
    var startYear = 1900;
    var endYear = new Date().getFullYear();
    var select = $('#tahun, #tahun_update');

    for (var year = endYear; year >= startYear; year--) {
        select.append('<option value="' + year + '">' + year + '</option>');
    }
    
    

    $('#basic-1').DataTable().destroy();

    $('#basic-1').DataTable({
        retrieve: true,
        processing: true,
        serverSide: true,
        ajax: {
            url: "{{ route('arsip.data') }}",
            type: 'GET',
        },
        columns: [
            {   
                data: null,
                orderable: false,
                searchable: false,
                render: function (data, type, row, meta) {
                    return meta.settings._iDisplayStart + meta.row +  1;
                }
            },
            { data: 'rak', name: 'rak' },
            { data: 'boks', name: 'boks' },
            { data: 'indeks', name: 'indeks' },
            { data: 'kecamatan', name: 'kecamatan' },
            { data: 'tahun', name: 'tahun' },
            {   
                data: 'file_arsip',  
                name: 'file_arsip',
                render: function(data, type, row) {
                    return data ==  null ? 'Tidak Ada' : '1 Berkas';
                }
            },
            { data: 'keterangan', name: 'keterangan' },
            {   
                data: null,
                orderable: false,
                searchable: false,
                render: function(data, type, row) {
                    return `
                        <div class="d-sm-flex align-items-center justify-content-between">
                            <a href="#" class="btn btn-outline-primary-2x btn-xs" data-bs-toggle="modal"
                                data-bs-target="#edit_arsip" data-kode_u="${row.id}"
                                data-rak_u="${row.rak}" data-boks_u="${row.boks}" data-indeks_u="${row.indeks}" data-masalah_u="${row.masalah}" data-kecamatan_u="${row.kecamatan}" data-tahun_u="${row.tahun}" data-keterangan_u="${row.keterangan}" data-file="${row.file_arsip}" >
                                <i class="fa fa-pencil"></i></a>
                            <a href="/admin/daftar-arsip/delete/${row.id}"
                                class="btn btn-outline-danger-2x btn-xs" onclick="return confirm('Apakah anda yakin?')">
                                <i class="fa fa-trash"></i></a>
                            <a href="/admin/daftar-arsip/detail/${row.id}"
                                class="btn btn-outline-success-2x btn-xs">
                                <i class="fa fa-eye"></i></a>
                        </div>
                    `;
                }
            },
        ]
    });

    $('#edit_arsip').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var kd = button.data('kode_u')
        var rk = button.data('rak_u')
        var bok = button.data('boks_u')
        var indek = button.data('indeks_u')
        var masal = button.data('masalah_u')
        var kec = button.data('kecamatan_u')
        var tan = button.data('tahun_u')
        var file = button.data('file')
        var ket = button.data('keterangan_u')
        
        var modal = $(this)
        var select = modal.find('.modal-body #tahun_update');
        select.val(tan);
        
        console.log(file);
        var filePreview = modal.find('.modal-body #file_arsip_update');
        if (file) {
            var fileUrl = '/storage/' + file;
            filePreview.html('<img src="' + fileUrl + '" alt="File Arsip" style="width: 100px; height: 100px;">');
        } else {
            filePreview.html('<p style="color: #000000; font-weight: bold;">Tidak Ada File Arsip</p>');
        }

        modal.find('.modal-body #id').val(kd);
        modal.find('.modal-body #rak').val(rk);
        modal.find('.modal-body #boks').val(bok);
        modal.find('.modal-body #indeks').val(indek);
        modal.find('.modal-body #masalah').val(masal);
        modal.find('.modal-body #kecamatan').val(kec);
        modal.find('.modal-body #keterangan').val(ket);
    });
});

</script>  
@endsection
