<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

    <section>
        <h1>Section 1 : Il y a {{ count($membres) }} membres</h1>
        @foreach ($membres as $membre)
            @if ($membre->genre == 'Homme')
                <div class="card card--blue">
                @else
                    <div class="card card--pink">
            @endif
            <p><strong>Nom : </strong>{{ $membre->nom }}</p>
            <p><strong>Age : </strong>{{ $membre->age }}</p>
            <p><strong>Genre : </strong>{{ $membre->genre }}</p>
            </div>
        @endforeach
    </section>

    <section>
        <h1>Section 2 : que les hommes</h1>
        @foreach ($membres as $membre)
            @if ($membre->genre == 'Homme')
                <div class="card">
                    <p><strong>Nom : </strong>{{ $membre->nom }}</p>
                    <p><strong>Age : </strong>{{ $membre->age }}</p>
                    <p><strong>Genre : </strong>{{ $membre->genre }}</p>
                </div>
            @endif
        @endforeach
    </section>
    <section>
        <h1>Section 3 : que les femmes</h1>
        @foreach ($membres as $membre)
            @if ($membre->genre == 'Femme')
                <div class="card">
                    <p><strong>Nom : </strong>{{ $membre->nom }}</p>
                    <p><strong>Age : </strong>{{ $membre->age }}</p>
                    <p><strong>Genre : </strong>{{ $membre->genre }}</p>
                </div>
            @endif
        @endforeach
    </section>
    <section>
        <h1>Section 4 : que les hommes entre 18 et 24 inclus</h1>
        @foreach ($membres as $membre)
            @if ($membre->genre == 'Homme')
                @if ($membre->age > 18 && $membre->age <= 24)
                    <div class="card">
                        <p><strong>Nom : </strong>{{ $membre->nom }}</p>
                        <p><strong>Age : </strong>{{ $membre->age }}</p>
                        <p><strong>Genre : </strong>{{ $membre->genre }}</p>
                    </div>
                @endif
            @endif
        @endforeach
    </section>
    <section>
        @foreach ($membres as $membre)
            @if ($membre->genre == 'Femme')
                @if ($membre->age > 18 && $membre->age <= 24)
                    <div class="card">
                        <p><strong>Nom : </strong>{{ $membre->nom }}</p>
                        <p><strong>Age : </strong>{{ $membre->age }}</p>
                        <p><strong>Genre : </strong>{{ $membre->genre }}</p>
                    </div>
                @endif
            @endif
        @endforeach
    </section>
    <section>
        <h1>Tous les membres qui ne sont pas agés entre 18 et 24 ans inclus</h1>
        @foreach ($membres as $membre)
            @if ($membre->age < 18 || $membre->age > 24)
                <div class="card">
                    <p><strong>Nom : </strong>{{ $membre->nom }}</p>
                    <p><strong>Age : </strong>{{ $membre->age }}</p>
                    <p><strong>Genre : </strong>{{ $membre->genre }}</p>
                </div>
            @endif
        @endforeach
    </section>

    <link rel="stylesheet" href="{{ asset('js/app.js') }}">
</body>

</html>
