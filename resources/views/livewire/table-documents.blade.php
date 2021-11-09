<div class="card">
    <h5 class="card-header">Documentos de Ingeniería Electrónica </h5>
    <div class="card-body">

        <div class="table-responsive-sm">
            <div class="text-left my-1">
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Busqueda" wire:model="search"
                        aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="button">Search</button>
                </form>
            </div>
            <table class="table table-striped dt-responsive nowrap">
                <thead class="text-center">
                    <tr>
                        <th>Nombre <i class="far fa-file-pdf head"></i></th>
                        <th>Modalidad <i class="fas fa-graduation-cap"></i></th>
                        <th>Fecha <i class="far fa-clock head"></i></th>
                        <th>Acciones <i class="fas fa-edit"></i> / <i class="fas fa-trash-alt"></th>
                    </tr>
                </thead>
                <tbody id="tableElectronica">
                    @foreach ($docsElectronica as $electronica)
                        <tr>
                            <td>
                                <p class="text-mute text-justify">
                                    <img class="head" src="{{ asset('images/files.svg') }}" alt="file"
                                        width="30" />
                                    &nbsp;
                                    {{ $electronica->document->name }}
                                </p>
                            </td>
                            <td class="text-center">
                                <p>{{ $electronica->category }}</p>
                            </td>
                            <td>
                                <p class="text-muted text-center">{{ $electronica->document->date }}</p>
                            </td>
                            <td>
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group mx-auto" role="group" aria-label="First group">
                                        <form
                                            action="{{ route('admin.file-edit', [$electronica->id, $electronica->document->name]) }}"
                                            method="GET">
                                            <button type="submit" class="btn btn-primary btn-sm"><i
                                                    class="fas fa-edit"></i></button>
                                        </form>
                                        <div class="mx-1"></div>
                                        <form action="{{ route('admin.deleteFile', $electronica->id) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i
                                                    class="fas fa-recycle"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- <table id="electronic" class="table table-striped dt-responsive nowrap" cellspacing="0" style="width:100%">

        </table> --}}
    </div>
</div>
