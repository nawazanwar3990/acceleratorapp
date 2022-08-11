<div class="btn-group">
    <button type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-bs-toggle="dropdown"
            aria-expanded="false" aria-haspopup="true">Action
    </button>
    <ul class="dropdown-menu">
        <li>

        </li>
        <li>
            <a class="dropdown-item text-black-50" href="{{ route('dashboard.customers.edit',$customer->id) }}">
                {{__('general.edit')}}
            </a>
        </li>
        <li>

        </li>
    </ul>
</div>
