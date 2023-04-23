<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles List</title>
    <style>
        .booking {
            text-align: center;
        }
    </style>
</head>

<body>
    @extends('layouts.app')

    @section('content')
        <div class="container">

            <div class="card mb-2">
                <div class="card-body">
                    <div class="px-3 py-2">
                        <form method="GET" action="/articles/search">
                            <input type="text" name="search" placeholder="Find something"
                                value="{{ request('search') }}"
                                class="btn btn-success bg-transparent placeholder-black font-semibold text-dark">
                        </form>
                    </div>
                    <div class="card-subtitle mb-2 text-muted small">
                    </div>
                    <div class="table-responsive-lg">
                        <h2 class="booking">Vaccination Form</h2>
                        <table class="table table-striped">
                            <thead>

                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>DOB</th>
                                    <th>Age</th>
                                    <th>nrc</th>
                                    <th>1st Date Of Vaccination</th>
                                    <th>2nd Date Of Vaccination</th>
                                    <th>Booster Date Of Vaccination</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($articles as $key => $article)
                                    <tr>
                                        <td scope="row">{{ $key + 1 }}</td>
                                        <td>{{ $article->name }}</td>
                                        <td>{{ $article->date_of_birth }}</td>
                                        <td>{{ $article->Age }}</td>
                                        <td>{{ $article->nrc }}</td>
                                        <td>{{ date('d-m-Y', strtotime($article->first_vaccination_date)) }}</td>
                                        <td>{{ date('d-m-Y', strtotime($article->second_vaccination_date)) }}</td>
                                        <td>{{ date('d-m-Y', strtotime($article->booster_vaccination_date)) }}</td>
                                        <td>
                                            <a href="{{ route('generate', [
                                                'id' => $article->id,
                                                'name' => $article->name,
                                            ]) }}"
                                                class="btn btn-outline-primary">View</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-outline-dark"
                                                href="{{ url("/articles/edit/$article->id") }}">
                                                Edit
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $articles->links() }}
                    </div>
                </div>
            </div>
            <div class="card mb-2">
                <div class="card-body">
                    <h2 class="booking">Booking</h2>
                    <table class="table table-striped">
                        <thead>

                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Appointment Date</th>
                                <th>Phone</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bookings as $key => $booking)
                                <tr>
                                    <td scope="row">{{ $key + 1 }}</td>
                                    <td>{{ $booking->name }}</td>
                                    <td>{{ $booking->age }}</td>
                                    <td>{{ date('d-m-Y', strtotime($booking->appointment)) }}</td>
                                    <td>{{ $booking->phone }}</td>
                                    <td><a class="btn btn-outline-primary" href="tel:$booking->phone">
                                            Make A Call
                                        </a>
                                    </td>
                                    <td><a class="btn btn-outline-danger"
                                            href="{{ url("/bookings/delete/$booking->id") }}">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    @endsection
</body>

</html>
