<?php 
$page = 'download';
include 'header.php';
?>
<!-- jQuery UI CSS CDN -->

<!-- jQuery UI JS CDN -->
<script src=
"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js">
</script>
  <style>
    button.dt-button,
    div.dt-button,
    a.dt-button,
    input.dt-button {
      background: #e0ff00;
      border-radius: 6px;
      border: 1px solid black;
      font-weight: 700;
    }
    thead {
      background: #e0ff00;
      font-weight: 800;
      font-size: 18px;
    }
    td {
      background-color: #fbffe1 !important ;
      font-size: 15px;
    }
    label {
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700;
      color: white;
    }
    input {
      border: 1px solid #fbffe1;
      border-radius: 6px;
      padding: 7px;
      background-color: transparent;
      margin-left: 3px;
      color: white;
      outline: #e0ff00;
      margin-bottom: 6px;
    }
    .dataTables_wrapper .dataTables_length,
    .dataTables_wrapper .dataTables_filter,
    .dataTables_wrapper .dataTables_info,
    .dataTables_wrapper .dataTables_processing,
    .dataTables_wrapper .dataTables_paginate {
      color: #fff !important;
    }
    .dataTables_wrapper .dataTables_paginate .paginate_button.disabled,
    .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover,
    .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active {
      cursor: default;
      color: #fff !important ;
      border: 1px solid transparent;
      background: transparent;
      box-shadow: none;
    }
    .dataTables_wrapper .dataTables_paginate .paginate_button {
      box-sizing: border-box;
      display: inline-block;
      min-width: 1.5em;
      padding: 0.5em 1em;
      margin-left: 2px;
      text-align: center;
      text-decoration: none !important;
      cursor: pointer;
      color: white !important;
      border: 1px solid transparent;
      border-radius: 2px;
    }
  </style>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <h3 class="main_heading">QESPL Weather Monitoring Application</h3>

        <style>
          .border {
            border: 1px solid white !important;
          }
          label {
            color: white;
          }
        </style>

        <!-- Main content -->
        <section class="content">
          <div
            class="col-sm-12"
            style="
              background-color: #37322c80;
              border-radius: 27px 27px 0px 27px;
              padding: 20px;
            "
          >
            <!-- Start Date and End Date Picker -->
            <label for="start_date">From Date</label>
            <input type="text" id="start_date" />
            <label for="end_date">To Date</label>
            <input type="text" id="end_date" />
            <button id="submit">Submit</button>

            <table id="example" class="display" style="width: 100%">
              <thead>
                <tr>
                  <th>Entry ID</th>
                  <th>Time Stamp</th>
                  <th>Temperature</th>
                  <th>API Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1011</td>
                  <td>13:02:22 03/15/2024</td>
                  <td>32</td>
                  <td>OK</td>
                </tr>
                <tr>
                  <td>1012</td>
                  <td>14:02:22 03/26/2024</td>
                  <td>32</td>
                  <td>OK</td>
                </tr>
                <tr>
                  <td>1013</td>
                  <td>13:02:22 15/MAR/2024</td>
                  <td>32</td>
                  <td>OK</td>
                </tr>
                <tr>
                  <td>1011</td>
                  <td>13:02:22 17/MAR/2024</td>
                  <td>50</td>
                  <td>OK</td>
                </tr>
                <tr>
                  <td>1011</td>
                  <td>13:02:22 12/MAR/2024</td>
                  <td>32</td>
                  <td>OK</td>
                </tr>
                <tr>
                  <td>1012</td>
                  <td>14:02:22 12/MAR/2024</td>
                  <td>32</td>
                  <td>OK</td>
                </tr>
                <tr>
                  <td>1013</td>
                  <td>13:02:22 18/MAR/2024</td>
                  <td>32</td>
                  <td>OK</td>
                </tr>
                <tr>
                  <td>1011</td>
                  <td>13:02:22 12/MAR/2024</td>
                  <td>50</td>
                  <td>OK</td>
                </tr>
                <tr>
                  <td>1011</td>
                  <td>13:02:22 12/MAR/2024</td>
                  <td>32</td>
                  <td>OK</td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>
      </div>
      <!-- /.content-wrapper -->
      <footer class="main-footer" style="margin-top: 10px;">
        <strong
          >Copyright &copy; 2020-2023
          <a href="https://gowatr.com">GoWatr Pvt Ltd</a>.</strong
        >
        All rights reserved.
      </footer>

      <!-- Control Sidebar -->

      <!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div>

    <!-- ./wrapper -->

 <?php require "footer.php"; ?>

    <script>
      $(document).ready(function () {
        // Initialize DataTable with export buttons
        var table = $("#example").DataTable({
          dom: "Bfrtip", // Add the export buttons container
          pageLength: "8",
          buttons: [
            // {
            //   extend: "copyHtml5",
            //   text: "Copy",
            //   className: "btn btn-primary",
            // },
            {
              extend: "excelHtml5",
              text: "Excel",
              className: "btn btn-primary",
            },
            {
              extend: "csvHtml5",
              text: "CSV",
              className: "btn btn-primary",
            },
            {
                extend: 'pdfHtml5',
                text: 'PDF',
                className: 'btn btn-primary',
                customize: function(doc) {
                    
                    doc.content[1].table.widths = Array(doc.content[1].table.body[0].length + 1).join('*').split('');
                    
                    var rowCount = doc.content[1].table.body.length;
                    for (var i = 0; i < rowCount; i++) {
                        var row = doc.content[1].table.body[i];
                        if (row) {
                            var cellCount = row.length;
                            for (var j = 0; j < cellCount; j++) {
                                if (row[j]) {
                                    row[j].alignment = 'center';
                                }
                            }
                        }
                    }
                }
             },
            {
              extend: "print",
              text: "Print",
              className: "btn btn-primary",
            },
          ],
        });

        // Initialize datepickers for start and end dates
        $("#start_date").datepicker();
        $("#end_date").datepicker();

        // Submit button click event to filter table data by date range
        $("#submit").click(function () {
          var startDate = $("#start_date").datepicker("getDate");
          var endDate = $("#end_date").datepicker("getDate");

          // Filter table data based on date range
          table
            .draw()
            .search(
              startDate.getFullYear() +
                "-" +
                (startDate.getMonth() + 1) +
                "-" +
                startDate.getDate() +
                " " +
                endDate.getFullYear() +
                "-" +
                (endDate.getMonth() + 1) +
                "-" +
                endDate.getDate()
            )
            .draw();
        });
      });
    </script>
    <script>
      // document.addEventListener("DOMContentLoaded", function () {
      //   var parents = document.querySelectorAll(".parent");

      //   parents.forEach(function (parent) {
      //     var submenu = parent.querySelector(".submenu");

      //     parent.addEventListener("click", function () {
      //       submenu.classList.toggle("show");
      //       parent.classList.toggle("open");
      //     });
      //   });
      // });
    </script>


  </body>
</html>
