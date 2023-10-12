function loadContent(component) {
    // Use jQuery to load and include the PHP file
    $.ajax({
        url: './configs/loadContents.php',
        type: 'POST',
        data: {component: component},
        success: function (response) {
            $('#content-container').html(response);
        }
    });
}

$(document).ready(function() {
    loadContent('home');

    $('#example').DataTable(
        {
          "dom": '<"dt-buttons"Bf><"clear">lirtp',
          "paging": true,
          "autoWidth": true,
          "buttons": [
            'colvis',
            'copyHtml5',
            'csvHtml5',
            'excelHtml5',
            'pdfHtml5',
            'print'
          ]
        }
      );
});