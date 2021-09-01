@section('css')
    <style>
        .widget-26 {
            color: #3c4142;
            font-weight: 400;
        }

        .widget-26 tr:first-child td {
            border: 0;
        }

        .widget-26 .widget-26-job-emp-img img {
            width: 35px;
            height: 35px;
            border-radius: 50%;
        }

        .widget-26 .widget-26-job-title {
            min-width: 200px;
        }

        .widget-26 .widget-26-job-title a {
            font-weight: 400;
            font-size: 0.875rem;
            color: #3c4142;
            line-height: 1.5;
        }

        .widget-26 .widget-26-job-title a:hover {
            color: #68CBD7;
            text-decoration: none;
        }

        .widget-26 .widget-26-job-title .employer-name {
            margin: 0;
            line-height: 1.5;
            font-weight: 400;
            color: #3c4142;
            font-size: 0.8125rem;
            color: #3c4142;
        }

        .widget-26 .widget-26-job-title .employer-name:hover {
            color: #68CBD7;
            text-decoration: none;
        }

        .widget-26 .widget-26-job-title .time {
            font-size: 12px;
            font-weight: 400;
        }

        .widget-26 .widget-26-job-info {
            min-width: 100px;
            font-weight: 400;
        }

        .widget-26 .widget-26-job-info p {
            line-height: 1.5;
            color: #3c4142;
            font-size: 0.8125rem;
        }

        .widget-26 .widget-26-job-info .location {
            color: #3c4142;
        }

        .widget-26 .widget-26-job-salary {
            min-width: 70px;
            font-weight: 400;
            color: #3c4142;
            font-size: 0.8125rem;
        }

        .widget-26 .widget-26-job-category {
            padding: .5rem;
            display: inline-flex;
            white-space: nowrap;
            border-radius: 15px;
        }

        .widget-26 .widget-26-job-category .indicator {
            width: 13px;
            height: 13px;
            margin-right: .5rem;
            float: left;
            border-radius: 50%;
        }

        .widget-26 .widget-26-job-category span {
            font-size: 0.8125rem;
            color: #3c4142;
            font-weight: 600;
        }

        .widget-26 .widget-26-job-starred svg {
            width: 20px;
            height: 20px;
            color: #fd8b2c;
        }

        .widget-26 .widget-26-job-starred svg.starred {
            fill: #fd8b2c;
        }

        .bg-soft-base {
            background-color: #e1f5f7;
        }

        .bg-soft-warning {
            background-color: #fff4e1;
        }

        .bg-soft-success {
            background-color: #d1f6f2;
        }

        .bg-soft-danger {
            background-color: #fedce0;
        }

        .bg-soft-info {
            background-color: #d7efff;
        }


        .search-form {
            width: 80%;
            margin: 0 auto;
            margin-top: 1rem;
        }

        .search-form input {
            height: 100%;
            background: transparent;
            border: 0;
            display: block;
            width: 100%;
            padding: 1rem;
            height: 100%;
            font-size: 1rem;
        }

        .search-form select {
            background: transparent;
            border: 0;
            padding: 1rem;
            height: 100%;
            font-size: 1rem;
        }

        .search-form select:focus {
            border: 0;
        }

        .search-form button {
            height: 100%;
            width: 100%;
            font-size: 1rem;
        }

        .search-form button svg {
            width: 24px;
            height: 24px;
        }

        .search-body {
            margin-bottom: 1.5rem;
        }

        .search-body .search-filters .filter-list {
            margin-bottom: 1.3rem;
        }

        .search-body .search-filters .filter-list .title {
            color: #3c4142;
            margin-bottom: 1rem;
        }

        .search-body .search-filters .filter-list .filter-text {
            color: #727686;
        }

        .search-body .search-result .result-header {
            margin-bottom: 2rem;
        }

        .search-body .search-result .result-header .records {
            color: #3c4142;
        }

        .search-body .search-result .result-header .result-actions {
            text-align: right;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .search-body .search-result .result-header .result-actions .result-sorting {
            display: flex;
            align-items: center;
        }

        .search-body .search-result .result-header .result-actions .result-sorting span {
            flex-shrink: 0;
            font-size: 0.8125rem;
        }

        .search-body .search-result .result-header .result-actions .result-sorting select {
            color: #68CBD7;
        }

        .search-body .search-result .result-header .result-actions .result-sorting select option {
            color: #3c4142;
        }

        .card-inner {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #ccc;
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


        @media (min-width: 768px) and (max-width: 991.98px) {
            .search-body .search-filters {
                display: flex;
            }

            .search-body .search-filters .filter-list {
                margin-right: 1rem;
            }
        }

        .card-margin {
            margin-bottom: 1.875rem;
        }

        @media (min-width: 992px) {
            .col-lg-2 {
                flex: 0 0 16.66667%;
                max-width: 16.66667%;
            }
        }

        .card-margin {
            margin-bottom: 1.875rem;
        }

        .card {
            border: 0;
            box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
            -webkit-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
            -moz-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
            -ms-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #ffffff;
            background-clip: border-box;
            border: 1px solid #e6e4e9;
            border-radius: 8px;
        }

    </style>
@endsection


<div class="container">

    <div class="row">
        <div class="col section-5 section-description wow fadeIn">
            <h2>WIKIPEDIA</h2>
            <div class="divider-1 wow fadeInUp"><span></span></div>
            <h3 class="heading mt-3 text-center">En que puedo ayudarte?</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 card-margin">
            <div class="card search-form">
                <div class="card-body p-0">
                    <form action="#" id="search-form">
                        <div class="row">
                            <div class="col-12">
                                <div class="row no-gutters">
                                    <div class="col-lg-11 col-md-6 col-sm-11 p-0">
                                        <input type="text" placeholder="Search..." class="form-control" id="searchWiki"
                                            name="search">
                                    </div>
                                    <div class="col-lg-1 col-md-3 col-sm-12 p-0">
                                        <button type="submit" class="btn btn-base" id="filter">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-search">
                                                <circle cx="11" cy="11" r="8"></circle>
                                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card card-margin">
                <div class="card-body">
                    <div class="row search-body">
                        <div class="col-lg-12">
                            <div class="search-result">
                                <div class="result-header">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="records" id="showResult"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="result-body">

                                    <div class="row mt-4 g-1 px-4 mb-5" id="logoWIKI">
                                        <div class="col-md-2 offset-md-5">
                                            <div class="card-inner p-3 d-flex flex-column align-items-center"> <i
                                                    class="fab fa-wikipedia-w"></i>
                                                <div class="text-center mg-text"> <span class="mg-text">WIKIPEDIA</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="table-responsive" id="wikiAPI">
                                        {{-- Body table Content --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('js')
<script{{--  src="{{ asset('js/library/wiki.js') }}" --}}>
var clave;
var query = '';
var cont = 0;

document.getElementById('searchWiki').addEventListener('change', () => {
    query = document.getElementById('searchWiki').value;
    cont++
    if (cont > 1) {
        document.getElementById('wikiAPI').innerHTML = '';
    }
    if (document.getElementById('searchWiki').value === '') {
        document.getElementById('logoWIKI').innerHTML = `
        <div class="col-md-2 offset-md-5">
            <div class="card-inner p-3 d-flex flex-column align-items-center"> <i
                    class="fab fa-wikipedia-w"></i>
                <div class="text-center mg-text"> <span
                        class="mg-text">WIKIPEDIA</span>
                </div>
            </div>
        </div>
        `;
        document.getElementById('showResult').innerHTML = `Mostrando: <b>0</b> resultados`
    }
})
document.getElementById('filter').addEventListener('click', (e) => {
    e.preventDefault();
    document.getElementById('logoWIKI').innerHTML = '';
    let url =
        `https://es.wikipedia.org/w/api.php?action=query&list=search&srprop=snippet&format=json&origin=*&utf8=&srsearch=${query }`;
    fetch(url, {
            method: 'GET',
        }).then(res => res.json())
        .then(res => {
            const obj = res.query.search;
            const key = Object.keys(obj);
            document.getElementById('showResult').innerHTML =
                `Mostrando: <b>${key.length}</b> resultados`
            for (let i = 0; i < key.length; i++) {
                clave = key[i];
                const bodyTable = document.getElementById('wikiAPI');
                const table = document.createElement('TABLE');
                const tbody = document.createElement('TBODY');

                let td = `
                        <tr>
                            <td>
                                <div class="widget-26-job-emp-img">
                                    <img src="/images/www.svg"
                                        alt="Wiki" />
                                </div>
                            </td>
                            <td>
                                <div class="widget-26-job-title text-justify">
                                    <a href="https://es.wikipedia.org/?curid=${obj[clave].pageid}" target="_blank">
                                    ${obj[clave].title}</a>
                                    <p class="m-0"><a href="#" class="employer-name">
                                        Result of =    
                                    </a> <span class="text-muted time">${query}</span>
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class="widget-26-job-info text-justify">
                                    <p class="type m-0">${obj[clave].snippet}</p>
                                </div>
                            </td>
                            <td>
                        </tr>
                        `;
                        const body = bodyTable.appendChild(table);
                        body.appendChild(tbody).innerHTML = td;
                        table.setAttribute('class', 'table widget-26')
                
            }

        });
});

</script>
@endsection
