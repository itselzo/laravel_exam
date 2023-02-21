<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Type de formation</title>
<link rel="stylesheet" href={{ asset('css/bootstrap.css') }}>
<link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
<link rel="stylesheet" href={{ asset('css/style.css') }}>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body style="background-color: orange;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card p-4 mt-5">
                    <div class="card-header">
                        <h4>Formations en {{ $referenciel['libelleReferentiel'] }}</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @foreach ($referenciel->formations as $formation)
                            <div class="col-md-6 mb-3">
                                <div class="card p-3">
                                    <h5 class="card-title">{{ $formation['nomFormation'] }}</h5>
                                    <p class="card-text">{{ $formation['description'] }}</p>
                                    <p class="card-text">Durée: {{ $formation['duree'] }} ans</p>
                                    <a href="/formations/{{ $formation['id'] }}" class="btn btn-primary">S'inscrire à cette formation</a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="/js/sc.js"></script>
</html> 