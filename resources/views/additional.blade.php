@section('css')
 <!--Import materialize.css')}}-->
    <link type="text/css" rel="stylesheet" href="{{asset('backend/node_modules/materialize-css/dist/css/materialize.min.css')}}" />
    <!-- Import prismjs (syntex highlighter) -->
    <link type="text/css" rel="stylesheet" href="{{asset('backend/node_modules/prismjs/themes/prism.css')}}" />
    <!-- Import Efnify app css -->
    <link type="text/css" rel="stylesheet" href="{{asset('backend/assets/css/app.css')}}" />
    <!-- Import Efnify app helper class css -->
    <link type="text/css" rel="stylesheet" href="{{asset('backend/assets/css/helper.css')}}" />
    <!-- Import Efnify app responsive css -->
    <link type="text/css" rel="stylesheet" href="{{asset('backend/assets/css/responsive.css')}}" />
    <!-- Import Efnify app theme css -->
    <link type="text/css" rel="stylesheet" href="{{asset('backend/assets/css/theme/default.css')}}" />
@endsection
@section('js')
    <!-- Import jquery -->
    <script src="{{asset('backend/node_modules/jquery/dist/jquery.min.js')}}"></script>
    <!-- Import materialize js -->
    <script src="{{asset('backend/node_modules/materialize-css/dist/js/materialize.min.js')}}"></script>
    <!-- Import prismjs (syntex highlighter) -->
    <script src="{{asset('backend/node_modules/prismjs/prism.js')}}"></script>
    <!-- Import chartjs (chart library) -->
    <script src="{{asset('backend/node_modules/chart.js/dist/Chart.min.js')}}"></script>
    <!-- Import Efnify app js -->
    <script src="{{asset('backend/assets/js/app.js')}}"></script>
    <!-- Import Efnify search js (Placed in navbar) -->
    <script src="{{asset('backend/assets/js/search.js')}}"></script>
    <script>
        // Analytics report
        var ctx = document.getElementById('dashboard-analytics-report-chart').getContext('2d');

        var dashboardAnalyticsReportChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Statistik Orderan",
                    borderColor: '#4db6ac',
                    pointBackgroundColor: '#4db6ac',
                    pointRadius: 0,
                    backgroundColor: '#4db6ac',
                    legendColor: '#4db6ac',
                    fill: true,
                    borderWidth: 2,
                    data: []
                }, {
                    label: "Total Sales",
                    borderColor: '#64b5f6',
                    pointBackgroundColor: '#64b5f6',
                    pointRadius: 0,
                    backgroundColor: '#64b5f6',
                    legendColor: '#64b5f6',
                    fill: true,
                    borderWidth: 2,
                    data: []
                }, {
                    label: "Total Projects",
                    borderColor: '#4dd0e1',
                    pointBackgroundColor: '#4dd0e1',
                    pointRadius: 0,
                    backgroundColor: '#4dd0e1',
                    legendColor: '#4dd0e1',
                    fill: true,
                    borderWidth: 2,
                    data: []
                }, {
                    label: "Today Income",
                    borderColor: '#ba68c8',
                    pointBackgroundColor: '#ba68c8',
                    pointRadius: 0,
                    backgroundColor: '#ba68c8',
                    legendColor: '#ba68c8',
                    fill: true,
                    borderWidth: 2,
                    data: []
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    display: true
                },
                tooltips: {
                    bodySpacing: 4,
                    mode: "nearest",
                    intersect: 0,
                    position: "nearest",
                    xPadding: 10,
                    yPadding: 10,
                    caretPadding: 10
                },
                layout: {
                    padding: {
                        left: 5,
                        right: 5,
                        top: 15,
                        bottom: 15
                    }
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            fontStyle: "500",
                            beginAtZero: false,
                            maxTicksLimit: 5,
                            padding: 10
                        },
                        gridLines: {
                            drawTicks: false,
                            display: false
                        }
                    }],
                    xAxes: [{
                        gridLines: {
                            zeroLineColor: "transparent"
                        },
                        ticks: {
                            padding: 10,
                            fontStyle: "500"
                        }
                    }]
                }
            }
        });
    </script>
@endsection