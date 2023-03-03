@extends('layout.layout')
@section('content')
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
                                <input type="text" class="form-control" placeholder="Search By Name" name="search" id="search_field">
                                <div class="input-group-prepend">
                                    <button class="btn btn-primary" id="search_btn" type="button">Search</button>
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

@endsection 

@section('custom-js')
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
        let id = $(this).attr('data-id');
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

    $(document).on('click','#search_btn', function(e){
        e.preventDefault();
        let name = $('#search_field').val();
        $.ajax({
            type: "GET",
            url: "{{ url('api/search/') }}"+'/'+name,
            data: {name:name},
            dataType: "json",
            success: function (response) {
                $('#count').text('');
                if(response.status)
                {
                    $('#tbody').empty();
                    $('#count').text(response.employee_count);

                    response.data.forEach(employee=>{
                        $('#tbody').append('<tr><td>'+employee.id+'</td><td class="clickable" data-id="'+employee.id+'" ><a href="#">'+employee.name+'</a></td><td>'+employee.designation+'</td><td>'+employee.contact_no+'</td><td>'+employee.address+'</td><td>'+date(employee.created_at)+'</td><td>'+date(employee.updated_at)+'</td></tr>');
                    })
                }
            }
        });
    });
    </script>
    @endsection