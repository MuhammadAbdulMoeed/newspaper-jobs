<!DOCTYPE html>
@langrtl
    <html lang="{{ app()->getLocale() }}" dir="rtl">
@else
    <html lang="{{ app()->getLocale() }}">
@endlangrtl
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', app_name())</title>
    <meta name="description" content="@yield('meta_description', 'Laravel 5 Boilerplate')">
    <meta name="author" content="@yield('meta_author', 'Anthony Rappa')">
    @yield('meta')

    {{-- See https://laravel.com/docs/5.5/blade#stacks for usage --}}
    @stack('before-styles')

    <!-- Check if the language is set to RTL, so apply the RTL layouts -->
    <!-- Otherwise apply the normal LTR layouts -->
    {{ style(mix('css/backend.css')) }}

    @stack('after-styles')
</head>

<body class="{{ config('backend.body_classes') }}">
    @include('backend.includes.header')

    <div class="app-body">
        @include('backend.includes.sidebar')

        <main class="main">
            @include('includes.partials.logged-in-as')
            @yield('breidcrumb')
            <div class="container-fluid">
                <div class="animated fadeIn">
                    <div class="content-header">
                        @yield('page-header')
                    </div><!--content-header-->

                    @include('includes.partials.messages')
                    @yield('content')
                </div><!--animated-->
            </div><!--container-fluid-->
        </main><!--main-->

        @include('backend.includes.aside')
    </div><!--app-body-->

    @include('backend.includes.footer')

    <!-- Scripts -->
    @stack('before-scripts')
    {!! script(mix('js/manifest.js')) !!}
    {!! script(mix('js/vendor.js')) !!}
    {!! script(mix('js/backend.js')) !!}
    @stack('after-scripts')
    <script src="{{url('js/includes/jquery.validate.js')}}"></script>
    <link rel="stylesheet" href="{{url('js/lib/codemirror.css')}}">
    <script src="{{url('js/lib/codemirror.js')}}"></script>

    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script>

$(document).ready(function(){
    $('.toggle-one').change(function(){
        var id = $(this).attr('data-value');
        if($(this).prop("checked")==true){
            var status = 'Active';
        }else{
            var status = 'Inactive';
        }
        $.ajax({
                    url:"{{url('admin/changeStatus')}}",
                    type: 'get',
                    dataType: 'json',
                    data:     {id:id,status:status},
                    success: function(data) {
                        console.log(data);
                    }
                });
    });
});


  var editor = CodeMirror.fromTextArea($('textarea'), {
    lineNumbers: true
  });
</script>
    <script type="text/javascript">
        $.validator.addMethod("valueNotEquals", function(value, element, arg){
  return arg != value;
 }, "Value must not equal arg.");
        $.validator.addMethod('filesize', function(value, element, param) {
    // param = size (in bytes) 
    // element = element to validate (<input>)
    // value = value of the element (file name)
    return this.optional(element) || (element.files[0].size <= param) 
});

        $("#addForm").validate({
   rules: {
   
   adds_title: {
     required: true,
     minlength: 6
   },
   newspaper_id: { valueNotEquals: "0" },
   qualification_id: { valueNotEquals: "0" },
   city_id: { valueNotEquals: "0" },
   category_id: { valueNotEquals: "0" },
   job_type_id: { valueNotEquals: "0" },
   newspaper_piece: { required: true, extension: "png|jpe?g|gif", filesize: 1048576  },
   rel_logo: { required: true, extension: "png|jpe?g|gif", filesize: 1048576  }
   },
   messages: {
   adds_title: {
     required: "Please provide title"
   },
   newspaper_id: { valueNotEquals: "Please select NewsPaper" },
   qualification_id: { valueNotEquals: "Please select Qualification" },
   city_id: { valueNotEquals: "Please select City" },
   category_id: { valueNotEquals: "Please select Category" },
   job_type_id: { valueNotEquals: "Please select Job Type" },
   job_type_id: { valueNotEquals: "Please select Job Type" },
   newspaper_piece: "Please Select File & File must be JPG, GIF or PNG, less than 1MB",
   rel_logo: "Please Select File & File must be JPG, GIF or PNG, less than 1MB"
}
   });
    </script>
</body>
</html>
