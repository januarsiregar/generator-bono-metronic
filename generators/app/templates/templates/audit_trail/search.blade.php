@extends('shared/search')

<?php
use ROH\Util\Inflector;
use App\Library\Pagination;

?>

<?php
$schema = array();
foreach (f('controller')->schema() as $key => $field) {
    if ($field['list-column']) {
        $schema[$key] = $field;
    }
}
?>

@section('table.search')
<div class="table-fix">
    <div class="table-scrollable search-table">
        <table class="table table-striped table-hover table-checkable order-column dataTable no-footer" >
            @section('table.head')
            <thead>
                <tr>
                    @if (count($schema))
                            <th>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                    <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                    <span></span>
                                </label>
                            </th>
                            @foreach ($schema as $key => $field)
                            <th>
                                <a href="{{{ f('controller.url', '?!sort['.$key.']='.(@$_GET['!sort'][$key] == 1 ? -1 : 1)) }}}">{{ $field['label'] }} </a>
                            </th>
                            @endforeach
                    @else
                        <th>Data</th>
                    @endif
                </tr>
            </thead>
            @show
            <tbody>
                @section('table.body')
                    @foreach ($entries as $entry)
                        <?php $i = 0 ?>
                        <tr>
                            @if (count($schema))
                                    <td>
                                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                            <input type="checkbox" class="checkboxes search-checkbox" value="{{$entry['$id']}}" />
                                            <span></span>
                                        </label>
                                    </td>
                                @foreach ($schema as $name => $field)
                                    <td>
                                        @if($i++ === 0)
                                            <a href="{{ f('controller.url', '/'.$entry['$id']) }}">{{ substr($field->format('plain', $entry[$name], $entry), 0, 48) }}</a>
                                        @else
                                            <?php try { $string = strip_tags($entry->format($name)); echo substr($string, 0, 48); } catch(\Exception $e) { echo 'xxx';  } ?>
                                        @endif
                                    </td>
                                @endforeach
                                    
                            @else
                                <td><a href="{{ f('controller.url', '/'.$entry['$id']) }}">{{ $entry->format() }}</a></td>
                            @endif
                        </tr>
                    @endforeach
                @show


            </tbody>
        </table>
    </div>
</div>

@stop 