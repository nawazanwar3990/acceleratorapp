@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                <div class="card-body">
                    <table class="table custom-datatable table-bordered table-hover">
                        @include('dashboard.components.general.table-headings',['headings'=>\App\Enum\TableHeadings\ReceiptTableHeading::getTranslationKeys()])
                        <tbody>
                        @forelse($records  as $record)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>
                                    @isset($record->subscribed)
                                        <a target="_blank"> {{ $record->subscribed->getFullName()  }}</a>
                                    @endisset
                                </td>
                                <td>
                                    @if($record->payment_type)
                                        {{ \App\Enum\PaymentTypeEnum::getTranslationKeyBy($record->payment_type) }}
                                    @else
                                        --
                                    @endif
                                </td>
                                <td>
                                    @if($record->payment_for)
                                        {{ \App\Enum\PaymentForEnum::getTranslationKeyBy($record->payment_for) }}
                                    @else
                                        --
                                    @endif
                                </td>
                                <td>
                                    {{ $record->transaction_id }}
                                </td>
                                <td>
                                    {{ $record->price }}  {{ \App\Services\GeneralService::get_default_currency() }}
                                </td>
                                <td class="text-center">
                                    <a class="btn btn-xs btn-warning mx-1" target="_blank" download
                                       href="{{asset($record->file_name)}}">
                                        {{ trans('general.download_receipt') }}
                                    </a>
                                </td>
                            </tr>
                        @empty
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('innerScript')
    <script>
    </script>
@endsection
