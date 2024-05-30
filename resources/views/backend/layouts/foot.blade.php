<script src="{{ asset('assets-backend/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('assets-backend/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
{{-- <script>
  $.widget.bridge('uibutton', $.ui.button)
</script> --}}
<!-- Bootstrap 4 -->
<script src="{{ asset('assets-backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('assets-backend/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('assets-backend/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('assets-backend/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('assets-backend/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('assets-backend/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('assets-backend/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('assets-backend/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('assets-backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('assets-backend/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('assets-backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets-backend/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('assets-backend/dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('assets-backend/dist/js/pages/dashboard.js') }}"></script>

<script src="{{ asset('asset-backend/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

{{-- data table --}}
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

{{-- Toastify --}}
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

<script>
    
new DataTable('#dataTable');    
$(document).ready(function() {
    if ($.fn.DataTable.isDataTable('#dataTable')) {
        $('#dataTable').DataTable().destroy(); // Destroy the existing DataTable instance
    }

    var table = $('#dataTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'excelHtml5',
            'pdfHtml5',
            // 'print'
        ]
    });
});
</script>
<script>
function modalDelete(title, name, url, link) {
    $.confirm({
        title: `Delete ${title}?`,
        content: `Are you sure want to delete ${name}`,
        autoClose: 'cancel|8000',
        buttons: {
            delete: {
                text: 'delete',
                action: function () {
                    $.ajax({
                        type: 'POST',
                        url: url,
                        dataType: 'json',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: {
                            "_method": 'delete',
                            "_token": "{{ csrf_token() }}"
                        },
                        success: function (data) {
                            window.location.href = link
                        },
                        error: function (data) {
                            $.alert('Failed!');
                            console.log(data);
                        }
                    });
                }
            },
            cancel: function () {

            }
        }
    });

}
</script>

<script>
function logout() {
    $.confirm({
        icon: 'fas fa-sign-out-alt',
        title: 'Logout',
        theme: 'supervan',
        content: 'Are you sure want to logout?',
        autoClose: 'cancel|8000',
        buttons: {
            logout: {
                text: 'logout',
                btnClass: 'btn-danger',

                action: function () {
                    $.ajax({
                        type: 'POST',
                        url: "{{ route('logout') }}",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: {
                            "_token": "{{ csrf_token() }}"
                        },
                        success: function (data) {
                            location.reload();
                        },
                        error: function (data) {
                            $.alert('Failed!');
                            console.log(data);
                        }
                    });
                }
            },
            cancel: function () {

            }
        }
    });
}
</script>

@if(session()->has('success'))
<script>
        Toastify({
            text: "{{ session()->get('success') }}",
            close: true,
            gravity: "top", // `top` or `bottom`
            position: "center", // `left`, `center` or `right`
            stopOnFocus: true, // Prevents dismissing of toast on hover
            style: {
                background: "#D5F3E9",
                color: "#1f7556"
            },
            duration: 3000
        }).showToast();
</script>
@endif

@if(session()->has('cash'))
<script>
        Toastify({
            text: "{{ session()->get('cash') }}",
            close: true,
            gravity: "top", // `top` or `bottom`
            position: "center", // `left`, `center` or `right`
            stopOnFocus: true, // Prevents dismissing of toast on hover
            style: {
                background: "#D5F3E9",
                color: "#1f7556"
            },
            duration: 8000
        }).showToast();
</script>
@endif

@if(session()->has('warning'))
<script>
    Toastify({
        text: "{{ session()->get('warning') }}",
        close: true,
        gravity: "top", // `top` or `bottom`
        position: "center", // `left`, `center` or `right`
        stopOnFocus: true, // Prevents dismissing of toast on hover
        style: {
            background: "#FBEFDB",
            color: "#916c2e"
        },
        duration: 3000
    }).showToast();
</script>
@endif

@if(session()->has('failed'))
<script>
Toastify({
    text: "🚨 {{ session()->get('failed') }}",
    close: true,
    gravity: "top", // `top` or `bottom`
    position: "center", // `left`, `center` or `right`
    stopOnFocus: true, // Prevents dismissing of toast on hover
    theme: "dark",
    style: {
        background: "#fde1e1",
        color: "#924040"
    },
    duration: 4000
}).showToast();
</script>
@endif