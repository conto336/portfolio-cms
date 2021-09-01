<x-render-files-library>
    @section('title', 'Proyectos de graduación de Ingeniería Geológica')
    <x-slot name="title">
        Ingenería Geológia
    </x-slot>

        @if (App\Models\Geology::where('category', 'proyectos')->count() > 0)
            <div class="card">
                <h5 class="card-header">Documentos de Ingeniería Electrónica</h5>
                <div class="card-body">
                    <table id="documents" class="table table-striped table-bordered dt-responsive nowrap"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th>Nombre <i class="far fa-file-pdf head"></i></th>
                                <th>Autores <i class="fas fa-user head"></i></th>
                                <th>Fecha <i class="far fa-clock head"></i></th>
                                <th>Ver <i class="fas fa-eye head"></i>
                                    <-> Descargar <i class="fas fa-download head">
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($proyectos as $proyecto)
                                <tr>
                                    <td>
                                        <p class="text-mute">
                                            <img src="{{ asset('images/files.svg') }}" alt="file" width="30" />
                                            &nbsp;{{ $proyecto->document->name }}
                                        </p>
                                    </td>
                                    <td>
                                        <p class="text-muted">{{ $proyecto->authors }}</p>
                                    </td>
                                    <td>
                                        <p class="text-muted">{{ $proyecto->document->date }}</p>
                                    </td>
                                    <td>
                                        <p>
                                        <div class="btn-group" role="group">
                                            <a class="btn btn-customized" href="{{ $proyecto->url }}" target="_blank"
                                                data-toggle="popover-hover" data-placement="left" title="Ver"
                                                data-content="Has clic para ver el archivo en otra pestaña">
                                                <i class="fas fa-eye"></i></a>
                                            <a class="btn btn-customized-2" href="{{ $proyecto->url }}"
                                                download="{{ $proyecto->document->original_name }}"
                                                data-toggle="popover-hover" data-placement="right" title="Descargar"
                                                data-content="Has clic para descarga directa del archivo">
                                                <i class="fas fa-download"></i></a>

                                        </div>
                                        </p>
                                    </td>
                                </tr>
                            @endforeach
                    </table>
                </div>
            </div>
        @else
            <div class="container">
                <div class="my-3 mx-auto">
                    <div class="alert alert-primary" role="alert">
                        <p class="h5 text-success">Aun no hay archivos disponibles</p>
                    </div>
                </div>
            </div>
        @endif

</x-render-files-library>