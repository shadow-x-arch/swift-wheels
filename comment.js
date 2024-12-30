function showPopup(cell) {
    const content = cell.innerHTML; // Get the content of the clicked cell
  
    // Create the popup window
    const popupWindow = window.open('', '_blank', 'width=400,height=300');
    
    // Generate HTML and CSS for the popup
    const popupHTML = `
      <html>
        <head>
          <title>Popup Content</title>
          <style>
body {
    font-family: Arial, sans-serif;
    background-color:rgb(111, 111, 128);
    margin: 0;
    padding: 0;
    color:rgb(217, 217, 231);
}

.container {
    width: 80%;
    margin: 0 auto;
    padding: 20px;
}

h3 {
    text-align: center;
    color: #333;
}

.table-responsive {
    margin-top: 20px;
}

.styled-table {
    width: 100%;
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 18px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    overflow: hidden;
}

.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
    font-weight: bold;
}

.styled-table th, .styled-table td {
    padding: 12px 15px;
}

.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}

.styled-table tbody tr:hover {
    background-color: #f1f1f1;
    cursor: pointer;
}

          </style>
        </head>
<body>
    <div class="container">
        <h3>the comment is:</h3>
        <div class="table-responsive">
        ${content}
        </div>
    </div>
</body>
</html>

    `;
  
    // Write the generated HTML and CSS to the popup
    popupWindow.document.write(popupHTML);
    popupWindow.document.close(); // Close the document stream
  }
  