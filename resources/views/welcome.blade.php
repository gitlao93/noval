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

                <x-add_opcr_form />
            </div>

            <div>
                <x-add_objective_form :opcrs=$opcrs />
            </div>


            <div>
                <x-add_measure_form :objectives=$objectives :divisions=$divisions />
            </div>

            <div>
                <x-add_driver_form :opcrs=$opcrs :divisions=$divisions />
            </div>

            <div>

                <x-group_driver_form :measures=$measures :drivers=$driversact />
            </div>


        </div>



        <div class="col align-self-stretch px-5 py-3 mx-auto">

            {{-- <x-opcr_table :provinces=$provinces :objectivesact=$objectivesact :measures=$measures :annual_targets=$annual_targets/>

            <x-opcr_table_provincial :provinces=$provinces :objectivesact=$objectivesact :measures=$measures :annual_targets=$annual_targets/> --}}

            <x-opcr_table_driver :provinces=$provinces :driversact=$driversact :measures=$measures
                :annual_targets=$annual_targets :monthly_targets=$monthly_targets />

        </div>

    </div>

    <script>
        function printTable() {
            var printButton = document.getElementById("print-button");
            
            printButton.addEventListener("click", function() {
                
                var table = document.getElementById("bukidnun-bdd-table").outerHTML;
                // console.log(table)
                var win = window.open('', '_blank');
                win.document.write('<html><head><title>Print Table</title>');
                win.document.write(
                    '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css" />'
                    );
                win.document.write('</head><body>');
                win.document.write(table);
                win.document.write('</body></html>');
                win.document.close();
                win.print();
            });
        }
    </script>

</body>

</html>
