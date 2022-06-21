<thead>
<tr>
    <th class="text-center">#</th>
    @foreach($headings as $key=>$value)
        <th scope="col">{{ $value }}</th>
    @endforeach
    <th class="text-center">{{__('general.action')}}</th>
</tr>
</thead>
