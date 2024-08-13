@extends('admin.page.master')
@section('styless')
<link rel="stylesheet" href="{{ asset('assets/gijgo/css/gijgo.min.css') }}">
@endsection
@section('content')
<div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-sm-6">
          <h3>
            Dashboard</h3>
        </div>
        <div class="col-12 col-sm-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="home-item" href="index.html"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item">Dashboard</li>
            <li class="breadcrumb-item active">Home</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid starts-->
  <div class="container-fluid crypto-dash">
    <div class="row">
      <div class="col-sm-6 col-xl-4 col-lg-6">
        <div class="card o-hidden">
          <div class="card-body">
            <div class="media static-widget">
              <div class="media-body">
                <h6 class="font-roboto" >Pendapatan</h6>
                <h4 class="mb-0 counter" id="pendapatan"></h4>
              </div>
              <svg class="fill-secondary" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M22.5938 14.1562V17.2278C20.9604 17.8102 19.7812 19.3566 19.7812 21.1875C19.7812 23.5138 21.6737 25.4062 24 25.4062C24.7759 25.4062 25.4062 26.0366 25.4062 26.8125C25.4062 27.5884 24.7759 28.2188 24 28.2188C23.2241 28.2188 22.5938 27.5884 22.5938 26.8125H19.7812C19.7812 28.6434 20.9604 30.1898 22.5938 30.7722V33.8438H25.4062V30.7722C27.0396 30.1898 28.2188 28.6434 28.2188 26.8125C28.2188 24.4862 26.3263 22.5938 24 22.5938C23.2241 22.5938 22.5938 21.9634 22.5938 21.1875C22.5938 20.4116 23.2241 19.7812 24 19.7812C24.7759 19.7812 25.4062 20.4116 25.4062 21.1875H28.2188C28.2188 19.3566 27.0396 17.8102 25.4062 17.2278V14.1562H22.5938Z"></path>
                <path d="M25.4062 0V11.4859C31.2498 12.1433 35.8642 16.7579 36.5232 22.5938H48C47.2954 10.5189 37.4829 0.704531 25.4062 0Z"></path>
                <path d="M14.1556 31.8558C12.4237 29.6903 11.3438 26.9823 11.3438 24C11.3438 17.5025 16.283 12.1958 22.5938 11.4859V0C10.0492 0.731813 0 11.2718 0 24C0 30.0952 2.39381 35.6398 6.14897 39.8624L14.1556 31.8558Z"></path>
                <path d="M47.9977 25.4062H36.5143C35.8044 31.717 30.4977 36.6562 24.0002 36.6562C21.0179 36.6562 18.3099 35.5763 16.1444 33.8444L8.13779 41.851C12.3604 45.6062 17.905 48 24.0002 48C36.7284 48 47.2659 37.9508 47.9977 25.4062Z"></path>
              </svg>
            </div>
            <div class="progress-widget">
              <div class="progress sm-progress-bar progress-animate">
                <div class="progress-gradient-secondary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><span class="animate-circle"></span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-xl-4 col-lg-6">
        <div class="card o-hidden">
          <div class="card-body">
            <div class="media static-widget">
              <div class="media-body">
                <h6 class="font-roboto">Modal</h6>
                <h4 class="mb-0 counter" id="modal"></h4>
              </div>
              <svg class="fill-danger" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M22.5938 14.1562V17.2278C20.9604 17.8102 19.7812 19.3566 19.7812 21.1875C19.7812 23.5138 21.6737 25.4062 24 25.4062C24.7759 25.4062 25.4062 26.0366 25.4062 26.8125C25.4062 27.5884 24.7759 28.2188 24 28.2188C23.2241 28.2188 22.5938 27.5884 22.5938 26.8125H19.7812C19.7812 28.6434 20.9604 30.1898 22.5938 30.7722V33.8438H25.4062V30.7722C27.0396 30.1898 28.2188 28.6434 28.2188 26.8125C28.2188 24.4862 26.3263 22.5938 24 22.5938C23.2241 22.5938 22.5938 21.9634 22.5938 21.1875C22.5938 20.4116 23.2241 19.7812 24 19.7812C24.7759 19.7812 25.4062 20.4116 25.4062 21.1875H28.2188C28.2188 19.3566 27.0396 17.8102 25.4062 17.2278V14.1562H22.5938Z"></path>
                <path d="M25.4062 0V11.4859C31.2498 12.1433 35.8642 16.7579 36.5232 22.5938H48C47.2954 10.5189 37.4829 0.704531 25.4062 0Z"></path>
                <path d="M14.1556 31.8558C12.4237 29.6903 11.3438 26.9823 11.3438 24C11.3438 17.5025 16.283 12.1958 22.5938 11.4859V0C10.0492 0.731813 0 11.2718 0 24C0 30.0952 2.39381 35.6398 6.14897 39.8624L14.1556 31.8558Z"></path>
                <path d="M47.9977 25.4062H36.5143C35.8044 31.717 30.4977 36.6562 24.0002 36.6562C21.0179 36.6562 18.3099 35.5763 16.1444 33.8444L8.13779 41.851C12.3604 45.6062 17.905 48 24.0002 48C36.7284 48 47.2659 37.9508 47.9977 25.4062Z"></path>
              </svg>
            </div>
            <div class="progress-widget">
              <div class="progress sm-progress-bar progress-animate">
                <div class="progress-gradient-danger" role="progressbar" style="width: 60%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><span class="animate-circle"></span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-xl-4 col-lg-6">
        <div class="card o-hidden">
          <div class="card-body">
            <div class="media static-widget">
              <div class="media-body">
                <h6 class="font-roboto">Pendapatan Bersih</h6>
                <h4 class="mb-0 counter" id="pendapatan_bersih"></h4>
              </div>
              <svg class="fill-success" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M22.5938 14.1562V17.2278C20.9604 17.8102 19.7812 19.3566 19.7812 21.1875C19.7812 23.5138 21.6737 25.4062 24 25.4062C24.7759 25.4062 25.4062 26.0366 25.4062 26.8125C25.4062 27.5884 24.7759 28.2188 24 28.2188C23.2241 28.2188 22.5938 27.5884 22.5938 26.8125H19.7812C19.7812 28.6434 20.9604 30.1898 22.5938 30.7722V33.8438H25.4062V30.7722C27.0396 30.1898 28.2188 28.6434 28.2188 26.8125C28.2188 24.4862 26.3263 22.5938 24 22.5938C23.2241 22.5938 22.5938 21.9634 22.5938 21.1875C22.5938 20.4116 23.2241 19.7812 24 19.7812C24.7759 19.7812 25.4062 20.4116 25.4062 21.1875H28.2188C28.2188 19.3566 27.0396 17.8102 25.4062 17.2278V14.1562H22.5938Z"></path>
                <path d="M25.4062 0V11.4859C31.2498 12.1433 35.8642 16.7579 36.5232 22.5938H48C47.2954 10.5189 37.4829 0.704531 25.4062 0Z"></path>
                <path d="M14.1556 31.8558C12.4237 29.6903 11.3438 26.9823 11.3438 24C11.3438 17.5025 16.283 12.1958 22.5938 11.4859V0C10.0492 0.731813 0 11.2718 0 24C0 30.0952 2.39381 35.6398 6.14897 39.8624L14.1556 31.8558Z"></path>
                <path d="M47.9977 25.4062H36.5143C35.8044 31.717 30.4977 36.6562 24.0002 36.6562C21.0179 36.6562 18.3099 35.5763 16.1444 33.8444L8.13779 41.851C12.3604 45.6062 17.905 48 24.0002 48C36.7284 48 47.2659 37.9508 47.9977 25.4062Z"></path>
              </svg>
            </div>
            <div class="progress-widget">
              <div class="progress sm-progress-bar progress-animate">
                <div class="progress-gradient-success" role="progressbar" style="width: 48%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><span class="animate-circle"></span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/gijgo/js/gijgo.min.js') }}"></script>
    {{-- <script>

      var pendapatanData = @json($pendapatanArray);

      var monthNames = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
      var categories = Object.keys(pendapatanData).map(function(monthNumber) {
        return monthNames[parseInt(monthNumber) -  1];
      });

      var optionscolumnchart = {
          series: [{
            name: 'Pendapatan',
            data: Object.values(pendapatanData)
          }],
          
          legend: {
              show: false
          },
          chart: {
                type: 'bar',
                height: 380
              },
          plotOptions: {
              bar: {
                  radius: 10,
                  horizontal: false,
                  columnWidth: '55%',
                  endingShape: 'rounded',
              }
          },
          dataLabels: {
              enabled: false
          },
          stroke: {
              show: true,
              colors: ['transparent'],
              curve: 'smooth',
              lineCap: 'butt'
          },
          grid: {
              show: false,
              padding: {
                  left: 0,
                  right: 0
              }
          },
          xaxis: {
              categories: categories,
          },
          yaxis: {
              title: {
                  text: 'Pendapatan'
              }
          },
          fill: {
              colors:[zetaAdminConfig.primary, zetaAdminConfig.secondary, '#51bb25'],
              type: 'gradient',
              gradient: {
                  shade: 'light',
                  type: 'vertical',
                  shadeIntensity: 0.1,
                  inverseColors: false,
                  opacityFrom: 1,
                  opacityTo: 0.9,
                  stops: [0, 100]
              }
          },

          tooltip: {
              y: {
                  formatter: function (val) {
                      return "Rp " + val
                  }
              }
          }
      };



      var chartcolumnchart = new ApexCharts(
          document.querySelector("#chart-widget4"),
          optionscolumnchart
      );
      chartcolumnchart.render();
    </script>

<script>
  $(document).ready(function() {
      // Initialize datepickers
      $('.datepicker_start').datepicker({
          format: 'yyyy-mm-dd',
          uiLibrary: 'bootstrap4',
          autoclose: true,
          icons: {
              rightIcon: '<img src="{{ url('assets/gijgo/icons-thursday.png') }}">'
          }
      });

      $('.datepicker_end').datepicker({
          format: 'yyyy-mm-dd',
          uiLibrary: 'bootstrap4',
          autoclose: true,
          icons: {
              rightIcon: '<img src="{{ url('assets/gijgo/icons-thursday.png') }}">'
          }
      });

      // Load data initially when the page is opened
      loadData();

      $('#filterForm').on('submit', function(e) {
          e.preventDefault();
          loadDataFilter();
      });

 
  });

  function clearData(event) {
      event.preventDefault();
      $('#tanggal_dari').val('');
      $('#tanggal_sampai').val('');
      $('#filter_warung').val('').trigger('change');
      loadData(); 
  }

  
  function loadData() {
          $.ajax({
              url: "{{ route('dashboard.data') }}",
              type: 'GET',
              success: function(response) {
                  // Update the UI with the initial data
                  updateUI(response);
              },
              error: function(jqXHR, textStatus, errorThrown) {
                  console.error(textStatus, errorThrown);
              }
          });
      }

      function loadDataFilter() {
          var tanggalDari = $('#tanggal_dari').val();
          var tanggalSampai = $('#tanggal_sampai').val();
          var idWarung = $('#filter_warung').val();


          $.ajax({
              url: "{{ route('dashboard.filter') }}",
              type: 'GET',
              data: {
                  tanggal_dari: tanggalDari,
                  tanggal_sampai: tanggalSampai,
                  id_warung: idWarung
              },
              success: function(response) {
                  updateUI(response);
              },
              error: function(jqXHR, textStatus, errorThrown) {
                  console.error(textStatus, errorThrown);
              }
          });
      }

      // Function to update UI with data
      function updateUI(data) {
          $('#pendapatan').text('Rp' + new Intl.NumberFormat('id-ID').format(data.pendapatan));
          $('#modal').text('Rp' + new Intl.NumberFormat('id-ID').format(data.modal));
          $('#pendapatan_bersih').text('Rp' + new Intl.NumberFormat('id-ID').format(data.pendapatan_bersih));
          $('#orang').text(data.orang);
          $('#warung').text(data.warung);
          $('#produk_orang').text(data.produk_orang);
          $('#produk_warung').text(data.produk_warung);
      } --}}

</script>

@endsection