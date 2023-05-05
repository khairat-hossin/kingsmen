@extends ('backend.layouts.app')

@section('title') List Private Investments @endsection

@section('breadcrumbs')
<x-backend-breadcrumbs>
    <x-backend-breadcrumb-item type="active" icon='fa-solid fa-hand-holding-usd'>Private Investments</x-backend-breadcrumb-item>
</x-backend-breadcrumbs>
@endsection

@section('content')
<div class="card">
    <div class="card-body">

        <x-backend.section-header>
            <i class="fa-solid fa-hand-holding-usd"></i> Private Investments <small class="text-muted">List</small>

            <x-slot name="subtitle">
                @lang(":module_name Management Dashboard", ['module_name'=>Str::title("Private Investments")])
            </x-slot>
            <x-slot name="toolbar">
                @can('add_investments')
                <x-buttons.create route='{{ route("backend.private-investments.create") }}' title="{{__('Create')}} {{ ucwords(Str::singular('investments')) }}" />
                @endcan

                @can('restore_investments')
                <div class="btn-group">
                    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-coreui-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-cog"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href='#'>
                                <i class="fas fa-eye-slash"></i> View trash
                            </a>
                        </li>
                        <!-- <li>
                            <hr class="dropdown-divider">
                        </li> -->
                    </ul>
                </div>
                @endcan
            </x-slot>
        </x-backend.section-header>

        <div class="row mt-4">
            <div class="col">
                <input type="text" class="form-control my-2" placeholder=" Search" wire:model="searchTerm" />

                <table class="table table-hover table-responsive-sm">
                    <thead>
                        <tr>
                            <th>{{ __('labels.text.project_name') }}</th>
                            <th>{{ __('labels.text.project_location') }}</th>
                            <th>{{ __('labels.text.registered_companyName') }}</th>
                            <th>{{ __('labels.text.company_tax_number') }}</th>
                            <th class="text-end">{{ __('labels.backend.action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($private_investments as $investment)
                        <tr>
                            <td>
                                {{ $investment->project_name }}
                            </td>
                            <td>{{ $investment->project_location }}</td>
                            <td>
                                {{ $investment->registered_company_name }}
                            </td>
                            <td>
                                {{ $investment->company_tax_number }}
                            </td>
                            <td class="text-end">
                                <form action="{{route('backend.private-investments.destroy', $investment->id)}}" method="POST">
                                    <a href="{{route('backend.private-investments.show', $investment->id)}}" class="btn btn-success btn-sm mt-1" data-toggle="tooltip" title="{{__('labels.backend.show')}}"><i class="fas fa-desktop"></i></a>
                                    <a href="{{route('backend.private-investments.edit', $investment->id)}}" class="btn btn-primary btn-sm mt-1" data-toggle="tooltip" title="{{__('labels.backend.edit')}}"><i class="fas fa-edit"></i></a>

                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm mt-1" data-toggle="tooltip" title="{{__('labels.backend.delete')}}"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" style="text-center">No Data found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-7">
                <div class="float-left">
                    {{-- {!! $teams->total() !!} {{ __('labels.backend.total') }} --}}
                </div>
            </div>
            <div class="col-5">
                <div class="float-end">
                    {{-- {!! $teams->links() !!} --}}
                </div>
            </div>
        </div>

    </div>
    <div class="card-footer">

    </div>
</div>

@endsection
