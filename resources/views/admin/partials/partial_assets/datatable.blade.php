<script src="{{asset('admin/js/default-assets/jquery.datatables.min.js')}}"></script>
<script src="{{asset('admin/js/default-assets/datatables.bootstrap4.js')}}"></script>
<script src="{{asset('admin/js/default-assets/datatable-responsive.min.js')}}"></script>
<script src="{{asset('admin/js/default-assets/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/js/default-assets/datatable-button.min.js')}}"></script>
<script src="{{asset('admin/js/default-assets/button.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/js/default-assets/button.html5.min.js')}}"></script>
<script src="{{asset('admin/js/default-assets/button.flash.min.js')}}"></script>
<script src="{{asset('admin/plugins/jquery-datatable/extensions/export/jszip.min.js')}}"></script>
<script src="{{asset('admin/plugins/jquery-datatable/extensions/export/pdfmake.min.js')}}"></script>
<script src="{{asset('admin/plugins/jquery-datatable/extensions/export/vfs_fonts.js')}}"></script>
<script src="{{asset('admin/js/default-assets/datatables.keytable.min.js')}}"></script>
<script src="{{asset('admin/js/default-assets/datatables.select.min.js')}}"></script>
<script src="{{asset('admin/js/default-assets/button.print.min.js')}}"></script>

<script type="text/javascript">

    $(document).ready(function () {
        //Exportable table
        $('.js-exportable').DataTable({
            dom: 'Bfrtip',
            responsive: true,
            buttons: [
                'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script>
