@extends('layout'){{--Gives the file knowledge of the layout.blade.php file. Don't need the extension--}}

@section('title', 'Invoices'){{--Gives the value of 'Invoices' to the section title--}}

@section('main')
  <form action="/" method="get" value='{{$search}}'>
    <input type="text" name="search">
    <button type="submit">Search</button>
    <a href='/' class='btn btn-link'>Clear</a>
  </form>
  <table class="table">
    <tr>
      <th>Date</th>
      <th>Total</th>
      <th>Customer</th>
      <th>Email</th>
    </tr>
        @forelse ($invoices as $invoice)
        
      <tr>
        <td>
            {{$invoice->InvoiceDate}}
        </td>
        <td>
            {{$invoice->Total}}
        </td>
        <td>
            {{$invoice->FirstName}} {{$invoice->LastName}}
        </td>
        <td>
            {{$invoice->Email}}
        </td>
      </tr>
      @empty {{--If there are no results from $invoices variable--}}
      <tr>
            <td colspan="4">No invoices found</td>
          </tr>
      @endforelse
  </table>
@endsection