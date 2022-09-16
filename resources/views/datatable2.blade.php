<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <script src="https://cdn.tailwindcss.com"></script>
</head>
<body> 
    <style> 
        [x-cloak] {
            display: none;
        }
    </style>
    <div class="container mx-auto">
        <div class="m-10">
      {{-- <livewire:datatable model="App\Models\User"
        exportable
        name="users"
        include="id, name,email,  created_at"
        searchable="name, email"
        hide-pagination="false"
        per-page="15"
        dates="created_at"
        hidden="created_at"
        exclude="['created_at', email]" /> --}}

        {{-- <livewire:datatable users-table 
                        model="App\Models\User" 
                        model="App\Models\Student"
                        name="all-users"
                        exclude="created_at,updated_at"                      
                        exportable="true" 
                        filterable
                        complex
           /> --}}

           <livewire:test
           model="App\Models\Student"  />
        </div>
    </div>    
    @livewireScripts 
</body>
</html>