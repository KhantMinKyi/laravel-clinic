<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        b {
            font-size: 26px;
        }

        @media only screen and (max-width: 800px) {
            b {
                font-size: 20px;
            }
        }

        @media only screen and (max-width: 500px) {
            b {
                font-size: 16px;
            }

            .sub-heading {
                font-size: 14px;

            }
        }

        body {
            font-family: 'Nunito';
        }

        .data {
            padding-left: 30px;
        }

        .user-info {
            font-size: 20px;
            text-align: left;
        }

        @media only screen and (max-width: 500px) {
            .user-info {
                font-size: 16px;

            }
        }

        .logo {
            height: 80%;
        }

        @media only screen and (max-width: 800px) {
            .logo {
                height: 80%;
            }
        }
    </style>
</head>

<body>
    @section('content')
        <div class="container">
            <div class="row mt-5 text-center">
                @extends('layouts.app')
                <div class="container">
                    <div class="card mb-2">
                        <div class="row">
                            <img src="{{ URL::to('/') }}/logo.png" alt=""
                                class="logo col-lg-2 col-md-3 col-sm-4 col-3 m-4">
                            <h5 class="sub-heading col-md-8 col-sm-6 col-8 mt-4"><b>Health Care & Clinic</b>
                                <br>No.abc,Sample Road,abc-Wards,Sample Township, Yangon
                                <br>Phone:091324567,091324567,091324567,<br>
                            </h5>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title"><b>COVID-19 Proof Certificate</b></h3>
                            <div class="a col-md-2 col-sm-3 col-3">
                            </div>
                            <div class="card-subtitle mb-2 text-muted small">
                                {{ $article->created_at->diffForHumans() }}
                            </div>

                            <table class="table table-striped">
                                <tr class="user-info">
                                    <td>Name</td>
                                    <td>:</td>
                                    <td class="data">{{ $article->name }}</td>
                                </tr>
                                <tr class="user-info">
                                    <td>D.O.B</td>
                                    <td>:</td>
                                    <td class="data">{{ $article->date_of_birth }}</td>
                                </tr>
                                <tr class="user-info">
                                    <td>Age</td>
                                    <td>:</td>
                                    <td class="data">{{ $article->Age }}</td>
                                </tr>
                                <tr class="user-info">

                                    <td>Gender</td>
                                    <td>:</td>
                                    @if ($article->Gender == 1)
                                        <td class="data">Male</td>
                                    @else
                                        <td class="data">Female</td>
                                    @endif
                                </tr>
                                <tr class="user-info">
                                    <td>Father Name</td>
                                    <td>:</td>
                                    <td class="data">{{ $article->father_name }}</td>
                                </tr>
                                <tr class="user-info">
                                    <td>nationality</td>
                                    <td>:</td>
                                    <td>{{ $article->nationality }}</td>
                                </tr>
                                <tr class="user-info">
                                    <td>Phone No</td>
                                    <td>:</td>
                                    <td>{{ $article->phone }}</td>
                                </tr>
                                <tr class="user-info">
                                    <td>NRC No</td>
                                    <td>:</td>
                                    <td>{{ $article->nrc }}</td>
                                </tr>
                                <tr class="user-info">
                                    <td>Passport No</td>
                                    <td>:</td>
                                    <td>{{ $article->passport }}</td>
                                </tr>
                            </table>
                            <div class="table-responsive-sm">
                                <table class="table table-bordered">
                                    <tr>
                                        <thead>
                                            <th scope="col">Date Of Vaccination</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Product</th>
                                            <th scope="col">Lot No</th>
                                            <th scope="col">Remark</th>
                                            <th scope="col">Completed</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ date('d-m-Y', strtotime($article->first_vaccination_date)) }}</td>
                                            <td>1st Dose</td>
                                            <td>{{ $article->first_product_name }}</td>
                                            <td>{{ $article->first_product_no }}</td>
                                            <td>{{ $article->first_remark }}</td>
                                            @if ($article->first_completed == 1)
                                                <td><i>DONE</i></td>
                                            @else
                                                <td></td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if ($article->second_vaccination_date == null)
                                                <td></td>
                                            @else
                                                <td>{{ date('d-m-Y', strtotime($article->second_vaccination_date)) }}</td>
                                            @endif
                                            <td>2nd Dose</td>
                                            <td>{{ $article->second_product_name }}</td>
                                            <td>{{ $article->second_product_no }}</td>
                                            <td>{{ $article->second_remark }}</td>
                                            @if ($article->second_completed == 1)
                                                <td><i>DONE</i></td>
                                            @else
                                                <td></td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if ($article->booster_vaccination_date == null)
                                                <td></td>
                                            @else
                                                <td>{{ date('d-m-Y', strtotime($article->booster_vaccination_date)) }}
                                                </td>
                                            @endif
                                            <td>First Booster Dose</td>
                                            <td>{{ $article->booster_product_name }}</td>
                                            <td>{{ $article->booster_product_no }}</td>
                                            <td>{{ $article->booster_remark }}</td>
                                            @if ($article->booster_completed == 1)
                                                <td><i>DONE</i></td>
                                            @else
                                                <td></td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if ($article->second_booster_vaccination_date == null)
                                                <td></td>
                                            @else
                                                <td>{{ date('d-m-Y', strtotime($article->second_booster_vaccination_date)) }}
                                                </td>
                                            @endif
                                            <td>Second Booster Dose</td>
                                            <td>{{ $article->second_booster_product_name }}</td>
                                            <td>{{ $article->second_booster_product_no }}</td>
                                            <td>{{ $article->second_booster_remark }}</td>
                                            @if ($article->second_booster_completed == 1)
                                                <td><i>DONE</i></td>
                                            @else
                                                <td></td>
                                            @endif
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <a class="btn btn-danger" href="{{ url("/articles/delete/$article->id") }}">
                                Delete
                            </a>
                            <a class="btn btn-outline-dark" href="{{ url("/articles/edit/$article->id") }}">
                                Edit
                            </a>
                            <a class="btn btn-outline-primary" href="{{ url("/generate-pdf/$article->id") }}">
                                View PDF &raquo;
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>

</html>
