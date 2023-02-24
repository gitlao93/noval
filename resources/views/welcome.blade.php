<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="stylesheet" href="{{ asset('/style.css') }}">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

</head>

<body>
    <div class="container-fluid d-flex flex-row flex-nowrap justify-content-center">

        <div class="align-self-stretch">

            <div>
                
                <x-add_opcr_form/>
            </div>

            <div>
                <x-add_objective_form :opcrs=$opcrs/>
            </div>


            <div>
                <x-add_measure_form :objectives=$objectives :divisions=$divisions/>
            </div>

            <div>
                <x-add_driver_form :opcrs=$opcrs/>
            </div>


        </div>



        <div class="col align-self-stretch px-5 py-3 mx-auto">

            <x-opcr_table :provinces=$provinces :objectivesact=$objectivesact :measures=$measures :annual_targets=$annual_targets/>

            <x-opcr_table_provincial :provinces=$provinces :objectivesact=$objectivesact :measures=$measures :annual_targets=$annual_targets :selected_province=$bukidnon/>

        </div>

    </div>
</body>

</html>
