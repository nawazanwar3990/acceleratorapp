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
                                    <a class="btn btn-warning mx-1" target="_blank"
                                       href="{{ asset($record->receipt->filename) }}">
                                        {{ trans('general.view') }}
                                    </a>
                                </td>
                                <td>
                                    @isset($record->subscribed)
                                        {{ $record->subscribed->getFullName()  }}
                                    @else
                                        --
                                    @endisset
                                </td>
                                <td>
                                    @isset($record->subscribed)
                                        {{ $record->subscribed->roles[0]->name  }}
                                    @else
                                        --
                                    @endisset
                                </td>
                                <td class="text-center">
                                    <a class="btn btn-warning mx-1"
                                       href="{{ route('dashboard.subscriptions.index',['type'=>\App\Enum\SubscriptionTypeEnum::PACKAGE,'id'=>$record->id]) }}">
                                        {{ trans('general.view_subscription') }}
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
