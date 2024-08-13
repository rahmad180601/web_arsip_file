@extends('admin.page.master')
@section('content')
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-sm-6">
                <h3>Detail Arsip</h3>
            </div>
            <div class="col-12 col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"> <i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Admin</li>
                    <li class="breadcrumb-item active">Detail Arsip</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid credit-card payment-details">
    <div class="row">

      <div class="col-xxl-12 box-col-12">
        <div class="card">
          <div class="card-header pb-0">
            <h5>Detail Arsip File </h5>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-7">
                <form class="theme-form mega-form">
                  <div class="mb-3">
                    <label for="">Rak</label>
                    <input class="form-control" type="text" value="{{ $data->rak }}" readonly>
                  </div>
                  <div class="mb-3">
                    <label for="">Boks</label>
                    <input class="form-control" type="text" value="{{ $data->boks }}" readonly>
                  </div>
                  <div class="mb-3">
                    <label for="">Indeks</label>
                    <input class="form-control" type="text" value="{{ $data->indeks }}" readonly>
                  </div>
                  <div class="mb-3">
                    <label for="">Uraian Masalah</label>
                    <textarea class="form-control" readonly>{!! $data->masalah !!}</textarea>
                  </div>
                  <div class="mb-3">
                    <label for="">Kecamatan</label>
                    <input class="form-control" type="text" value="{{ $data->kecamatan }}" readonly>
                  </div>
                  <div class="mb-3">
                    <label for="">Tahun</label>
                    <input class="form-control" type="text" value="{{ $data->tahun }}" readonly>
                  </div>
                  <div class="mb-3">
                    <label for="">Keterangan</label>
                    <input class="form-control" type="text" value="{{ $data->keterangan }}" readonly>
                  </div>
                </form>
              </div>
              <div class="col-md-5 text-center">
                <img class="img-fluid" 
                     src="{{ $data->file_arsip ? Storage::url($data->file_arsip) : 'https://fakeimg.pl/400x400/?text-Book&font-noto' }}" 
                     alt="">
                    @if (!$data->file_arsip)
                        <p>Tidak Ada File Arsip</p>
                    @endif
            </div>
              {{-- <div class="col-md-5 text-center"><img class="img-fluid" src="{{ $data->file_arsip ? Storage::url($data->file_arsip) : 'https://fakeimg.pl/500x500/?text-Book&font-noto'  }}" alt=""></div> --}}
            </div>
          </div>
          <div class="modal-footer">
                <a href="{{ route('arsip') }}" class="btn btn-primary">Kembali</a>
        </div>
        </div>
      </div>
    </div>
  </div>
@endsection