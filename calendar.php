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
        background-color: #141212;
    }
    .debt-table {
        margin-top: 30px;
    }
    .error {
        color: red;
        font-weight: bold;
    }

/* Label Styles */
label {
    font-size: 16px;
    margin-right: 10px;
    color: #bb86fc; /* Light purple for labels */
}

/* Dropdown Selectors */
select {
    background-color: #1e1e1e; /* Darker background for selectors */
    color: #e0e0e0; /* Light text for options */
    border: 1px solid #bb86fc; /* Light purple border */
    border-radius: 4px;
    padding: 5px 10px;
    font-size: 14px;
    margin-right: 10px;
}

/* Dropdown Hover and Focus States */
select:hover,
select:focus {
    outline: none;
    border-color: #03dac6; /* Teal border on focus */
}

/* Button Styles */
button {
    background-color: #659aaa; /* Light purple background */
    color: #121212; /* Dark text for contrast */
    border: none;
    border-radius: 4px;
    padding: 5px 15px;
    font-size: 14px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

/* Button Hover and Focus States */
button:hover,
button:focus {
    background-color: #d2d885; /* Darker purple for hover */
    outline: none;
}

/* Responsive Adjustments */
@media (max-width: 600px) {
    label, select, button {
        display: block;
        width: 100%;
        margin-bottom: 10px;
    }
}

</style>

<link href="assets/css/app-style.css" rel="stylesheet"/>
<script> function loadSidebar() { fetch('sidebar.html') .then(response => response.text()) .then(data => { document.getElementById('sidebar-wrapper').innerHTML = data; }); } window.onload = loadSidebar; </script>
</head>

<body class="bg-theme bg-theme1">
     <!-- start loader -->
     <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
     <!-- end loader -->
  
  <!-- Start wrapper-->
   <div id="wrapper">
   
     <!--Start sidebar-wrapper-->
     <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     
   
     </div>








     
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








    <h1>Driver Payments Calendar</h1>

<!-- Year and Month Selector -->
<label for="yearSelector">Select Year:</label>
<select id="yearSelector">
    <option value="" disabled selected>Select Year</option>
    <!-- Years will be added dynamically -->
</select>

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

<button onclick="handleSelection()">Load Data</button>

<div id="errorMessage" class="error"></div>


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





    <script>
        // Configuration for the Supabase API
        const SUPABASE_URL = "https://buknofwdefxjmojrwrcz.supabase.co";
        const SUPABASE_API_KEY = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6ImJ1a25vZndkZWZ4am1vanJ3cmN6Iiwicm9sZSI6ImFub24iLCJpYXQiOjE3MzQ0ODMxOTksImV4cCI6MjA1MDA1OTE5OX0.iFSOibxZ-uYZ_-9ArzwnmJJw0Ll2cI2W2lqSbbk1xGk";
        const NORMAL_PRICE = 8000;

        const currentYear = new Date().getFullYear();
        const yearSelector = document.getElementById('yearSelector');

        for (let year = 2020; year <= currentYear; year++) {
            const option = document.createElement('option');
            option.value = year;
            option.textContent = year;
            yearSelector.appendChild(option);
        }

        async function handleSelection() {
            const selectedYear = parseInt(document.getElementById('yearSelector').value, 10);
            const selectedMonth = parseInt(document.getElementById('monthSelector').value, 10);
            const errorMessage = document.getElementById('errorMessage');

            if (!selectedYear || !selectedMonth) {
                errorMessage.textContent = "Please select both year and month.";
                return;
            }

            const currentMonth = new Date().getMonth() + 1;
            if (selectedYear > currentYear || (selectedYear === currentYear && selectedMonth > currentMonth)) {
                errorMessage.textContent = "The selected month and year are in the future.";
                return;
            }

            errorMessage.textContent = ""; // Clear error message
            await fetchReports(selectedYear, selectedMonth);
        }

        async function fetchReports(selectedYear, selectedMonth) {
            try {
                const daysInMonth = new Date(selectedYear, selectedMonth, 0).getDate();

                const response = await fetch(`${SUPABASE_URL}/rest/v1/reports?select=*`, {
                    headers: {
                        "Content-Type": "application/json",
                        "apikey": SUPABASE_API_KEY,
                    },
                });

                if (!response.ok) throw new Error("Failed to fetch data");

                const records = await response.json();
                const drivers = {};

                records.forEach(record => {
                    const driver = record.driver_names;
                    const paymentDate = record.payment_date;
                    const amount = record.amount;

                    if (!drivers[driver]) drivers[driver] = {};
                    drivers[driver][paymentDate] = amount;
                });

                generateTable(drivers, daysInMonth, selectedYear, selectedMonth);
                generateDebtTable(drivers, daysInMonth, selectedYear, selectedMonth);
            } catch (error) {
                console.error("Error fetching data:", error);
            }
        }

        function generateTable(drivers, daysInMonth, year, month) {
            const table = document.getElementById("calendarTable");
            const theadRow = table.querySelector("thead tr");
            const tbody = table.querySelector("tbody");

            theadRow.innerHTML = "<th>Date</th>";
            tbody.innerHTML = "";

            Object.keys(drivers).forEach(driver => {
                const th = document.createElement("th");
                th.textContent = driver;
                theadRow.appendChild(th);
            });

            for (let day = 1; day <= daysInMonth; day++) {
                const date = `${year}-${String(month).padStart(2, "0")}-${String(day).padStart(2, "0")}`;
                const tr = document.createElement("tr");

                const tdDate = document.createElement("td");
                tdDate.textContent = date;
                tr.appendChild(tdDate);

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

            tbody.innerHTML = "";

            Object.keys(drivers).forEach(driver => {
                const unpaidDates = [];
                let totalDebt = 0;

                for (let day = 1; day <= daysInMonth; day++) {
                    const date = `${year}-${String(month).padStart(2, "0")}-${String(day).padStart(2, "0")}`;
                    const today = new Date();
                    const isPast = new Date(date) < today;

                    if (!drivers[driver][date] && isPast) {
                        unpaidDates.push(date);
                        totalDebt += NORMAL_PRICE;
                    }
                }

                if (unpaidDates.length > 0) {
                    const tr = document.createElement("tr");

                    const tdName = document.createElement("td");
                    tdName.textContent = driver;
                    tr.appendChild(tdName);

                    const tdUnpaidDates = document.createElement("td");
                    tdUnpaidDates.textContent = unpaidDates.join(", ");
                    tr.appendChild(tdUnpaidDates);

                    const tdTotalDebt = document.createElement("td");
                    tdTotalDebt.textContent = `$${totalDebt.toFixed(2)}`;
                    tr.appendChild(tdTotalDebt);

                    tbody.appendChild(tr);
                }
            });
        }
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