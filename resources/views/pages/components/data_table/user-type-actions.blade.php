
<div class="flex">
    @if($buttons['view'])
    
    <a data-toggle="modal" data-target="#view_{{ $id }}" href="javascript:;" style="color: blue;" class="flex items-center mr-3">
    <i class="fa-regular fa-pen-to-square" style="color: green;">  View</i>
</a>
<div id="view_{{ $id }}" class="modal modal-slide-over" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog"> 
        <div class="modal-content"> 
            <div class="modal-header p-5"> 
                <h2 class="font-medium text-base mr-auto">View User Post</h2> 
            </div>
            <div class="modal-body p-10"> 
             
                    <!-- Your form fields go here -->
                    <label for="trucker" class="form-label w-full flex flex-col sm:flex-row">
                        Title <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span>
                    </label>
                    <input class="form-control" type="text" name="title" placeholder="{{$data->title}}" readonly>

                    <label for="trucker" class="form-label w-full flex flex-col sm:flex-row">
                        Description <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span>
                    </label>
                    <textarea class="form-control" name="description" placeholder="{{$data->description}}" readonly></textarea>

                
               
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary text-dark" data-dismiss="modal">Close</button>
            </div>
        </div> 
    </div> 
</div>





    @endif
    @if($buttons['edit'])

    <a data-toggle="modal" data-target="#edit_{{ $id }}" href="javascript:;" style="color: blue;" class="flex items-center mr-3">
    <i class="fa-regular fa-pen-to-square" style="color: blue;">  Edit</i>
</a>
    <div id="edit_{{ $id }}" class="modal modal-slide-over" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog"> 
            <div class="modal-content"> 
                <div class="modal-header p-5"> 
                    <h2 class="font-medium text-base mr-auto">Update Form</h2> 
                </div>
                 <div class="modal-body p-10"> 
                 <form method="POST" action="{{ route('userposts.update', ['userpost' => $id]) }}">
                    @csrf
                    @method('PUT')  
                        <label for="trucker" class="form-label w-full flex flex-col sm:flex-row">
                           Title <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Required</span>
                        </label>
                        <input class="form-control" type="text" name="title" placeholder="{{$data->title}}" required>

                        <label for="trucker" class="form-label w-full flex flex-col sm:flex-row">
                          Description <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Required</span>
                        </label>
                        <textarea class="form-control" name="description" placeholder="{{$data->description}}" required></textarea>
                        <input type="hidden" name="id" value="{{ $id }}">
                        
                     

                        <div class="modal-footer">
                        <div class="row">
                            <div class="col text-right">
                                <button type="submit" class="btn btn-primary text-dark">Submit</button>
                                <button type="button" class="btn btn-primary text-dark" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                    </form>
                    
                    </div> 
                </div> 
            </div> 
    </div>
    @endif

    @if($buttons['delete'])
    <a data-toggle="modal" data-target="#delete-modal-{{ $id }}" href="javascript:;" class="flex items-center mr-3" style="color: red;">
    <i class="fa-regular fa-pen-to-square" style="color: red;">  Delete</i>
</a>
    <div id="delete-modal-{{ $id }}" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="p-5 text-center"> <i data-feather="x-circle" class="w-16 h-16 text-theme-21 mx-auto mt-3"></i>
                        <div class="text-3xl mt-5">Are you sure?</div>
                        <div class="text-gray-600 mt-2">Do you really want to inactivate these records? <br>This process cannot be undone.</div>
                    </div>
                    <div class="px-5 pb-8 text-center"> 
                       
                        <form method="POST" action="{{ route('userposts.destroy', ['userpost' => $id]) }}">
                            @csrf
                            @method('DELETE')
                            <button type="button" data-dismiss="modal" class="btn btn-outline-secondary w-24 text-dark dark:border-dark-5 dark:text-gray-300 mr-1">Cancel</button> 
                            <button type="submit" class="btn btn-danger w-24 text-dark">Inactivate</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    
</div>
 
