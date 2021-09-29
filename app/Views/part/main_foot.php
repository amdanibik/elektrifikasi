
<!-- jQuery -->
<script src="<?= base_url('plugins/jquery/jquery.min.js') ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url('plugins/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('plugins/datatables-responsive/js/dataTables.responsive.min.js') ?>"></script>
<script src="<?= base_url('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('plugins/datatables-buttons/js/dataTables.buttons.min.js') ?>"></script>
<script src="<?= base_url('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('plugins/jszip/jszip.min.js') ?>"></script>
<script src="<?= base_url('plugins/pdfmake/pdfmake.min.js') ?>"></script>
<script src="<?= base_url('plugins/pdfmake/vfs_fonts.js') ?>"></script>
<script src="<?= base_url('plugins/datatables-buttons/js/buttons.html5.min.js') ?>"></script>
<script src="<?= base_url('plugins/datatables-buttons/js/buttons.print.min.js') ?>"></script>
<script src="<?= base_url('plugins/datatables-buttons/js/buttons.colVis.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('dist/js/adminlte.min.js') ?>"></script>
<!-- SweetAlert2 -->
<script src="<?= base_url('plugins/sweetalert2/sweetalert2.min.js') ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('dist/js/demo.js') ?>"></script>
<!-- Page specific script -->
<!-- Select2 -->
<script src="<?= base_url('plugins/select2/js/select2.full.min.js') ?>"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script>
  $(function (){
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
        
        $(document).ready(function(){
            var nilai = $("#hasilnotif").val();
            if(nilai === "successkab"){
                Toast.fire({
                    icon: 'success',
                    title: ' Sukses Tambah Kabupaten.'
                });
            } else if(nilai === "successkabe"){
                Toast.fire({
                    icon: 'success',
                    title: ' Sukses Ubah Kabupaten.'
                });
            } else if(nilai === "successkabh"){
                Toast.fire({
                    icon: 'warning',
                    title: ' Sukses Hapus Kabupaten.'
                });
            } else if(nilai === "failedkab"){
                Toast.fire({
                    icon: 'error',
                    title: ' Gagal Operasi Tambah atau Ubah atau Hapus Kabupaten.'
                });
            } else if(nilai === "successkec"){
                Toast.fire({
                    icon: 'success',
                    title: ' Sukses Tambah Kecamatan.'
                });
            } else if(nilai === "successkece"){
                Toast.fire({
                    icon: 'success',
                    title: ' Sukses Ubah Kecamatan.'
                });
            } else if(nilai === "successkech"){
                Toast.fire({
                    icon: 'warning',
                    title: ' Sukses Hapus Kecamatan.'
                });
            } else if(nilai === "failedkec"){
                Toast.fire({
                    icon: 'error',
                    title: ' Gagal Operasi Tambah atau Ubah atau Hapus Kecamatan.'
                });
            } else if(nilai === "successdes"){
                Toast.fire({
                    icon: 'success',
                    title: ' Sukses Tambah Desa.'
                });
            } else if(nilai === "successdese"){
                Toast.fire({
                    icon: 'success',
                    title: ' Sukses Ubah Desa.'
                });
            } else if(nilai === "successdesh"){
                Toast.fire({
                    icon: 'warning',
                    title: ' Sukses Hapus Desa.'
                });
            } else if(nilai === "faileddes"){
                Toast.fire({
                    icon: 'error',
                    title: ' Gagal Operasi Tambah atau Ubah atau Hapus Desa.'
                });
            } else if(nilai === "successtah"){
                Toast.fire({
                    icon: 'success',
                    title: ' Sukses Tambah Tahun.'
                });
            } else if(nilai === "successtahe"){
                Toast.fire({
                    icon: 'success',
                    title: ' Sukses Ubah Tahun.'
                });
            } else if(nilai === "successtahh"){
                Toast.fire({
                    icon: 'warning',
                    title: ' Sukses Hapus Tahun.'
                });
            } else if(nilai === "failedtah"){
                Toast.fire({
                    icon: 'error',
                    title: ' Gagal Operasi Tambah atau Ubah atau Hapus Tahun.'
                });
            } else if(nilai === "successsta"){
                Toast.fire({
                    icon: 'success',
                    title: ' Sukses Tambah Status.'
                });
            } else if(nilai === "successstae"){
                Toast.fire({
                    icon: 'success',
                    title: ' Sukses Ubah status.'
                });
            } else if(nilai === "successstah"){
                Toast.fire({
                    icon: 'warning',
                    title: ' Sukses Hapus Status.'
                });
            } else if(nilai === "failedsta"){
                Toast.fire({
                    icon: 'error',
                    title: ' Gagal Operasi Tambah atau Ubah atau Hapus Status.'
                });
            } else if(nilai === "successcat"){
                Toast.fire({
                    icon: 'success',
                    title: ' Sukses Tambah Pencatatan.'
                });
            } else if(nilai === "successcath"){
                Toast.fire({
                    icon: 'warning',
                    title: ' Sukses Hapus Pencatatan.'
                });
            } else if(nilai === "failedcat"){
                Toast.fire({
                    icon: 'error',
                    title: ' Gagal Operasi Tambah atau Hapus Pencatatan.'
                });
            } else {
                
            }
        });
    });
</script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End
</script>


