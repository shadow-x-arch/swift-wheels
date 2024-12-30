










        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver Payments Calendar</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f4f4f4;
        }
        .debt-table {
            margin-top: 30px;
        }
        .error {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Driver Payments Calendar</h1>

    <!-- Month Selector -->
    <label for="monthSelector">Select Month:</label>
    <select id="monthSelector">
        <option value="" disabled selected>Select Month</option>
        <option value="1">January</option>
        <option value="2">February</option>
        <option value="3">March</option>
        <option value="4">April</option>
        <option value="5">May</option>
        <option value="6">June</option>
        <option value="7">July</option>
        <option value="8">August</option>
        <option value="9">September</option>
        <option value="10">October</option>
        <option value="11">November</option>
        <option value="12">December</option>
    </select>
    <button onclick="handleMonthSelection()">Load Data</button>

    <div id="errorMessage" class="error"></div>

    <!-- Payments Table -->
    <table id="calendarTable">
        <thead>
            <tr>
                <th>Date</th>
                <!-- Driver names will be added dynamically -->
            </tr>
        </thead>
        <tbody>
            <!-- Payment data rows will be added dynamically -->
        </tbody>
    </table>

    <!-- Debt Table -->
    <div class="debt-table">
        <h2>Driver Debts</h2>
        <table id="debtTable">
            <thead>
                <tr>
                    <th>Driver Name</th>
                    <th>Unpaid Dates</th>
                    <th>Total Debt</th>
                </tr>
            </thead>
            <tbody>
                <!-- Debt rows will be added dynamically -->
            </tbody>
        </table>
    </div>

    <script>
        // Configuration for the Supabase API
        const SUPABASE_URL = "https://buknofwdefxjmojrwrcz.supabase.co";
        const SUPABASE_API_KEY = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6ImJ1a25vZndkZWZ4am1vanJ3cmN6Iiwicm9sZSI6ImFub24iLCJpYXQiOjE3MzQ0ODMxOTksImV4cCI6MjA1MDA1OTE5OX0.iFSOibxZ-uYZ_-9ArzwnmJJw0Ll2cI2W2lqSbbk1xGk";


        const NORMAL_PRICE = 8000; // Normal payment per day

        // Handle month selection
        async function handleMonthSelection() {
            const monthSelector = document.getElementById('monthSelector');
            const selectedMonth = parseInt(monthSelector.value, 10);
            const currentMonth = new Date().getMonth() + 1;
            const currentYear = new Date().getFullYear();

            // Display error if month is invalid or in the future
            const errorMessage = document.getElementById('errorMessage');
            if (!selectedMonth || selectedMonth > currentMonth) {
                errorMessage.textContent = "Invalid month selected or month has not been reached yet.";
                return;
            } else {
                errorMessage.textContent = "";
            }

            // Fetch and display reports for the selected month
            await fetchReports(selectedMonth, currentYear);
        }

        async function fetchReports(selectedMonth, currentYear) {
            try {
                const daysInMonth = new Date(currentYear, selectedMonth, 0).getDate();

                // Fetch data from Supabase API
                const response = await fetch(`${SUPABASE_URL}/rest/v1/reports?select=*`, {
                    headers: {
                        "Content-Type": "application/json",
                        "apikey": SUPABASE_API_KEY,
                    },
                });

                if (!response.ok) throw new Error("Failed to fetch data");

                const records = await response.json();

                // Organize data by driver and date
                const drivers = {};
                records.forEach(record => {
                    const driver = record.driver_names;
                    const paymentDate = record.payment_date;
                    const amount = record.amount;

                    if (!drivers[driver]) drivers[driver] = {};
                    drivers[driver][paymentDate] = amount;
                });

                // Generate payment calendar table
                generateTable(drivers, daysInMonth, currentYear, selectedMonth);

                // Generate debt table
                generateDebtTable(drivers, daysInMonth, currentYear, selectedMonth);
            } catch (error) {
                console.error("Error fetching data:", error);
            }
        }

        function generateTable(drivers, daysInMonth, year, month) {
            const table = document.getElementById("calendarTable");
            const theadRow = table.querySelector("thead tr");
            const tbody = table.querySelector("tbody");

            // Clear previous data
            theadRow.innerHTML = "<th>Date</th>";
            tbody.innerHTML = "";

            // Add driver name columns to the table header
            Object.keys(drivers).forEach(driver => {
                const th = document.createElement("th");
                th.textContent = driver;
                theadRow.appendChild(th);
            });

            // Add rows for each day
            for (let day = 1; day <= daysInMonth; day++) {
                const date = `${year}-${String(month).padStart(2, "0")}-${String(day).padStart(2, "0")}`;
                const tr = document.createElement("tr");

                // Add date to the first column
                const tdDate = document.createElement("td");
                tdDate.textContent = date;
                tr.appendChild(tdDate);

                // Add payment data for each driver
                Object.keys(drivers).forEach(driver => {
                    const td = document.createElement("td");
                    td.textContent = drivers[driver][date] ? `$${drivers[driver][date].toFixed(2)}` : "No Payment";
                    tr.appendChild(td);
                });

                tbody.appendChild(tr);
            }
        }

        function generateDebtTable(drivers, daysInMonth, year, month) {
            const table = document.getElementById("debtTable");
            const tbody = table.querySelector("tbody");

            // Clear previous debt data
            tbody.innerHTML = "";

            // Add debt rows for each driver
            Object.keys(drivers).forEach(driver => {
                const unpaidDates = [];
                let totalDebt = 0;

                // Check each day of the month for unpaid dates
                for (let day = 1; day <= daysInMonth; day++) {
                    const date = `${year}-${String(month).padStart(2, "0")}-${String(day).padStart(2, "0")}`;
                    if (!drivers[driver][date]) {
                        unpaidDates.push(date);
                        totalDebt += NORMAL_PRICE;
                    }
                }

                // If the driver has unpaid days, display them
                if (unpaidDates.length > 0) {
                    const tr = document.createElement("tr");

                    // Add driver name
                    const tdName = document.createElement("td");
                    tdName.textContent = driver;
                    tr.appendChild(tdName);

                    // Add unpaid dates
                    const tdUnpaidDates = document.createElement("td");
                    tdUnpaidDates.textContent = unpaidDates.join(", ");
                    tr.appendChild(tdUnpaidDates);

                    // Add total debt
                    const tdTotalDebt = document.createElement("td");
                    tdTotalDebt.textContent = `$${totalDebt.toFixed(2)}`;
                    tr.appendChild(tdTotalDebt);

                    tbody.appendChild(tr);
                }
            });
        }
    </script>
</body>
</html>











<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Dashtreme Admin - Free Dashboard for Bootstrap 4 by Codervent</title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">

  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  <style>
    #calendar {
        display: grid;
        grid-template-columns: repeat(7, 1fr);
        gap: 5px;
        max-width: 400px;
        margin: 20px auto;
        font-family: Arial, sans-serif;
    }

    #calendar .day {
        padding: 10px;
        border: 1px solid #ddd;
        text-align: center;
        border-radius: 5px;
        background-color: #f9f9f9;
    }

    #calendar .day.paid {
        background-color: #d4edda;
        color: #155724;
        border-color: #c3e6cb;
    }

    #calendar .day.unpaid {
        background-color: #f8d7da;
        color: #721c24;
        border-color: #f5c6cb;
    }

    #calendar .header {
        font-weight: bold;
        background-color: #f1f1f1;
        border-color: #ddd;
    }
</style>

  
</head>

<body class="bg-theme bg-theme1">

   <!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">
 
   <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="index.html">
       <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">Dashtreme Admin</h5>
     </a>
   </div>
   <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">MAIN NAVIGATION</li>
      <li>
        <a href="index.html">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>

      <li>
        <a href="icons.html">
          <i class="zmdi zmdi-invert-colors"></i> <span>UI Icons</span>
        </a>
      </li>

      <li>
        <a href="forms.html">
          <i class="zmdi zmdi-format-list-bulleted"></i> <span>Forms</span>
        </a>
      </li>

      <li>
        <a href="tables.html">
          <i class="zmdi zmdi-grid"></i> <span>Tables</span>
        </a>
      </li>

      <li>
        <a href="calendar.html">
          <i class="zmdi zmdi-calendar-check"></i> <span>Calendar</span>
          <small class="badge float-right badge-light">New</small>
        </a>
      </li>

      <li>
        <a href="profile.html">
          <i class="zmdi zmdi-face"></i> <span>Profile</span>
        </a>
      </li>

      <li>
        <a href="login.html" target="_blank">
          <i class="zmdi zmdi-lock"></i> <span>Login</span>
        </a>
      </li>

       <li>
        <a href="register.html" target="_blank">
          <i class="zmdi zmdi-account-circle"></i> <span>Registration</span>
        </a>
      </li>
	 

      <li class="sidebar-header">LABELS</li>
      <li><a href="javaScript:void();"><i class="zmdi zmdi-coffee text-danger"></i> <span>Important</span></a></li>
      <li><a href="javaScript:void();"><i class="zmdi zmdi-chart-donut text-success"></i> <span>Warning</span></a></li>
      <li><a href="javaScript:void();"><i class="zmdi zmdi-share text-info"></i> <span>Information</span></a></li>

    </ul>
   
   </div>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
    <li class="nav-item">
      <form class="search-bar">
        <input type="text" class="form-control" placeholder="Enter keywords">
         <a href="javascript:void();"><i class="icon-magnifier"></i></a>
      </form>
    </li>
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
      <i class="fa fa-envelope-open-o"></i></a>
    </li>
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
      <i class="fa fa-bell-o"></i></a>
    </li>
    <li class="nav-item language">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();"><i class="fa fa-flag"></i></a>
      <ul class="dropdown-menu dropdown-menu-right">
          <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
        </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title">Sarajhon Mccoy</h6>
            <p class="user-subtitle">mccoy@example.com</p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li>
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
    
    <div class="mt-3">
      



      <div id="calendar"></div>




    </div>
			
		<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->	
			
    </div>
    <!-- End container-fluid-->
   </div><!--End content-wrapper-->
   
  <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2018 Dashtreme Admin
        </div>
      </div>
    </footer>
	<!--End footer-->
	
	<!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
		<li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
      </ul>
      
     </div>

     
   </div>
  <!--end color switcher-->
   
  </div><!--End wrapper-->


  <!-- Bootstrap core JavaScript-->
  <script>
    // Mock data for paid and unpaid dates (replace with actual API call later)
    const paidDates = ["2024-12-05", "2024-12-15", "2024-12-25"];
    const unpaidDates = ["2024-12-10", "2024-12-20"];

    function generateCalendar(year, month) {
        const calendar = document.getElementById('calendar');
        calendar.innerHTML = ''; // Clear existing calendar

        // Days of the week headers
        const daysOfWeek = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
        daysOfWeek.forEach(day => {
            const header = document.createElement('div');
            header.textContent = day;
            header.classList.add('day', 'header');
            calendar.appendChild(header);
        });

        // Calculate the first and last days of the month
        const firstDay = new Date(year, month, 1).getDay();
        const lastDate = new Date(year, month + 1, 0).getDate();

        // Fill in blank days before the first day
        for (let i = 0; i < firstDay; i++) {
            const blank = document.createElement('div');
            blank.classList.add('day');
            calendar.appendChild(blank);
        }

        // Fill in the days of the month
        for (let date = 1; date <= lastDate; date++) {
            const day = document.createElement('div');
            day.textContent = date;
            day.classList.add('day');

            // Format the date to compare with paid/unpaid dates
            const formattedDate = `${year}-${String(month + 1).padStart(2, '0')}-${String(date).padStart(2, '0')}`;
            
            if (paidDates.includes(formattedDate)) {
                day.classList.add('paid');
            } else if (unpaidDates.includes(formattedDate)) {
                day.classList.add('unpaid');
            }

            calendar.appendChild(day);
        }
    }

    // Generate the calendar for the current month
    const today = new Date();
    generateCalendar(today.getFullYear(), today.getMonth());
</script>

  
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
  <!-- simplebar js -->
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  

</body>
</html>
