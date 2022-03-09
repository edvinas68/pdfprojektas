<!-- ----------------------------------NAVABAR---------------------------------------------- -->


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Darbo sąlygų keitimas') }}
        </h2>
    </x-slot>

    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <div>
        <x-jet-application-logo class="block h-12 w-auto" />
    </div>

    <div style="text-align:center" class="mt-8 text-2xl">
    Darbo sąlygų keitimo generavimas
    </div>

    <div style="text-align:center" class="mt-6 text-gray-500">
    Užpildykite šios formos klausimus ir PDF dokumentas bus sugeneruotas automatiškai.
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <form action="generateprasymas.php" method="POST">

        <br>
        

        </select> 

        <form>
            
        <div style="text-align:center" class="fallbackDatePicker">
        <span>
        <label>Darbo sutarties pakeitimo data: </label>
        <br>
        <label for="day">Diena:</label>
        <select class="rounded" id="day" name="day">
    
<?php
  for ($i=1; $i<=31; $i++)
  {
      ?>
          <option value="<?php echo $i;?>"><?php echo $i;?></option>
      <?php
  }
?>

            </select>
  </span>
  <span>
    <label  for="month">Mėnesis:</label>
    <select class="rounded" id="month" name="month">
      <option selected>Sausio</option>
      <option>Vasario</option>
      <option>Kovo</option>
      <option>Balandžio</option>
      <option>Gegužės</option>
      <option>Birželio</option>
      <option>Liepos</option>
      <option>Rugpjūčio</option>
      <option>Rugsėjo</option>
      <option>Spalio</option>
      <option>Lapkričio</option>
      <option>Gruodžio</option>
    </select>
  </span>
  <span>
    <label for="year">Metai:</label>
    <select class="rounded" id="year" name="year">
    <?php
  for ($i=2022; $i<=2099; $i++)
  {
      ?>
          <option value="<?php echo $i;?>"><?php echo $i;?></option>
      <?php
  }
?>
    </select>
  </span>
  <br><br>
</div>
        <div class="form-group row">

            <div class="col-lg-6">
                <br>
                Vardas
                <input type="text" name="fname" class="form-control" placeholder="Pvz: Vardenis" required>
            </div>

            <div class="col-lg-6">
                <br>
                Pavardė
                <input type="text" name="lname" class="form-control" placeholder="Pavardenis" required>
            </div>

        </div>
        

        <div class="form-group row">

        <div class="col-lg-6">
                <br>
                Įmonės pavadinimas
                <input type="text" name="pavadinimas" class="form-control" placeholder="Pvz: UAB 'Imone'" required>
            
            </div>

            <div class="col-lg-6">
                <br>
                Darbo sutarties nr.
                <input type="text" name="fname" class="form-control" placeholder="Pvz: 86" required>
            </div>

            <div class="col-lg-6">
                <br>
                Pareigos
                <input type="text" name="pareigos" class="form-control" placeholder="Pareigos" required>
            </div>

            <div class="col-lg-6">
                <br>
                Direktoriaus Vardas/Pavardė
                <input type="text" name="direktorius" class="form-control" placeholder="Pvz: Vardenis Paverdenis" required>
            </div>

            
            <div class="col-lg-6">
                <br>
                Direktoriaus Vardas/Pavardė kilmininko linksniu
                <input type="text" name="vardasKil" class="form-control" placeholder="Pvz: Vardenio Pavardenio" required>
            </div>



            <div class="col-lg-6">
            <br>
                Miestas
                <input type="text" name="miestas" class="form-control" placeholder="Pvz: Kaunas" required>
            </div>

        

            <div class="col-lg-6">
                <br>
                Sutarties įsigaliojimo data:
                <input type="date" id="today" name="isigaliojimodata" class="form-control" placeholder="Data" required>
            </div>
                
        </div>
            
        <br>
    <br>
        
        
        <button type="submit" class="btn btn-block btn-dark">Generuoti darbo sutarties keitimo dokumentus</button>

        <br><br>
    </form>
    
</div>


</body>
</html>



</div>

</x-app-layout>

