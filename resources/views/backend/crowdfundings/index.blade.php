@extends ('backend.layouts.app')

@section('title') List Crowdfundings @endsection

@section('breadcrumbs')
<x-backend-breadcrumbs>
    <x-backend-breadcrumb-item type="active" icon='fa-solid fa-people-group'>Crowdfundings</x-backend-breadcrumb-item>
</x-backend-breadcrumbs>
@endsection

@section('content')
<div class="card">
    <div class="card-body">

        <x-backend.section-header>
            <i class="fa-solid fa-people-group"></i> Crowdfundings <small class="text-muted">List</small>

            <x-slot name="subtitle">
                @lang(":module_name Management Dashboard", ['module_name'=>Str::title("Crowdfundings")])
            </x-slot>
            <x-slot name="toolbar">
                @can('add_crowdfundings')
                <x-buttons.create route='{{ route("backend.crowdfundings.create") }}' title="{{__('Create')}} {{ ucwords(Str::singular('crowdfundings')) }}" />
                @endcan

                @can('restore_crowdfundings')
                <div class="btn-group">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-coreui-toggle="dropdown" aria-expanded="false">
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
                            <th>{{ __('labels.text.project_type') }}</th>
                            <th>{{ __('labels.text.investment_duration') }}</th>
                            <th>{{ __('labels.text.investment_duration_in_years') }}</th>
                            <th>{{ __('labels.text.type_of_investment') }}</th>
                            <th>{{ __('labels.text.accepted_currency') }}</th>
                            <th>{{ __('labels.text.project_duration_in_years') }}</th>
                            <th>{{ __('labels.text.land_category') }}</th>
                            <th>{{ __('labels.text.landArea_per_sqm') }}</th>
                            <th>{{ __('labels.text.project_deliveryDate') }}</th>
                            <th>{{ __('labels.text.project_deliveryDate') }}</th>
                            <th>{{ __('labels.text.project_deliveryDate') }}</th>
                            <th>{{ __('labels.text.project_deliveryDate') }}</th>
                            <th>{{ __('labels.text.project_deliveryDate') }}</th>
                            <th>{{ __('labels.text.project_deliveryDate') }}</th>
                            <th class="text-end">{{ __('labels.backend.action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($crowdfundings as $funding)
                        <tr>
                            <td>
                                {{ $funding->project_name }}
                            </td>
                            <td>
                                {{ $funding->project_location }}</td>
                            <td>
                                {{ $funding->registered_company_name }}
                            </td>
                            <td>
                                {{ $funding->company_tax_number }}
                            </td>

                            <td class="text-end">
                                <a href="{{route('backend.crowdfundings.show', $funding->id)}}" class="btn btn-success btn-sm mt-1" data-toggle="tooltip" title="{{__('labels.backend.show')}}"><i class="fas fa-desktop"></i></a>
                                <a href="{{route('backend.crowdfundings.edit', $funding->id)}}" class="btn btn-success btn-sm mt-1" data-toggle="tooltip" title="{{__('labels.backend.edit')}}"><i class="fas fa-edit"></i></a>
                                <a href="{{route('backend.crowdfundings.destroy', $funding->id)}}" class="btn btn-success btn-sm mt-1" data-toggle="tooltip" title="{{__('labels.backend.edit')}}"><i class="fas  fa-trash-alt"></i></a>

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
