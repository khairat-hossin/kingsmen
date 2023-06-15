@extends ('backend.layouts.app')

@section('title') List Teams @endsection

@section('breadcrumbs')
<x-backend-breadcrumbs>
    <x-backend-breadcrumb-item type="active" icon='fa-solid fa-people-group'>Teams</x-backend-breadcrumb-item>
</x-backend-breadcrumbs>
@endsection

@section('content')
<div class="card">
    <div class="card-body">

        <x-backend.section-header>
            <i class="fa-solid fa-people-group"></i> Teams <small class="text-muted">List</small>

            <x-slot name="subtitle">
                @lang(":module_name Management Dashboard", ['module_name'=>Str::title("Teams")])
            </x-slot>
            <x-slot name="toolbar">
                @can('add_teams')
                    <x-buttons.create route='{{ route("backend.teams.create") }}' title="{{__('Create')}} {{ ucwords(Str::singular('teams')) }}" />
                @endcan

                @can('restore_teams')
                    <div class="btn-group">
                        <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-coreui-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-cog"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href='#'>
                                    {{-- <i class="fas fa-eye-slash"></i> View trash --}}
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
                            <th>#</th>
                            <th>{{ __('labels.text.name') }}</th>
                            <th>{{ __('labels.text.designation') }}</th>
                            <th>{{ __('labels.text.assigned_email') }}</th>
                            <th>{{ __('labels.text.assigned_cell_number') }}</th>
                            <th class="text-end">{{ __('labels.backend.action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($teams as $member)
                        <tr>
                            <td>{{ $member->id }}</td>
                            <td class="w-15">{{ $member->first_name .' '.$member->last_name }}</td>
                            <td class="w-30">{{ $member->designation }}</td>
                            <td class="w-20">{{ $member->assigned_email }}</td>
                            <td class="w-15">{{ $member->assigned_cell_number }}</td>

                            <td class="text-end w-15">
                                <form action="{{route('backend.teams.destroy', $member->id)}}" method="POST">
                                    @can('view_teams')
                                        <a href="{{route('backend.teams.show', $member->id)}}" class="btn btn-success btn-sm mt-1" data-toggle="tooltip" title="{{__('labels.backend.show')}}"><i class="fas fa-desktop"></i></a>
                                    @endcan
                                    @can('edit_teams')
                                        <a href="{{route('backend.teams.edit', $member->id)}}" class="btn btn-primary btn-sm mt-1" data-toggle="tooltip" title="{{__('labels.backend.edit')}}"><i class="fas fa-edit"></i></a>
                                    @endcan

                                    @can('delete_teams')
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm mt-1" data-toggle="tooltip" title="{{__('labels.backend.delete')}}"><i class="fas fa-trash-alt"></i></button>
                                    @endcan
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

<style>
    .w-15 {
        width: 150px;
    }
    .w-20 {
        width: 200px;
    }
    .w-30 {
        width: 300px;
    }
</style>
