@extends('layouts.admin')
@section('content')

       <div class="container-fluid  dashboard-content padding-bottom-extra">
              <div class="container-fluid  dashboard-content">
                     <!-- ============================================================== -->
                     <!-- pageheader -->
                     <!-- ============================================================== -->
                     <div class="row">
                         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                             <div class="page-header mb-4">
                                 <h4 class="pageheader-title">Create New Inventory Item </h4>
                                
                             </div>
                         </div>
                     </div>
                     <!-- ============================================================== -->
                     <!-- end pageheader -->
                     <!-- ============================================================== -->
              
                         <div class="row">
                             <div class="col-md-8">
                                 <div class="card">
                                     <h6 class="card-header">Create a new inventory item</h6>
                                     <div class="card-body admin-form">
                                        <form method="POST" action="/admin/inventory/store">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="inputTitle">Title</label>
                                                        <input id="inputTitle" type="text" class="form-control form-control-lg @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" 
                                                        required autocomplete="name" placeholder="Title" autofocus >
        
                                                               @error('title')
                                                                   <span class="invalid-feedback" role="alert">
                                                                       <strong>{{ $message }}</strong>
                                                                   </span>
                                                               @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="inputImage">Image</label>
                                                        <input id="inputImage" type="text" class="inventory1 form-control form-control-lg @error('image_url') is-invalid @enderror" name="image_url" value="{{ old('image_url') }}" 
                                                        required autocomplete="name" placeholder="image url" autofocus >
        
                                                               @error('image_url')
                                                                   <span class="invalid-feedback" role="alert">
                                                                       <strong>{{ $message }}</strong>
                                                                   </span>
                                                               @enderror
                                                    </div>
                                                </div>
                                            </div>
                                  
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="inputProductCategory">Product Category</label>
                                                      
                                                        <select name="category_id" class="form-control" id="inputProductCategory">
                                                            @foreach($productCategories as $productCategory)
                                                            <option value="{{$productCategory->id}}">{{$productCategory->title}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                   
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="inputProductDescription">Product Description </label>
                                                <textarea name="description" row="10" cols="50" class="form-control"></textarea>
                                            </div>
                                           
                                    

                                            <div class="row">
                                                <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                                    
                                                </div>
                                                <div class="col-sm-6 pl-0">
                                                    <p class="text-right">
                                                        <button type="submit" class="btn btn-space btn-dark">Create</button> 
                                                    </p>
                                                </div>
                                            </div>
                                        </form>
                                     </div>
                                 </div>
                                </div> 
                 </div>
       </div>
      
   

@endsection