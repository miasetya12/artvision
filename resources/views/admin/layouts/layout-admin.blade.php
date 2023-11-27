<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('/css/auth/style.css')}}">
    <link rel="stylesheet" href="{{url('/css/sweetalert/sweetalert2.min.css')}}">
    <link rel="stylesheet" href="{{url('/css/app.css')}}">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    @stack('css')
  </head>
  <body>
	<div class="wrapper">
        {{-- Side Bar --}}
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
                <span class="align-middle">Artvision</span>
                </a>
                
				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Umum
					</li>
					<li class="sidebar-item {{ $active === 'dashboard' ? 'active' : '' }}">
						<a class="sidebar-link" href="/admin">
                        <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                        </a>
					</li>

					<li class="sidebar-item {{ $active === 'profil' ? 'active' : '' }}">
                        <a class="sidebar-link" href="/admin/profil">
                        <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profil</span>
                    </a>
					</li>

					<li class="sidebar-header">
						Penawaran
					</li>
					<li class="sidebar-item {{ $active === 'lukisan' ? 'active' : '' }}">
						<a class="sidebar-link" href="/admin/lukisan">
                        <i class="align-middle" data-feather="image"></i> <span class="align-middle">Lukisan</span>
                        </a>
					</li><li class="sidebar-item {{ $active === 'pelukis' ? 'active' : '' }}">
						<a class="sidebar-link" href="/admin/pelukis">
                        <i class="align-middle" data-feather="eye"></i> <span class="align-middle">Pelukis</span>
                        </a>
					</li>
					<li class="sidebar-item {{ $active === 'periode' ? 'active' : '' }}">
						<a class="sidebar-link" href="/admin/periode">
                        <i class="align-middle" data-feather="calendar"></i> <span class="align-middle">Periode Bidding</span>
                        </a>
					</li>		
					<li class="sidebar-item {{ $active === 'pemenang' ? 'active' : '' }}">
						<a class="sidebar-link" href="/admin/pemenang-bidding">
                        <i class="align-middle" data-feather="award"></i> <span class="align-middle">Pemenang Bidding</span>
                        </a>
					</li>

					<li class="sidebar-header">
						Pengguna dan Instansi
					</li>
					<li class="sidebar-item {{ $active === 'pengguna' ? 'active' : '' }}">
						<a class="sidebar-link " href="/admin/user">
                        <i class="align-middle" data-feather="users"></i> <span class="align-middle">Pengguna</span>
                        </a>
					</li><li class="sidebar-item {{ $active === 'instansi' ? 'active' : '' }}">
						<a class="sidebar-link" href="/admin/instansi">
                        <i class="align-middle" data-feather="globe"></i> <span class="align-middle">Instansi</span>
                        </a>
					</li>
					<li class="sidebar-header">
						Notifikasi
					</li>
					<li class="sidebar-item {{ $active === 'notifikasi' ? 'active' : '' }}">
						<a class="sidebar-link" href="/admin/notifikasi">
                        <i class="align-middle" data-feather="message-square"></i> <span class="align-middle">Notifikasi</span>
                        </a>
				</ul>				
		</nav>


		
		<div class="main">

		<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
								<i class="align-middle" data-feather="settings"></i>
							</a>

							<a class="nav-link d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
								<span class="text-dark"> {{session('uName')}}</span>
								
							</a>
							<a class="" href="/logout">| Log out</a>
						</li>
					</ul>
				</div>
			</nav>

            @yield('content')

            
		</div>
	</div>

	
	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
	 <script src="{{url('/js/sweetalert/sweetalert2.all.min.js')}}"></script>
	 <script src="{{url('/js/sweetalert/sweetalert2.min.js')}}"></script>
	 <script src="https://cdn.tiny.cloud/1/gdkugfi5ydy6phprvw24rnfwsr3or28nr8cmk25p0bfvdt1a/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
	 @if(session('status'))
		@push('script')
		<script>
			Swal.fire({
			icon: '{{session('status')}}',
			title: '{{session('message')}}',
			})
		</script>
		@endpush
	@endif
	 @stack('script')

	 <script src="js/app.js"></script>
    <script>
		document.addEventListener("DOMContentLoaded", function() {
			var ctx = document.getElementById("chartjs-dashboard-line").getContext("2d");
			var gradient = ctx.createLinearGradient(0, 0, 0, 225);
			gradient.addColorStop(0, "rgba(215, 227, 244, 1)");
			gradient.addColorStop(1, "rgba(215, 227, 244, 0)");
			// Line chart
			new Chart(document.getElementById("chartjs-dashboard-line"), {
				type: "line",
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: "Sales ($)",
						fill: true,
						backgroundColor: gradient,
						borderColor: window.theme.primary,
						data: [
							2115,
							1562,
							1584,
							1892,
							1587,
							1923,
							2566,
							2448,
							2805,
							3438,
							2917,
							3327
						]
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					tooltips: {
						intersect: false
					},
					hover: {
						intersect: true
					},
					plugins: {
						filler: {
							propagate: false
						}
					},
					scales: {
						xAxes: [{
							reverse: true,
							gridLines: {
								color: "rgba(0,0,0,0.0)"
							}
						}],
						yAxes: [{
							ticks: {
								stepSize: 1000
							},
							display: true,
							borderDash: [3, 3],
							gridLines: {
								color: "rgba(0,0,0,0.0)"
							}
						}]
					}
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Pie chart
			new Chart(document.getElementById("chartjs-dashboard-pie"), {
				type: "pie",
				data: {
					labels: ["Chrome", "Firefox", "IE"],
					datasets: [{
						data: [4306, 3801, 1689],
						backgroundColor: [
							window.theme.primary,
							window.theme.warning,
							window.theme.danger
						],
						borderWidth: 5
					}]
				},
				options: {
					responsive: !window.MSInputMethodContext,
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					cutoutPercentage: 75
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Bar chart
			new Chart(document.getElementById("chartjs-dashboard-bar"), {
				type: "bar",
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: "This year",
						backgroundColor: window.theme.primary,
						borderColor: window.theme.primary,
						hoverBackgroundColor: window.theme.primary,
						hoverBorderColor: window.theme.primary,
						data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
						barPercentage: .75,
						categoryPercentage: .5
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					scales: {
						yAxes: [{
							gridLines: {
								display: false
							},
							stacked: false,
							ticks: {
								stepSize: 20
							}
						}],
						xAxes: [{
							stacked: false,
							gridLines: {
								color: "transparent"
							}
						}]
					}
				}
			});
		});
	</script>
	 <script>
		document.addEventListener("DOMContentLoaded", function() {
			var markers = [{
					coords: [31.230391, 121.473701],
					name: "Shanghai"
				},
				{
					coords: [28.704060, 77.102493],
					name: "Delhi"
				},
				{
					coords: [6.524379, 3.379206],
					name: "Lagos"
				},
				{
					coords: [35.689487, 139.691711],
					name: "Tokyo"
				},
				{
					coords: [23.129110, 113.264381],
					name: "Guangzhou"
				},
				{
					coords: [40.7127837, -74.0059413],
					name: "New York"
				},
				{
					coords: [34.052235, -118.243683],
					name: "Los Angeles"
				},
				{
					coords: [41.878113, -87.629799],
					name: "Chicago"
				},
				{
					coords: [51.507351, -0.127758],
					name: "London"
				},
				{
					coords: [40.416775, -3.703790],
					name: "Madrid "
				}
			];
			var map = new jsVectorMap({
				map: "world",
				selector: "#world_map",
				zoomButtons: true,
				markers: markers,
				markerStyle: {
					initial: {
						r: 9,
						strokeWidth: 7,
						stokeOpacity: .4,
						fill: window.theme.primary
					},
					hover: {
						fill: window.theme.primary,
						stroke: window.theme.primary
					}
				},
				zoomOnScroll: false
			});
			window.addEventListener("resize", () => {
				map.updateSize();
			});
		});
	</script>
	<script>
		// document.addEventListener("DOMContentLoaded", function() {
		// 	var date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
		// 	var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();
		// 	document.getElementById("datetimepicker-dashboard").flatpickr({
		// 		inline: true,
		// 		prevArrow: "<span title=\"Previous month\">&laquo;</span>",
		// 		nextArrow: "<span title=\"Next month\">&raquo;</span>",
		// 		defaultDate: defaultDate
		// 	});
		// });
	</script>
  </body>
</html>