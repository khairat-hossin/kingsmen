@extends ('backend.layouts.app')

@section('title') List Contacts @endsection

@section('breadcrumbs')
<x-backend-breadcrumbs>
    <x-backend-breadcrumb-item type="active" icon='fa-solid fa-people-group'>Contacts</x-backend-breadcrumb-item>
</x-backend-breadcrumbs>
@endsection

@section('content')
<div class="card">
    <div class="card-body">

        <x-backend.section-header>
            <i class="fa-solid fa-people-group"></i> Contacts <small class="text-muted">List</small>

            <x-slot name="subtitle">
                @lang(":module_name Management Dashboard", ['module_name'=>Str::title("Contacts")])
            </x-slot>
            <x-slot name="toolbar">
                @can('add_contacts')
                <x-buttons.create route='{{ route("backend.contacts.create") }}' title="{{__('Create')}} {{ ucwords(Str::singular('contacts')) }}" />
                @endcan

                @can('restore_contacts')
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
                            <th>{{ __('labels.text.name') }}</th>
                            <th>{{ __('labels.text.email') }}</th>
                            <th>{{ __('labels.contacts.phone') }}</th>
                            <th>{{ __('labels.contacts.id_no') }}</th>
                            <th class="text-end">{{ __('labels.backend.action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($contacts as $member)
                        <tr>
                            <td>
                                {{ $member->first_name }} {{ $member->last_name }}
                            </td>
                            <td>{{ $member->email }}</td>
                            <td>
                                {{ $member->phone }}
                            </td>
                            <td>
                                {{ $member->id_no }}
                            </td>
    
                            <td class="text-end">
                                <a href="{{route('backend.contacts.show', $member->id)}}" class="btn btn-success btn-sm mt-1" data-toggle="tooltip" title="{{__('labels.backend.show')}}"><i class="fas fa-desktop"></i></a>
                                
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