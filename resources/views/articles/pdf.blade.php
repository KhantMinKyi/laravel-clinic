<!DOCTYPE html>
<html>

<head>
    <title>International COVID-19 Vaccination Certificate</title>
    <style>
        b {
            padding-left: 20px;
            padding-right: 10px;
        }

        table,
        th,
        td {
            border: 1px solid;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            text-align: center;
        }

        .line {
            border: 1px solid black;
        }

        .qrcode {
            margin-left: 80%;
        }

        .logo {
            float: left;
            width: 20%;
        }

        .heading {
            padding-top: 20px;
        }

        .logo_heading {
            padding-bottom: 30px;
        }

        .text {
            line-height: 2;
        }

        .website {
            margin-left: 70%;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card mb-2">
            <div class="card-body">
                <div class="card-subtitle mb-2 text-muted small">
                </div>
                <img class="qrcode" src="data:image/png;base64, {!! base64_encode(
                    QrCode::size(100)->generate(
                        'myatsaydanaclinic.com/articles/detail/' .
                            $article->id .
                            '/' .
                            $article->first_vaccination_date .
                            '/' .
                            $article->name .
                            '/' .
                            $article->first_product_no,
                    ),
                ) !!} ">
                <div class="logo_heading">
                    <img src="../public/logo.png" alt="" class="logo">
                    <h2 class="heading">International COVID-19 Vaccination Certificate</h2>
                </div>
                <div>
                    <p class="text">
                        <b>Name:</b>{{ $article->name }} <b>Date of Birth:</b>{{ $article->date_of_birth }}
                        <b>Gender:</b>
                        @if ($article->Gender == '1')
                            Male
                        @elseif($article->Gender == '2')
                            Female
                        @endif
                        <b>Age:</b>{{ $article->Age }}
                        <b>Father Name:</b>{{ $article->father_name }}
                        <b>Nationality:</b>{{ $article->nationality }}<b>NRC No:</b>{{ $article->nrc }}<b>Passport
                            No:</b>{{ $article->passport }}
                        <b>Phone</b>{{ $article->phone }} <b>Address</b>{{ $article->nrc }}
                    </p>
                </div>
                <table class="table table-bordered">
                    <thead>

                        <tr>
                            <th scope="col">VACCINE DOSE</th>
                            <th scope="col">PRODUCT NAME <br>/ MANUFACTURER <br>/LOT NO. OF VACCINE</th>
                            <th scope="col">VACCINATION APPOINTMENT <br>(DD/MM/YY)</th>
                            <th scope="col">DATE OF VACCINATION<br>(DD/MM/YY)</th>
                            <th scope="col">VACCINATOR /<br>VACCINATION SITE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">1st Dose</td>
                            <td>{{ $article->first_product_name }}/<br>{{ $article->first_product_no }}</td>
                            <td>{{ date('d-m-Y', strtotime($article->first_vaccination_appointment)) }}</td>
                            <td>{{ date('d-m-Y', strtotime($article->first_vaccination_date)) }}</td>
                            <td>{{ $article->first_vaccinator }}<br>
                                <p class="line"></p>{{ $article->first_vaccination_stte }}
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">2nd Dose</td>
                            <td>{{ $article->second_product_name }}/<br>{{ $article->second_product_no }}</td>
                            <td>{{ date('d-m-Y', strtotime($article->second_vaccination_appointment)) }}</td>
                            <td>{{ date('d-m-Y', strtotime($article->second_vaccination_date)) }}</td>
                            <td>{{ $article->second_vaccinator }}<br>
                                <p class="line"></p>{{ $article->second_vaccination_stte }}
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">First Booster Dose</td>
                            <td>{{ $article->booster_product_name }}/<br>{{ $article->booster_product_no }}</td>
                            @if ($article->booster_vaccination_appointment == null)
                                <td></td>
                            @else
                                <td>{{ date('d-m-Y', strtotime($article->booster_vaccination_appointment)) }}</td>
                            @endif
                            @if ($article->booster_vaccination_date == null)
                                <td></td>
                            @else
                                <td>{{ date('d-m-Y', strtotime($article->booster_vaccination_date)) }}</td>
                            @endif
                            <td>{{ $article->booster_vaccinator }}<br>
                                <p class="line"></p>{{ $article->booster_vaccination_stte }}
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">Second Booster Dose</td>
                            <td>{{ $article->second_booster_product_name }}/<br>{{ $article->second_booster_product_no }}
                            </td>
                            @if ($article->second_booster_vaccination_appointment == null)
                                <td></td>
                            @else
                                <td>{{ date('d-m-Y', strtotime($article->second_booster_vaccination_appointment)) }}
                                </td>
                            @endif
                            @if ($article->second_booster_vaccination_date == null)
                                <td></td>
                            @else
                                <td>{{ date('d-m-Y', strtotime($article->second_booster_vaccination_date)) }}</td>
                            @endif
                            <td>{{ $article->second_booster_vaccinator }}<br>
                                <p class="line"></p>{{ $article->second_booster_vaccination_stte }}
                            </td>
                        </tr>
                    </tbody>
                </table>
                <h4>Please vist the nearest Health Center/Hospital if there are any health issues after receving
                    COVID-19 vaccination</h4>
                <h4 class="website">www.sampledata.com</h4>
            </div>
        </div>
    </div>

</body>

</html>
