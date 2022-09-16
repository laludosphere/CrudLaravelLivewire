<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>    
    <div class="container mx-auto">
        <div class="m-10">
            <livewire:datatable 
            model="App\Models\Book"
            exportable 
            searchable="user.name, title" 
            filterable="['Maxime ut quo eius.', '	Maiores officiis aperiam aut']"
            hideable
        
            include="id, title|Titre, user.name|Auteur" />
            
        </div>
    </div>    
    @livewireScripts 
</body>
</html>