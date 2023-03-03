<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employees Data</title>
</head>
<link rel="stylesheet" type="text/css"
href="{{ asset('app-assets') }}/vendors/css/tables/datatable/dataTables.bootstrap5.min.css">
<link rel="stylesheet" type="text/css"
href="{{ asset('app-assets') }}/vendors/css/tables/datatable/responsive.bootstrap5.min.css">
<link rel="stylesheet" type="text/css"
href="{{ asset('app-assets') }}/vendors/css/tables/datatable/buttons.bootstrap5.min.css">
<link rel="stylesheet" type="text/css"
href="{{ asset('app-assets') }}/vendors/css/tables/datatable/rowGroup.bootstrap5.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/pickers/flatpickr/flatpickr.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/plugins/forms/form-validation.css">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/plugins/forms/form-validation.css">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/bootstrap.min.css">
<link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/components.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/themes/dark-layout.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/themes/bordered-layout.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/themes/semi-dark-layout.min.css">
<body>
    
    <div class="row" style="margin: 2%">
        <div class="card">
            <div class="card-header">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-2">
                            <b>Total <span id="count"></span> </b>
                        </div>
                        <div class="offset-md-7 col-md-3">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search" name="search" id="search">
                                <div class="input-group-prepend">
                                  <button class="btn btn-primary" type="button">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped" id="employees-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Contact</th>
                                <th>Address</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                            </tr>
                            <tbody id="tbody"></tbody>
                        </thead>
            
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{ view('employe.modal') }}

    
</body>
</html>
<script src="{{ asset('app-assets') }}/js/core/app-menu.min.js"></script>
<script src="{{ asset('app-assets') }}/js/core/app.min.js"></script>
{{-- <script src="{{ asset('app-assets') }}/js/scripts/customizer.min.js"></script> --}}
<script src="{{ asset('app-assets') }}/vendors/js/forms/select/select2.full.min.js"></script>
{{-- <script src="{{ asset('app-assets') }}/vendors/datatables/buttons.server-side.js"></script> --}}
<script src="{{ asset('app-assets') }}/js/scripts/forms/form-select2.min.js"></script>
<!-- END: Theme JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.2.0/tinymce.min.js"
 integrity="sha512-tofxIFo8lTkPN/ggZgV89daDZkgh1DunsMYBq41usfs3HbxMRVHWFAjSi/MXrT+Vw5XElng9vAfMmOWdLg0YbA=="
 crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/dataTables.bootstrap5.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/responsive.bootstrap5.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/datatables.checkboxes.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/buttons.colVis.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/jszip.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/pdfmake.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/vfs_fonts.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/dataTables.rowGroup.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/buttons.server-side.js"></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script>    
function date(dateObject) {
    var d = new Date(dateObject);
    var day = d.getDate();
    var month = d.getMonth() + 1;
    var year = d.getFullYear();
    if (day < 10) {
        day = "0" + day;
    }
    if (month < 10) {
        month = "0" + month;
    }
    var date = day + "/" + month + "/" + year;

    return date;
};
$(document).ready(function() {
    $.ajax({
            type: "GET",
            url: "{{ url('http://127.0.0.1:8000/api/employees') }}",
            data: "data",
            dataType: "json",
            success: function (response) {
                if(response.status)
                {
                    $('#count').text(response.data.employee_counts);
                    response.data.employees.forEach(employee=>{
                        $('#tbody').append('<tr><td>'+employee.id+'</td><td class="clickable" data-id="'+employee.id+'" ><a href="#">'+employee.name+'</a></td><td>'+employee.designation+'</td><td>'+employee.contact_no+'</td><td>'+employee.address+'</td><td>'+date(employee.created_at)+'</td><td>'+date(employee.updated_at)+'</td></tr>');
                    })
                }
            }
        });
        
    }); 
       
    $(document).on('click','.clickable',function(){
        // alert('dddd');
        let id = $(this).attr('data-id');
        // alert(id);
        $('#employeModal').modal('show');
        $.ajax({
            type: "GET",
            url: "{{url('api/employee-details/')}}"+'/'+id,
            dataType: "json",
            success: function (response) {
                console.log(response);
                if(response.status)
                {
                    $('#name').text(response.data.name);
                    $('#id').text(response.data.id);
                    $('#designation').text(response.data.designation);
                    $('#contact_no').text(response.data.contact_no);
                    $('#created_at').text(date(response.data.created_at));
                    $('#updated_at').text(date(response.data.updated_at));
                    $('#address').text(response.data.address);

                }
            }
        });
    })
    </script>