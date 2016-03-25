@extends('layouts/default')

{{-- Page title --}}
@section('title')
@parent
{{ trans('sanatorium/codemirror::common.title') }}
@stop

{{-- Queue assets --}}
{{ Asset::queue('codemirror', 'sanatorium/codemirror::codemirror/codemirror.css') }}
{{ Asset::queue('codemirror', 'sanatorium/codemirror::codemirror/codemirror.js', 'jquery') }}

{{-- Inline scripts --}}
@section('scripts')
@parent
<script type="text/javascript">
	var editor = CodeMirror.fromTextArea(document.getElementById("demotext"), {
		lineNumbers: true,
		mode: "text/html",
		matchBrackets: true
	});
</script>
@stop

{{-- Inline styles --}}
@section('styles')
@parent
@stop

{{-- Page content --}}
@section('page')

{{-- Grid --}}
<section class="panel panel-default panel-grid">

	<header class="panel-heading">

		{{ trans('sanatorium/codemirror::common.title') }}

	</header>

	<div class="panel-body">

		<textarea id="demotext"><!-- Create a simple CodeMirror instance -->
<script>
  var editor = CodeMirror.fromTextArea(myTextarea, {
    lineNumbers: true
  });
</script></textarea>

	</div>

	<footer class="panel-footer clearfix">



	</footer>

</section>


@stop

