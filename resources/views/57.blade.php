<!-- ----------------------------------NAVABAR---------------------------------------------- -->


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Atleidimas') }}
        </h2>
    </x-slot>

    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <div>
        <x-jet-application-logo class="block h-12 w-auto" />
    </div>

    <div style="text-align:center" class="mt-8 text-2xl">
    Darbo sutarties nutraukimas darbuotojo iniciatyva be svarbių priežasčių 57 str.
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
    <form action="{{route('57.generate')}}" method="POST">

        <br>
        

        </select> 

        <form>
        <div style="text-align:center" class="fallbackDatePicker">
        <span>
        <label>Pasirinkite prašymo data: </label>
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
                Vardas
                <input type="text" name="fname" class="form-control" placeholder="Vardenis" required>
            </div>

            <div class="col-lg-6">
                Pavardė
                <input type="text" name="lname" class="form-control" placeholder="Pavardenis" required>
            </div>

        </div>

        <div class="form-group row">

            <div class="col-lg-6">
                Asmens kodas
                <input type="text" name="asmenskodas" class="form-control" placeholder="A.k." maxlength="11" required>
            </div>

            <div class="col-lg-6">
                Gyvenamasis adresas
                <input type="text" name="adresas" class="form-control" placeholder="Pvz: Kauno g. 4, Kauno raj." required>
            </div>

            
            <div class="col-lg-6">
                <br>
                Įmonės pavadinimas
                <input type="text" name="pavadinimas" class="form-control" placeholder="Pvz: UAB 'Imone'" required>
            
            </div>

            <div class="col-lg-6">
                <br>
                Vardas/Pavardė galininko linksniu
                <input type="text" name="vardasGal" class="form-control" placeholder="Pvz: Vardenį Pavardenį" required>
            </div>
            
            <div class="col-lg-6">
                <br>
                Atleidimo data
                <input type="date" id="today" name="data" class="form-control" placeholder="Data" required>
            </div>

            <div class="col-lg-6">
                <br>
                <label  for="pasirinkti">Pasirinkite priežastį</label required>
                <select style="max-width:540px" class="rounded" name="priezastis" id="priezastis">                    
                <option value="1">1. Darbuotojo prastova ne dėl darbuotojo kaltės, kuri tęsiasi ilgiau kaip trisdešimt dienų iš eilės.</option>
                <option value="2">2. Darbuotojo prastova ne dėl darbuotojo kaltės, kurią sudaro daugiau kaip keturiasdešimt penkios dienos per paskutinius dvylika mėnesių.</option>
                <option value="3">3. Darbuotojui du mėnesius iš eilės ir daugiau nemokamas visas jam priklausantis darbo užmokestis.</option>
                <option value="4">4. Darbdavys ilgiau kaip du mėnesius iš eilės nevykdo savo įsipareigojimų, kuriuos nustato darbuotojų saugą ir sveikatą reglamentuojančios darbo teisės normos</option>
                <option value="5">5. Darbuotojas negali tinkamai atlikti savo darbo funkcijos dėl ligos ar neįgalumo arba dėl to, kad namuose slaugo šeimos narį</option>
                <option value="6">6. Darbuotojui dirbančiam pagal neterminuotą darbo sutartį sukako senatvės pensijos amžius</option>
                </select>
            </div>

    

        </div>

        <br>
    <br>
        
        
        <button type="submit" class="btn btn-block btn-dark">Generuoti atleidimo iš darbo dokumentus</button>

        <br><br>
    </form>
    
</div>


</body>
</html>



</div>

</x-app-layout>

