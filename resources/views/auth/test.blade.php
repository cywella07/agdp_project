<!DOCTYPE html>
<html>
<head>
  <title>Laravel 9 Livewire Datatables Example - LaravelTuts.com</title>
  @livewireStyles
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>
<body>
  <div class="container mx-auto">
    <div class="shadow-sm rounded bg-gray-200 p-10 my-10">
      <div class="text-center text-2xl font-bold mb-10">
        Laravel 9 Livewire Datatables Example - LaravelTuts.com
      </div>
      <div class="card-body">
        <livewire:user-post-data-table
          searchable="name, email"
          exportable
        />
      </div>
    </div>
  </div>
</body>
@livewireScripts
</html>