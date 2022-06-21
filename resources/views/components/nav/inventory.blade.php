<ul aria-expanded="false" class="collapse">
    @foreach(\App\Enum\Nav\InventoryNavEnum::getTranslationKeys() as $key=>$value)
   @can('hasModuleAccess',$key)
        <li>
            <a href="{{ \App\Enum\Nav\InventoryNavEnum::getRoute($key) }}">
                {!! $value !!}
            </a>
        </li>
        @endcan
    @endforeach
</ul>
