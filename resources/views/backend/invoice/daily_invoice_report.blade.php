
@extends('layouts.backend.app')
@push('css')

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

@endpush


@section('content')
<div class=" row mb-5 justify-content-center">
<div class=" text-center col-md-12">
    <h1>Report form</h1>
    <div class=" divider"></div>
</div>
 

    <div class=" col-md-3">
        <div class=" card">
            <div class=" card-header">
                Daily report
            </div>
            <div class=" card-body text-center">
                <form action="{{ route('app.report.dailyinvoicereport') }}" method="GET" target="_blank"  method="GET">
                    <input type="text"  id="datepicker" name="daily_report" value="d/m/y" class=" date daily_report form-control mb-2">


                    <input type="submit" class=" btn btn-primary" value="Search">
                </form>


            </div>
        </div>
    </div>


    <div class=" col-md-3">
        <div class=" card">
            <div class=" card-header">
                Monthly report
            </div>
            <div class=" card-body text-center">
                <form action="{{ route('app.report.dailyinvoicereport') }}" method="GET" target="_blank"  method="GET">
                    <input type="text"  id="mdatepicker" name="monthly_report" value="m/y" class=" date daily_report form-control mb-2">


                    <input type="submit" class=" btn btn-primary" value="Search">
                </form>


            </div>
        </div>
    </div>


    <div class=" col-md-3">
        <div class=" card">
            <div class=" card-header">
                Yearly report
            </div>
            <div class=" card-body text-center">
                <form action="{{ route('app.report.dailyinvoicereport') }}" method="GET" target="_blank"  method="GET">
                    <input type="text"  id="ydatepicker" name="yearly_report" value="y" class=" date daily_report form-control mb-2">


                    <input type="submit" class=" btn btn-primary" value="Search">
                </form>


            </div>
        </div>
    </div>

 
</div>

@endsection


@push('js')
<script>
    $( function() {

         $('#datepicker').datepicker({
        dateFormat:"dd/mm/yy",
        // showOn: 'both',
        uilibrary:'bootstrap4',
        showOtherMonths: true,
        selectOtherMonths: true,
      

        

        }).attr('readonly', 'readonly');





//monthly report


$('#mdatepicker').datepicker({
        dateFormat:"mm/yy",
        // showOn: 'both',
        uilibrary:'bootstrap4',
        showOtherMonths: true,
        selectOtherMonths: true,
      

        

        }).attr('readonly', 'readonly');


//yerly report
$('#ydatepicker').datepicker({
        dateFormat:"yy",
        // showOn: 'both',
        uilibrary:'bootstrap4',
        showOtherMonths: true,
        selectOtherMonths: true,
      

        

        }).attr('readonly', 'readonly');




        })






var dt= new Date();
// document.getElementById('datef').innerHTML=[dt.getDate(),dt.getMonth(),dt.getFullYear()].join('/');
document.getElementById('datef').value=[dt.getDate(),dt.getMonth(),dt.getFullYear()].join('/');


    </script>

@endpush
