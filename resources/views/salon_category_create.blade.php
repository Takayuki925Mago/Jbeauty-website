@extends('layout.common')

@include('layout.header')
@section('top')
{!! Form::open(['url' => 'salon_category_store']) !!}
<select name="salon_id" class="form-select" aria-label="Default select example" style="margin: 1rem 0;">
  <option selected>Select Salon</option>
  @foreach ($salons as $salon)
  <option value="{{ $salon->id }}">{{ $salon->salon_name }}</option>
  @endforeach
</select>

<select name="category_id" class="form-select" aria-label="Default select example" style="margin: 1rem 0;">
  <option selected>Select Category</option>
  @foreach ($categories as $category)
  <option value="{{ $category->id }}">{{ $category->name }}</option>
  @endforeach
</select>

<input class="btn btn-primary" type="submit" value="Input" style="margin: 1rem 0; float: right;">
{!! Form::close() !!}
@include('layout.footer')
@endsection