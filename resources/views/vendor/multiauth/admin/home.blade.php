@extends('multiauth::layouts.app')
@section('content')

    @include('multiauth::layouts.shared.nav')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ ucfirst(config('multiauth.prefix')) }} Dashboard</div>
                <div class="card-body">
                    @include('multiauth::message')
                    You are logged in to {{ config('multiauth.prefix') }} side!
                </div>
            </div>
        </div>
    </div>
</div> --}}



 <div class="main-content">




      <!-- CARDS -->
      <div class="container-fluid">
        <div class="row mt-4">
          <div class="col-12 col-lg-6 col-xl">

            <!-- Value  -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col">

                    <!-- Title -->
                    <h6 class="text-uppercase text-muted mb-3">
                      TOTAL product registered
                    </h6>

                    <!-- Heading -->
                    <span class="h2 mb-0">
                      {{ $total_products }}
                    </span>                   

                   
                  </div>
                  <div class="col-auto">

                    <!-- Icon -->
                    <span class="icon-bg">
                      <i class="fe fe-shopping-bag"></i>
                    </span>

                  </div>
                </div> <!-- / .row -->

                <div class="row mt-3 pb-0">
                  <div class="col pb-0">
                    <span class="text-success small">
                      {{ $total_products_month }}%
                    </span>

                     <span class="text-muted small">
                      Since last month
                    </span>
                  </div>
                </div>
              </div>
            </div>

          </div>



           <div class="col-12 col-lg-6 col-xl">

            <!-- Value  -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col">

                    <!-- Title -->
                    <h6 class="text-uppercase text-muted mb-3">
                      Total orders
                    </h6>

                    <!-- Heading -->
                    <span class="h2 mb-0">
                      0
                    </span>                   

                   
                  </div>
                  <div class="col-auto">

                    <!-- Icon -->
                    <span class="icon-bg">
                      <i class="fe fe-zap"></i>
                    </span>

                  </div>
                </div> <!-- / .row -->

                <div class="row mt-3 pb-0">
                  <div class="col pb-0">
                    <span class="text-success small">
                      <i class="fe fe-arrow-up"></i>0
                    </span>

                     <span class="text-muted small">
                      Since last month
                    </span>
                  </div>
                </div>
              </div>
            </div>

          </div>


           <div class="col-12 col-lg-6 col-xl">

            <!-- Value  -->
            <div class="card bg-dark-app">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col">

                    <!-- Title -->
                    <h6 class="text-uppercase text-muted mb-3">
                      TOTAL Superstore PROFIT
                    </h6>

                    <!-- Heading -->
                    <span class="h2 mb-0 text-white">
                      Tshs 0
                    </span>                   

                   
                  </div>
                  <div class="col-auto">

                  
                  </div>
                </div> <!-- / .row -->

                <div class="row mt-3 pb-0">
                  <div class="col pb-0">
                    <span class="text-success small">
                      <i class="fe fe-arrow-up"></i> 0
                    </span>

                     <span class="text-white small">
                      Since last month
                    </span>


                    <span class="text-success small ml-5">
                      <i class="fe fe-download"></i> 
                    </span>

                     <span class="text-white small">
                       Financial Report 
                    </span>


                  </div>
                </div>
              </div>
            </div>

          </div>






        
        </div> <!-- / .row -->



        <div class="row">
          <div class="col-12">

            <!-- Convertions -->
            <div class="card">
              <div class="card-header">

                <!-- Title -->
                <h4 class="card-header-title">
                  Users
                </h4>

                <!-- Caption -->
                <span class="text-muted me-3">
                  Last 7 Days
                </span>

               

              </div>
              <div class="card-body">

                <!-- Chart -->
                <div class="chart">
                  <canvas id="conversionsChart" class="chart-canvas" width="2884" height="600" style="display: block; box-sizing: border-box; height: 300px; width: 1442px;"></canvas>
                <div id="chart-tooltip" role="tooltip" class="popover bs-popover-top" style="visibility: hidden; left: 806.339px; top: 125.435px; transform: translateX(-50%) translateY(-100%) translateY(-1rem);"><div class="popover-arrow translate-middle-x"></div><div class="popover-content"><div><h3 class="popover-header text-center text-nowrap">Oct 10</h3></div><div><div class="popover-body d-flex align-items-center text-nowrap justify-content-left"><span class="popover-body-indicator" style="background-color: rgb(44, 123, 229);"></span> 2020 26%</div><div class="popover-body d-flex align-items-center text-nowrap justify-content-left"><span class="popover-body-indicator" style="background-color: rgb(210, 221, 236);"></span> 2019 16%</div></div></div></div></div>

              </div>
            </div>
          </div>



          <div class="col-12">

            <!-- Goals -->
            <div class="card">
              <div class="card-header">
                <div class="row align-items-center">
                  <div class="col">

                    <!-- Title -->
                    <h4 class="card-header-title">
                      Latest Orders <span class="small text-muted">320 total</span>
                    </h4>

                  </div>
                  <div class="col-auto">

                    <!-- Button -->
                    <a href="#!" class="btn btn-sm btn-white">
                      Sort By Latest
                    </a>

                  </div>
                </div> <!-- / .row -->
              </div>
              <div class="table-responsive mb-0" data-list="{&quot;valueNames&quot;: [&quot;goal-project&quot;, &quot;goal-status&quot;, &quot;goal-progress&quot;, &quot;goal-date&quot;]}">
                <table class="table table-sm table-nowrap card-table">
                  <thead>
                    <tr>
                      <th>
                        <a href="#" class="text-muted list-sort" data-sort="goal-project">
                          Order ID
                        </a>
                      </th>
                      <th>
                        <a href="#" class="text-muted list-sort" data-sort="goal-status">
                          Customer
                        </a>
                      </th>
                      <th>
                        <a href="#" class="text-muted list-sort" data-sort="goal-progress">
                          Date
                        </a>
                      </th>
                      <th>
                        <a href="#" class="text-muted list-sort" data-sort="goal-date">
                          Status
                        </a>
                      </th>
                      <th class="text-end">
                        Actions
                      </th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody class="list">
                    <tr>
                      <td class="goal-project">
                        23412355-1
                      </td>
                      <td class="goal-status">
                        Elias Malya
                      </td>
                      <td class="goal-date">
                        <time datetime="2018-10-24">08/26/18</time>
                      </td>
                      <td class="goal-status">
                        <span class="text-warning">●</span> In progress
                      </td>
                      <td class="text-end">
                        <a href="" class="text-success">View Order</a>
                      </td>
                   
                    </tr>
                    <tr>
                      <td class="goal-project">
                        23412355-2
                      </td>
                      <td class="goal-status">
                        Donald Kagunila
                      </td>
                      <td class="goal-date">
                        <time datetime="2018-10-24">08/26/18</time>
                      </td>
                      <td class="goal-date">
                         <span class="text-warning">●</span> In progress
                      </td>
                      <td class="text-end">
                        <a href="" class="text-success">View Order</a>
                      </td>
                     
                    </tr>



                    <tr>
                      <td class="goal-project">
                        23412355-2
                      </td>
                      <td class="goal-status">
                        Donald Kagunila
                      </td>
                      <td class="goal-date">
                        <time datetime="2018-10-24">08/26/18</time>
                      </td>
                      <td class="goal-date">
                         <span class="text-warning">●</span> In progress
                      </td>
                      <td class="text-end">
                        <a href="" class="text-success">View Order</a>
                      </td>
                      
                    </tr>



                    <tr>
                      <td class="goal-project">
                        23412355-3
                      </td>
                      <td class="goal-status">
                        Donald Kagunila
                      </td>
                      <td class="goal-date">
                        <time datetime="2018-10-24">08/26/18</time>
                      </td>
                      <td class="goal-date">
                         <span class="text-warning">●</span> In progress
                      </td>
                      <td class="text-end">
                        <a href="" class="text-success">View Order</a>
                      </td>
                      
                    </tr>



                    <tr>
                      <td class="goal-project">
                        23412355-6
                      </td>
                      <td class="goal-status">
                        Donald Kagunila
                      </td>
                      <td class="goal-date">
                        <time datetime="2018-10-24">08/26/18</time>
                      </td>
                      <td class="goal-date">
                         <span class="text-warning">●</span> In progress
                      </td>
                      <td class="text-end">
                        <a href="" class="text-success">View Order</a>
                      </td>
                      
                    </tr>



                    <tr>
                      <td class="goal-project">
                        23412355-4
                      </td>
                      <td class="goal-status">
                        Donald Kagunila
                      </td>
                      <td class="goal-date">
                        <time datetime="2018-10-24">08/26/18</time>
                      </td>
                      <td class="goal-date">
                         <span class="text-warning">●</span> In progress
                      </td>
                      <td class="text-end">
                        <a href="" class="text-success">View Order</a>
                      </td>
                      
                    </tr>


                    <tr>
                      <td class="goal-project">
                        23412355-5
                      </td>
                      <td class="goal-status">
                        Donald Kagunila
                      </td>
                      <td class="goal-date">
                        <time datetime="2018-10-24">08/26/18</time>
                      </td>
                      <td class="goal-date">
                         <span class="text-warning">●</span> In progress
                      </td>
                      <td class="text-end">
                        <a href="" class="text-success">View Order</a>
                      </td>
                      
                    </tr>
                     
                  
                  </tbody>
                </table>
              </div>
            </div>

          </div>




        </div>


      </div>

    </div><!-- / .main-content -->
@endsection
