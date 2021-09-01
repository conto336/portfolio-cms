
<div class="container">
    <div class="row">
        <div class="col section-5 section-description wow fadeIn">
            <h2>WIKIPEDIA</h2>
            <div class="divider-1 wow fadeInUp"><span></span></div>
            <h3 class="heading mt-5 text-center">En que puedo ayudarte?</h3>
        </div>
    </div>
    <div class="row">
        <div class="container mt-4">
            <div class="row d-flex justify-content-center">
                <div class="col-md-9">
                    <div class="card p-4 mt-3">

                        <form action="{{ route('wiki') }}" method="GET">
                            <div class="d-flex justify-content-center px-5">
                                <div class="search"> <input type="text" class="search-input" id="wiki"
                                        placeholder="Search..." name="search"> <button type="submit"
                                        id="sendWiki" class="search-icon"> <i class="fa fa-search"></i>
                                    </button> </div>
                            </div>
                            <div class="row mt-4 g-1 px-4 mb-5">
                                <div class="col-md-2 offset-md-5">
                                    <div class="card-inner p-3 d-flex flex-column align-items-center"> <i
                                            class="fab fa-wikipedia-w"></i>
                                        <div class="text-center mg-text"> <span class="mg-text">WIKIPEDIA</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col section-bottom-button wow fadeInUp">
            <a class="btn btn-primary btn-customized" href="#" role="button">
                <i class="fas fa-arrow-up"></i>
            </a>
        </div>
    </div>

</div>
@section('js')
<script>
    var clave;
    var query = '';

    document.getElementById('wiki').addEventListener('change', () => {
        query = document.getElementById('wiki').value;
    })
    document.getElementById('sendWiki').addEventListener('click', (e) => {
        e.preventDefault();
        let url =
            `https://es.wikipedia.org/w/api.php?action=query&list=search&srprop=snippet&format=json&origin=*&utf8=&srsearch=${query }`;
        fetch(url, {
                method: 'GET',
            }).then(res => res.json())
            .then(res => {
                const obj = res.query.search; //res.query.search[0].pageid
                const key = Object.keys(obj);
                console.log(obj)
                for (let i = 0; i < key.length; i++) {
                    clave = key[i];
                    //console.log(obj[clave]);
                    const list = document.createElement('LI');
                    list.innerHTML = obj[clave].pageid + obj[clave].title
                    document.getElementById('section-5').appendChild(list)
                    /*
                    https://es.wikipedia.org/api/rest_v1/page/html/(nombre_separado_por_guiones_bajo)-> traer html
                    */
                }
                
            })
    })

</script>
@endsection
@section('css')
<style>
    .card {
        border: none;
        background: url('/images/Logo-utilidades/wiki.jpg') no-repeat center center;
        background-size: cover;
    }

    .search {
        width: 100%;
        margin-bottom: auto;
        margin-top: 20px;
        height: 50px;
        background-color: #fff;
        padding: 10px;
        border-radius: 5px
    }

    .search-input {
        color: white;
        border: 0;
        outline: 0;
        background: none;
        width: 0;
        margin-top: 5px;
        caret-color: transparent;
        line-height: 20px;
        transition: width 0.4s linear
    }

    .search .search-input {
        padding: 0 10px;
        width: 100%;
        caret-color: #536bf6;
        font-size: 19px;
        font-weight: 300;
        color: black;
        transition: width 0.4s linear
    }

    .search-icon {
        height: 34px;
        width: 34px;
        float: right;
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
        background-color: #536bf6;
        font-size: 10px;
        bottom: 30px;
        position: relative;
        border-radius: 5px
    }

    .search-icon:hover {
        color: #fff !important
    }

    a:link {
        text-decoration: none
    }

    .card-inner {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0, 0, 0, .125);
        border-radius: .25rem;
        border: none;
        cursor: pointer;
        transition: all 2s
    }

    .card-inner:hover {
        transform: scale(1.1)
    }

    .mg-text span {
        font-size: 12px
    }

    .mg-text {
        line-height: 14px
    }

</style>
@endsection