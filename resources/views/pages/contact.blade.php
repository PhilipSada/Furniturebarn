@extends('layouts.home-page')

@section('title', 'contact')

@section('content')
<main data-barba="container" data-barba-namespace="contact">
  <div class="otherPagesNav">

  </div>
<div class="pt-4 ml-5">
        <div class="row">
            <div class="col-md-6">
            <h1>Get in touch</h1>
            <p class="contact-text">If you have any enquiry or would like us to make furniture based on your specifications, 
                please fill in the contact form or call us on the phone number given below
             </p>
                <div class="contact-info">
                   
                    <p class="contact-tel"><i class="fa fa-phone pr-2"></i>+23445454545454</p>
                    <p><i class="fa fa-map-marker pr-2"></i>J184 Ikota Shopping Complex, Ajah, Lagos, Nigeria</p>
                    <p><i class="fa fa-clock-o pr-2"></i> Monday-Friday:9am-5pm, Saturday:10am-5pm</p>
                </div>
            </div>
            <div class="col-md-6 pr-5">
                <div class="card">
                    <h5 class="card-header">Send an Enquiry</h5>
                    <div class="card-body">
                    <form method="POST" action="/contact" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputFirstName">First Name</label>
                                    <input id="inputFirstName" type="text" class="form-control form-control-md @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" 
                                    required autocomplete="name" placeholder="John" autofocus >
        
                                            @error('firstname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                </div> 
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputLastName">Last Name</label>
                                    <input id="inputLastName" type="text" class="form-control form-control-md @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" 
                                    required autocomplete="name" placeholder="Doe" autofocus >
        
                                            @error('lastname')
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
                                    <label for="inputEmail">Email</label>
                                    <input id="inputEmail" type="email" class="form-control form-control-md @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" 
                                    required autocomplete="name" placeholder="johndoe@gmail.com" autofocus >
        
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                </div> 
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputPhoneNumber">Phone Number</label>
                                    <input id="inputPhoneNumber" type="tel" class="form-control form-control-md @error('phonenumber') is-invalid @enderror" name="phonenumber" value="{{ old('phonenumber') }}" 
                                    required autocomplete="name" placeholder="+2345757575757" autofocus >
        
                                            @error('phonenumber')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                </div>
                            </div>
                        </div>
                             
                        <div class="form-group">
                            <label for="inputMessage">Please leave us a message </label>
                            <textarea name="message" row="20" cols="50" class="form-control"></textarea>
                            @error('message')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                           @enderror
                        </div>
                         
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputFile">Upload a file </label>
                                    <input id="inputFile" type="file" class="form-control-file form-control-md @error('file') is-invalid @enderror" name="file" value="{{ old('file') }}" 
                                     autofocus >
        
                                            @error('file')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                </div> 
                            </div>
                            <div class="col-md-6">
    
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                
                            </div>
                            <div class="col-sm-6 pl-0">
                                <p class="text-right">
                                    <button type="submit" class="contact-submit">ENQUIRE NOW</button> 
                                </p>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        
        

        </div>
</div>
</main>
@endsection