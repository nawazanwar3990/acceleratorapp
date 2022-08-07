<ul class="list-group list-group-flush bg-transparent">
    @foreach($record->services as $service_key=>$service_value)
        <li class="list-group-item py-0 border-0  bg-transparent">
            <i class="bx bx-check text-success"></i>
            <span class="text-muted fs-13">{{ ($service_key)=='∞'?'Unlimited':$service_key }}</span> <span class="fw-bold">{{ str_replace('_',' ',$service_value) }}</span>
        </li>
        <li><hr class="dropdown-divider border"></li>
    @endforeach
</ul>
