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
            model="App\Models\User"  
            name="all-users" 
            exportable 
            
            dates="created_at|d-m-Y" 
            include="id, name|Nom, email, created_at|Date de création" />
            
        </div>
    </div>    
    @livewireScripts 
</body>
</html>