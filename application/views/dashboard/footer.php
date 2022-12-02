  </main>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>

  <script>
    $(document).ready(function() {
      $('#table_data').DataTable({
        "createdRow": function(row, data, index) {
          $('td', row).css({
            'border-bottom': '4px solid #1D201F'
          });
        }
      });
      $("#table_data").css("border-color", "#1D201F")
      $("#table_data").css("border-bottom-color", "transparent")
      $("#table_data").css("border-width", "4px")
    });
  </script>
  </div>