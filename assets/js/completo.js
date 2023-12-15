$(document).ready(function() {
  $('.btn-inscribir').click(function() {
    // Obtener los valores de la fila seleccionada
    var charla = $(this).closest('tr').find('td:eq(0)').text();
    var vacante = $(this).closest('tr').find('td:eq(1)').text();
    var costo = $(this).closest('tr').find('td:eq(2)').text();
    var descuento = $(this).closest('tr').find('td:eq(3)').text();

    // Asignar los valores a los campos del modal
    $('#charla_modal').val(charla);
    $('#vacante_modal').val(vacante);
    $('#costo_modal').val(costo);
    $('#descuento_modal').val(descuento);
  });
});

$(document).ready(function() {
        $('#btn_pdf').click(function() {
            var doc = new jsPDF();
            var table = document.getElementById('tbl_ganancias');

            var data = [];
            for (var i = 0; i < table.rows.length; i++) {
                var rowData = [];
                for (var j = 0; j < table.rows[i].cells.length; j++) {
                    rowData.push(table.rows[i].cells[j].innerHTML);
                }
                data.push(rowData);
            }

            doc.autoTable({
                head: [['Charla', 'Inscritos', 'Invitados', 'Descuento', 'Costo', 'Total Recaudado']],
                body: data,
            });
            doc.save('reporte.pdf');
        });
    });