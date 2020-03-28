@extends('layouts.app')

@section('content')
    <div class="panel-heading">Customers</div>
    <div class="panel-body">
        <a href="{{ route('customers.export') }}" class="btn btn-primary">Export all customers</a>
        <a href="{{ route('customers.export_view') }}" class="btn btn-primary">Export view</a>
        <a href="{{ route('customers.export_format', 'Csv') }}" class="btn btn-primary">Export CSV</a>
        <a href="{{ route('customers.export_format', 'Html') }}" class="btn btn-primary">Export HTML</a>
        <a href="{{ route('customers.export_format', 'DOMPDF') }}" class="btn btn-primary">Export PDF</a>
        <a href="{{ route('customers.export_sheets') }}" class="btn btn-primary">Export Sheets</a>
        <br>
        <form action="{{ route('customers.import' )}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="import">
            <input type="submit" class="btn btn-sm btn-primary" value="Import File">
        </form>
        <br>
        <br>
        @include('customers.table', $customers)
    </div>
@endsection