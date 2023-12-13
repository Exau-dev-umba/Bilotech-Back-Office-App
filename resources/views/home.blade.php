@extends('layouts.app')

@section('content')
    
    <!-- Main content -->
    <section class="content pt-5">
      
        <div class="container-fluid">
            <h3>Tableau de bord</h3>
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                    
                  <h3>{{ $totalArticles }}</h3>
                    @if ($totalArticles > 1 )
                    <p>Articles</p>
                    @else
                    <p>Article</p>
                    @endif
                  
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="{{ route('articles.index') }}" class="small-box-footer">Plus d'infos <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>{{ $userTemp }}<sup style="font-size: 20px"></sup></h3>
                  @if ($userTemp>1)
                  <p>Membres non enregistrés</p>
                    
                  @else
                  <p>Membre non enregistré</p>
                    
                  @endif
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">Plus d'infos <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>{{ $totalUsers }}</h3>
                    @if ($totalUsers > 1)
                        <p>Membres</p> 
                    @else
                        <p>Membre</p>
                    @endif
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="{{ route('users.index') }}" class="small-box-footer">Plus d'infos <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>{{ $totalVisiteArticles }}</h3>
  
                  <p>Nombres des Visites</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">Plus d'infos <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->
          <!-- Main row -->
            
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    

   
    
    @push('page_scripts')
        {{-- <script type="module" src="{{ Vite::asset('node_modules/admin-lte/plugins/jquery/jquery.min.js') }}"></script>
        <script> --}}
            $(function () {
              /* ChartJS
               * -------
               * Here we will create a few charts using ChartJS
               */
          
              //--------------
              //- AREA CHART -
              //--------------
          
              // Get context with jQuery - using jQuery's .get() method.
              var areaChartCanvas = $('#areaChart').get(0).getContext('2d')
          
              var areaChartData = {
                labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [
                  {
                    label               : 'Digital Goods',
                    backgroundColor     : 'rgba(60,141,188,0.9)',
                    borderColor         : 'rgba(60,141,188,0.8)',
                    pointRadius          : false,
                    pointColor          : '#3b8bba',
                    pointStrokeColor    : 'rgba(60,141,188,1)',
                    pointHighlightFill  : '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data                : [28, 48, 40, 19, 86, 27, 90]
                  },
                  {
                    label               : 'Electronics',
                    backgroundColor     : 'rgba(210, 214, 222, 1)',
                    borderColor         : 'rgba(210, 214, 222, 1)',
                    pointRadius         : false,
                    pointColor          : 'rgba(210, 214, 222, 1)',
                    pointStrokeColor    : '#c1c7d1',
                    pointHighlightFill  : '#fff',
                    pointHighlightStroke: 'rgba(220,220,220,1)',
                    data                : [65, 59, 80, 81, 56, 55, 40]
                  },
                ]
              }
          
              var areaChartOptions = {
                maintainAspectRatio : false,
                responsive : true,
                legend: {
                  display: false
                },
                scales: {
                  xAxes: [{
                    gridLines : {
                      display : false,
                    }
                  }],
                  yAxes: [{
                    gridLines : {
                      display : false,
                    }
                  }]
                }
              }
          
              // This will get the first returned node in the jQuery collection.
              var areaChart       = new Chart(areaChartCanvas, { 
                type: 'line',
                data: areaChartData, 
                options: areaChartOptions
              })

            });

        </script>



    @endpush     
@endsection
