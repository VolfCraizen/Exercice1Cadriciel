@extends('master')
@section('title', 'Contact')


@section('content')

<section class="page-section about-heading">
    <section class="page-section cta">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h2 class="section-heading mb-5">Contact us!</h2>
                    <div class="cta-inner bg-faded text-center rounded">
                    @isset($data)
                        <p><strong>Name: </strong>{{ $data->name }}</p>
                        <p><strong>Phone: </strong>{{ $data->phone }}</p>
                        <p><strong>Email: </strong>{{ $data->email }}</p>
                        <p><strong>Message: </strong>{{ $data->message }}</p>
                    @else   
                        <form method="post">
                            @csrf
                            <div class="form-floating">
                                <input name="name" class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Name</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-floating">
                                <input  name="email" class="form-control" id="email" type="email" placeholder="Enter your email..." data-sb-validations="required,email" />
                                <label for="email">Email address</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-floating">
                                <input  name="phone" class="form-control" id="phone" type="tel" placeholder="Enter your phone number..." data-sb-validations="required" />
                                <label for="phone">Phone Number</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                            <div class="form-floating">
                                <textarea name="message" class="form-control" id="message" placeholder="Enter your message here..." style="height: 12rem" data-sb-validations="required"></textarea>
                                <label for="message">Message</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                            <br />
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                        To activate this form, sign up at
                                        <br/>
                                        <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <button class="btn btn-primary text-uppercase" type="submit">Send</button>
                        </form>
                    @endisset 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>

@endsection