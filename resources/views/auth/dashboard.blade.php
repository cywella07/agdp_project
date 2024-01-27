<!DOCTYPE html>
<html>
<head>
  <title>AGDP EXAM</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  @livewireStyles

</head>
<body>
@if(session('success'))
    <div class="alert alert-success" id="success-message">
        {{ session('success') }}
    </div>

    <script>
        // Hide the success message after 3 seconds
        setTimeout(function(){
            document.getElementById('success-message').style.display = 'none';
        }, 3000);
    </script>
@endif
<div class="flex justify-end mb-4">
    <form id="logout-form" action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="bg-red-500 text-white p-2 rounded">Logout</button>
    </form>
</div>

  <div class="container mx-auto">
    <div class="shadow-sm rounded bg-gray-200 p-10 my-10">
      <div class="text-center text-2xl font-bold mb-10">
       User Input Fields
      </div>
      
      <div class="card-body">
      <div>
    
            <div class="flex justify-end">
            <button type="button" class="bg-black text-white p-2 rounded" data-toggle="modal" data-target="#exampleModal">
                Add Post
            </button>
            </div>
        <livewire:user-post-data-table
          searchable="title, description"
          exportable
        />
      </div>
    </div>
   
     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create New Post</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                   
                <form method="POST" action="{{ route('userposts.store') }}">
                     @csrf
                     <div class="form-group">
                        <label for="input_title">Title</label>
                        <input type="text" class="form-control" name="input_title" placeholder="Enter your title here">
                    </div>


                        <div class="form-group">
                            <label for="input_description">Description</label>
                            <textarea class="form-control" name="description" placeholder="Enter your description here"></textarea>
                        </div>
                     
                  
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-danger text-dark" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary text-dark">Submit</button>
                </form>

                </div>
            </div>
        </div>
    </div>
  </div>
</body>
@livewireScripts
</html>