
<x-app-layout>
    <div>
    
        <h1>Admin Dashboard</h1>

    </div>
    <h1>Pridekite darbuotoja</h1>
    <div>

        <form action="{{url('/addseller')}}" method="POST">

        @csrf

            <div>
                <label>Vardas</label>
                <input type="text" name="name" required ="">
            </div>
            <div>
                 <label>El.Pastas</label>
                 <input type="email" name="email" required ="">
            </div>
            <div>
                <label>slaptažodis</label>
                <input type="password" name="password" required ="">
            </div>

            <div>
                <input type="submit">
            </div>
        </form>

    </div>

    
</x-app-layout>
