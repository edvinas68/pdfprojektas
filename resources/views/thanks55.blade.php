<!-- ----------------------------------NAVABAR---------------------------------------------- -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Atleidimas') }}
        </h2>
    </x-slot>

    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
        <div>
            <x-jet-application-logo class="block h-12 w-auto"/>
        </div>

        <div style="text-align:center" class="mt-8 text-2xl">
            Darbo sutarties nutraukimas ðaliø susitarimu 54 str.
        </div>

        <div style="text-align:center" class="mt-6 text-gray-500">
            Uþpildykite ðios formos klausimus ir PDF dokumentas bus sugeneruotas automatiðkai.
        </div>
    </div>


    <!-- ----------------------------------MAIN WINDOWN---------------------------------------------- -->


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <!-- ----------------------------------Buttonu langai/pasirinkimai---------------------------------------------- -->


                <!DOCTYPE html>
                <html lang="lt">
                <head>
                    <meta charset="UTF-8">


                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Dokumentu generatorius</title>
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
                          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
                          crossorigin="anonymous">
                    <link rel="stylesheet" href="style.css">
                </head>
                <body>

                <div class="container text-center">

                    <h1>Aciu jusu PDF jau sugeneruotas. <a
                            href="{{ session('atleidimai.55.download') }}"
                            download>Atsisiusti paspaudus cia</a></h1>

                    <div class="clearfix mb-5"></div>

                    <a href="{{ route('dashboard') }}" class="btn btn-success">Sugeneruoti kita PDF</a>
                </div>

                </body>
                </html>


            </div>

</x-app-layout>
