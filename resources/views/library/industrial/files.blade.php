<x-render-files-library>
    @section('title', 'Documentos de Ingeniería Industrial')

    <x-slot name="title">
        Ingenería Industrial
    </x-slot>
    @if (App\Models\Industrial::all()->count() > 0)
        <div class="container my-3">

            <div class="row">
                @foreach ($docs as $doc)
                    <div class="col-sm-6 mt-3">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">
                                    {{ $doc->name }}
                                </h6>
                                <div class="divider-1 wow fadeInUp"><span></span></div>
                                <p class="card-text">
                                    {!! $doc->industrial->description !!}
                                </p>

                            </div>
                            <div class="card-body">
                                <strong>Autores:</strong> {{ $doc->industrial->authors }}
                            </div>
                            <div class="card-body">
                                <p>{{ $doc->date }}. Ingenería {{ $doc->carrer }}</p>
                                <p> <strong>Modalidad:</strong> {{ ucfirst($doc->industrial->category) }}</p>
                                <a href="{{ route('showFile', [$doc->name, $doc->id]) }}"
                                    class="btn-primary btn-customized"> <i class="fas fa-eye"></i> Ver</a>
                            </div>
                        </div>
                    </div>
                @endforeach
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