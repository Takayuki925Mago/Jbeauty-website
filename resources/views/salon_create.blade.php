@extends('layout.common')

@include('layout.header')
@section('top')
{!! Form::open(['url' => 'salon_store']) !!}
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Salon name</label>
  <input type="text" name="salon_name" class="form-control" id="exampleFormControlInput1" placeholder="name...">
</div>
<div class="form-group">
    {!! Form::label('salon_info', 'Salon information') !!}
    {!! Form::textarea('salon_info', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('salon_other', 'Salon other') !!}
    {!! Form::textarea('salon_other', null, ['class' => 'form-control']) !!}
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Salon Instagram</label>
  <input type="text" name="salon_insta" class="form-control" id="exampleFormControlInput1" placeholder="Account url">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Salon Facebook</label>
  <input type="text" name="salon_facebook" class="form-control" id="exampleFormControlInput1" placeholder="Account url">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Salon Twitter</label>
  <input type="text" name="salon_twitter" class="form-control" id="exampleFormControlInput1" placeholder="Account url">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Salon tiktok</label>
  <input type="text" name="salon_tiktok" class="form-control" id="exampleFormControlInput1" placeholder="Account url">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Salon youtube</label>
  <input type="text" name="salon_youtube" class="form-control" id="exampleFormControlInput1" placeholder="Account url">
</div>
<div class="form-group">
    {!! Form::label('other', 'Other') !!}
    {!! Form::textarea('other', null, ['class' => 'form-control']) !!}
</div>
<!-- <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Other</label>
  <textarea name="other" class="form-control" id="exampleFormControlTextarea1" rows="7"></textarea>
</div> -->
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Salon logo</label>
  <input type="text" name="salon_logo" class="form-control" id="exampleFormControlInput1" placeholder="logo">
</div>

<input class="btn btn-primary" type="submit" value="Input" style="margin: 1rem 0; float: right;">
{!! Form::close() !!}
@include('layout.footer')
@endsection