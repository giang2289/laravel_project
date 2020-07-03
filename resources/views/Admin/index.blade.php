@push('stylesheets')
 <link rel="stylesheet" href="{{ asset('dist/fontawesome-free/css/all.min.css')}}">
   <link rel="stylesheet" href="{{ asset('dist/adminlte.min.css')}}">
@endpush

@include('Admin.header')
@include('Admin.sidebar')
	
@push('scripts')
<script src="{{asset('dist/jquery/jquery.min.js')}}"></script>
<script>

  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src=" {{asset('dist/js/adminlte.js')}}"></script>
@endpush
@include('Admin.footer')
	
