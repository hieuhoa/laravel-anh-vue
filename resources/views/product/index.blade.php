@extends('layout.master')
@section('content')
<div class="container ops-main">
<div class="row">
  <div class="col-md-12">
    <h3 class="ops-title">ProDuct</h3>
  </div>
</div>
<div class="row">
  <div class="col-md-11 col-md-offset-1">
    <table class="table text-center">
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">products_codes</th>
        <th class="text-center">product_name</th>
        <th class="text-center">product_line</th>
        <th class="text-center">product_scale</th>
        <th class="text-center">product_vendor</th>
        <th class="text-center">product_description</th>
        <th class="text-center">quanitily_inStock</th>
        <th class="text-center">buy_price</th>
      </tr>
      @foreach($products as $product)
      <tr>
        <td>
          <a href="/product/{{ $product->id }}/edit">{{ $product->id }}</a>
        </td>
        <td>{{ $product->products_codes }}</td>
        <td>{{ $product->product_name }}</td>
        <td>{{ $product->product_line }}</td>
        <td>{{ $product->product_scale }}</td>
        <td>{{ $product->product_vendor }}</td>
        <td>{{ $product->product_description }}</td>
        <td>{{ $product->quanitily_inStock }}</td>
        <td>{{ $product->buy_price }}</td>


        <td>
          <form action="/product/{{ $product->id }}" method="post">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit" class="btn btn-xs btn-danger" aria-label="Left Align"><span class="glyphicon glyphicon-trash"></span></button>
          </form>
        </td>
      </tr>
      @endforeach
    </table>
    <div><a href="/product/create" class="btn btn-default">Product Create</a></div>
  </div>
</div>
@endsection