@extends('layout.common')
@include('layout.header')
@section('top')
@livewire('navigation-menu')
<div class="salon-shop-shingle-title-category" style="margin: 1rem 1rem 1rem auto;">
    <ul>
        <a href="s-salon-list"><li style="background-color: white;"><button type="button" name="shop_salon_category" class="btn btn-outline-primary">Salon Detail</button></li></a>
        <a href="s-professional-list"><li style="background-color: white;"><button type="button" name="shop_salon_category" class="btn btn-primary">Professional List</button></li></a>
        <a href="s-menu-list"><li style="background-color: white;"><button type="button" name="shop_salon_category" class="btn btn-outline-primary">Menu List</button></li></a>
        <form method="POST" action="{{ route('professional_add') }}">
        {{ csrf_field() }}
            <button type="submit" class="btn btn-danger">Add</button>
        </form>
    </ul>
</div>
@foreach ($professionals as $professional)
<a href="{{ route('s_professional_edit_detail', ['id'=>$professional->id]) }}">
<div class="professional-top" style="margin: 1rem auto 1rem auto; padding: 1rem;">
    <div class="salon-shop-shingle-logo" style="margin: 0;">
        <img src="{{ asset($professional->image_path) }}" width="100px" height="100px">
    </div>
    <div class="salon-shop-shingle-title" style="margin: 0.5rem;">
        <div class="salon-shop-shingle-title-category">
            <ul>
                @foreach ($professional->categories as $category)
                <li style="background-color: white;"><button type="button" name="shop_salon_category" class="btn btn-outline-danger" style="font-size: 10px;">{{ $category->name }}</button></li>
                @endforeach
            </ul>
        </div>
        <div class="salon-shop-shingle-title-name">
            <h3 style="font-size: 16px; padding: 0;">{{ $professional->professional_name }}</h3>
        </div>
    </div>
    <div style="width: 100px; margin: auto; text-align: center;">
        <form method="POST" action="{{ route('professional_delete', ['id'=>$professional->id]) }}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
            <input type="submit" value="削除" class="btn btn-danger btn-dell">
        </form>
    </div>
</div>
</a>
@endforeach
<script>
  $(function(){
  $(".btn-dell").click(function(){
  if(confirm("本当に削除しますか？")){
  //そのままsubmit（削除）
  }else{
  //cancel
  return false;
  }
  });
  });
  </script>
@include('layout.footer')
@endsection