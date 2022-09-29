@extends('layout.common')

@include('layout.header')
@section('top')
<table class="table table-striped">
    <thead>
        <tr>
          <th>ブックナンバー</th>
          <th>ブック名</th>
          <th>作成日</th>
        </tr>
    </thead>
    <tbody>
        <tr>
          <td>{{ $salon->salon_name }}</td>
          <td>{{ $salon->salon_info }}</td>
          <td>{{ $salon->salon_other }}</td>
        </tr>
    </tbody>
</table>
@include('layout.footer')
@endsection