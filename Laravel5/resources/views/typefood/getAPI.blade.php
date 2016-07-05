<!--{{ $typefood['field1'] }} -->
@foreach ($typefood as $tf_key => $tf_value ) 
{{ $tf_key.' : '.$tf_value }}
<br/>
@endforeach

